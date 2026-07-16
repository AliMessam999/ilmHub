<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::with(['parent', 'children', 'lectures'])->latest()->paginate(10);
        return view('admin.topics.index', compact('topics'));
    }

    public function create()
    {
        $topics = Topic::whereNull('parent_id')->with('children')->get();
        return view('admin.topics.create', compact('topics'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'parent_id' => 'nullable|exists:topics,id',
        ]);

        Topic::create($validated);
        return redirect()->route('admin.topics.index')->with('success', 'Topic added successfully.');
    }

    public function edit(Topic $topic)
    {
        $topics = Topic::where('id', '!=', $topic->id)->whereNull('parent_id')->with('children')->get();
        return view('admin.topics.edit', compact('topic', 'topics'));
    }

    public function update(Request $request, Topic $topic)
    {
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'parent_id' => 'nullable|exists:topics,id|not_in:' . $topic->id,
        ]);

        $topic->update($validated);
        return redirect()->route('admin.topics.index')->with('success', 'Topic updated successfully.');
    }

    public function destroy(Topic $topic)
    {
        $topic->delete();
        return redirect()->route('admin.topics.index')->with('success', 'Topic deleted successfully.');
    }
}
