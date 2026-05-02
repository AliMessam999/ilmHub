<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecture;
use App\Models\Speaker;
use App\Models\Topic;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $speakerCount = Speaker::count();
        $topicCount = Topic::count();
        $lectureCount = Lecture::count();

        $recentLectures = Lecture::with('speaker')->latest()->take(5)->get();

        return view('admin.dashboard', compact('speakerCount', 'topicCount', 'lectureCount', 'recentLectures'));
    }
}
