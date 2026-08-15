<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SpeakerController extends Controller
{
    public function index()
    {
        $speakers = Speaker::latest()->paginate(10);
        return view('admin.speakers.index', compact('speakers'));
    }

    public function create()
    {
        return view('admin.speakers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('speakers', 'cloudinary');
        }

        Speaker::create($validated);
        return redirect()->route('admin.speakers.index')->with('success', 'Speaker added successfully.');
    }

    public function edit(Speaker $speaker)
    {
        return view('admin.speakers.edit', compact('speaker'));
    }

    public function update(Request $request, Speaker $speaker)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($speaker->image) {
                Storage::disk('cloudinary')->delete($speaker->image);
            }
            $validated['image'] = $request->file('image')->store('speakers', 'cloudinary');
        }

        $speaker->update($validated);
        return redirect()->route('admin.speakers.index')->with('success', 'Speaker updated successfully.');
    }

    public function destroy(Speaker $speaker)
    {
        if ($speaker->image) {
            Storage::disk('cloudinary')->delete($speaker->image);
        }

        $speaker->delete();
        return redirect()->route('admin.speakers.index')->with('success', 'Speaker deleted successfully.');
    }
}