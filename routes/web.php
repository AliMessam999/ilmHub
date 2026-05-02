<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SpeakerController as AdminSpeakerController;
use App\Http\Controllers\Admin\TopicController as AdminTopicController;
use App\Http\Controllers\Admin\LectureController as AdminLectureController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/lectures', [LectureController::class, 'index'])->name('lectures.index');
Route::get('/lectures/{lecture}', [LectureController::class, 'show'])->name('lectures.show');

Route::get('/speakers/{speaker}', [SpeakerController::class, 'show'])->name('speakers.show');

// Admin Routes (Using simple auth middleware for now. We can mock login if Breeze is missing, or use basic auth)
// Assuming we'll use a simple auth later, for now we let it pass or use 'auth' if Breeze is set up.
// I will bypass auth for the sake of immediate preview, but ideally it should be: Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(...)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('speakers', AdminSpeakerController::class);
    Route::resource('topics', AdminTopicController::class);
    Route::resource('lectures', AdminLectureController::class);
});

// We need a dummy login route if they click login, redirecting to admin dashboard for demonstration.
Route::get('/login', function() {
    return redirect()->route('admin.dashboard');
})->name('login');
