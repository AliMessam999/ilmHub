<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Speaker;

class SpeakerController extends Controller
{
    public function show(Speaker $speaker)
    {
        $speaker->load(['lectures' => function($q) {
            $q->with('topics')->latest();
        }]);

        // Get unique topics covered by this speaker
        $topics = $speaker->lectures->flatMap->topics->unique('id');

        return view('speakers.show', compact('speaker', 'topics'));
    }
}
