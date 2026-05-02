<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecture;
use App\Models\Speaker;
use App\Models\Topic;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function index()
    {
        $lectures = Lecture::with('speaker')->latest()->paginate(10);
        return view('admin.lectures.index', compact('lectures'));
    }

    public function create()
    {
        $speakers = Speaker::all();
        $topics = Topic::all();
        return view('admin.lectures.create', compact('speakers', 'topics'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'speaker_id' => 'required|exists:speakers,id',
            'video_url' => 'nullable|url|max:255',
            'language' => 'required|string|max:50',
            'date' => 'nullable|date',
            'topics' => 'nullable|array',
            'topics.*' => 'exists:topics,id',
        ]);

        $lecture = Lecture::create($validated);
        
        if (!empty($validated['topics'])) {
            $lecture->topics()->sync($validated['topics']);
        }

        return redirect()->route('admin.lectures.index')->with('success', 'Lecture added successfully.');
    }

    public function edit(Lecture $lecture)
    {
        $speakers = Speaker::all();
        $topics = Topic::all();
        return view('admin.lectures.edit', compact('lecture', 'speakers', 'topics'));
    }

    public function update(Request $request, Lecture $lecture)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'speaker_id' => 'required|exists:speakers,id',
            'video_url' => 'nullable|url|max:255',
            'language' => 'required|string|max:50',
            'date' => 'nullable|date',
            'topics' => 'nullable|array',
            'topics.*' => 'exists:topics,id',
        ]);

        $lecture->update($validated);
        
        if (isset($validated['topics'])) {
            $lecture->topics()->sync($validated['topics']);
        } else {
            $lecture->topics()->detach();
        }

        return redirect()->route('admin.lectures.index')->with('success', 'Lecture updated successfully.');
    }

    public function destroy(Lecture $lecture)
    {
        $lecture->delete();
        return redirect()->route('admin.lectures.index')->with('success', 'Lecture deleted successfully.');
    }
}
