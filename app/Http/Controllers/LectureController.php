<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecture;
use App\Models\Speaker;
use App\Models\Topic;

class LectureController extends Controller
{
    public function index(Request $request)
    {
        $query = Lecture::with(['speaker', 'topics'])->latest();

        if ($request->filled('speaker')) {
            $query->where('speaker_id', $request->speaker);
        }

        if ($request->filled('topic')) {
            $query->whereHas('topics', function ($q) use ($request) {
                $q->whereIn('topics.id', (array)$request->topic);
            });
        }

        if ($request->filled('language')) {
            $query->where('language', $request->language);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhereHas('speaker', function($sq) use ($search) {
                      $sq->where('name', 'like', "%{$search}%");
                  });
            });
        }

        if ($request->filled('from_date')) {
            $query->whereDate('date', '>=', $request->from_date);
        }

        if ($request->filled('to_date')) {
            $query->whereDate('date', '<=', $request->to_date);
        }

        if ($request->filled('sort')) {
            if ($request->sort == 'oldest') {
                $query->reorder('created_at', 'asc');
            }
        }

        $lectures = $query->paginate(12)->withQueryString();
        
        $speakers = Speaker::orderBy('name')->get();
        $topics = Topic::orderBy('name')->get();
        $languages = Lecture::select('language')->distinct()->pluck('language');

        return view('lectures.index', compact('lectures', 'speakers', 'topics', 'languages'));
    }

    public function show(Lecture $lecture)
    {
        $lecture->load(['speaker', 'topics']);
        $relatedLectures = Lecture::where('id', '!=', $lecture->id)
            ->where(function ($query) use ($lecture) {
                $query->where('speaker_id', $lecture->speaker_id)
                      ->orWhereHas('topics', function ($q) use ($lecture) {
                          $q->whereIn('topics.id', $lecture->topics->pluck('id'));
                      });
            })
            ->latest()
            ->take(4)
            ->get();

        return view('lectures.show', compact('lecture', 'relatedLectures'));
    }
}
