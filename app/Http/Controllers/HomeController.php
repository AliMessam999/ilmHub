<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Speaker;
use App\Models\Lecture;
use App\Models\Topic;

class HomeController extends Controller
{
    public function index()
    {
        $featuredSpeakers = Speaker::withCount('lectures')->orderByDesc('lectures_count')->take(12)->get();
        $latestLectures = Lecture::with(['speaker', 'topics'])->latest()->take(6)->get();
        $popularTopics = Topic::whereNull('parent_id')->withCount('lectures')->with(['children' => function($q) {
            $q->withCount('lectures');
        }])->orderByDesc('lectures_count')->take(5)->get();

        return view('home', compact('featuredSpeakers', 'latestLectures', 'popularTopics'));
    }
}
