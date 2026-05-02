@extends('layouts.admin')

@section('header', 'Edit Lecture')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8 max-w-4xl">
    <form action="{{ route('admin.lectures.update', $lecture) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="col-span-2">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Lecture Title <span class="text-red-500">*</span></label>
                <input type="text" name="title" id="title" value="{{ old('title', $lecture->title) }}" required 
                    class="w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none @error('title') border-red-500 @enderror">
                @error('title')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-span-2">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                <textarea name="description" id="description" rows="4" 
                    class="w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none @error('description') border-red-500 @enderror">{{ old('description', $lecture->description) }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="speaker_id" class="block text-sm font-medium text-gray-700 mb-2">Speaker <span class="text-red-500">*</span></label>
                <select name="speaker_id" id="speaker_id" required 
                    class="w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none bg-white @error('speaker_id') border-red-500 @enderror">
                    <option value="">Select a Speaker</option>
                    @foreach($speakers as $speaker)
                        <option value="{{ $speaker->id }}" {{ old('speaker_id', $lecture->speaker_id) == $speaker->id ? 'selected' : '' }}>{{ $speaker->name }}</option>
                    @endforeach
                </select>
                @error('speaker_id')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="language" class="block text-sm font-medium text-gray-700 mb-2">Language <span class="text-red-500">*</span></label>
                <input type="text" name="language" id="language" value="{{ old('language', $lecture->language) }}" required placeholder="e.g., English, Urdu, Arabic"
                    class="w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none @error('language') border-red-500 @enderror">
                @error('language')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-span-2">
                <label for="video_url" class="block text-sm font-medium text-gray-700 mb-2">Video URL (YouTube)</label>
                <input type="url" name="video_url" id="video_url" value="{{ old('video_url', $lecture->video_url) }}" placeholder="https://www.youtube.com/watch?v=..." 
                    class="w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none @error('video_url') border-red-500 @enderror">
                @error('video_url')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="date" class="block text-sm font-medium text-gray-700 mb-2">Date Recorded/Published</label>
                <input type="date" name="date" id="date" value="{{ old('date', $lecture->date ? $lecture->date->format('Y-m-d') : '') }}" 
                    class="w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none @error('date') border-red-500 @enderror">
                @error('date')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Topics Covered</label>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-2 border border-gray-200 rounded-md p-4 bg-gray-50">
                    @php
                        $lectureTopicIds = $lecture->topics->pluck('id')->toArray();
                    @endphp
                    @foreach($topics as $topic)
                        <label class="flex items-center text-sm text-gray-700 cursor-pointer">
                            <input type="checkbox" name="topics[]" value="{{ $topic->id }}" 
                                class="rounded text-primary focus:ring-primary border-gray-300"
                                {{ in_array($topic->id, (array)old('topics', $lectureTopicIds)) ? 'checked' : '' }}>
                            <span class="ml-2">{{ $topic->name }}</span>
                        </label>
                    @endforeach
                </div>
                @error('topics')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex gap-4 border-t border-gray-100 pt-6">
            <button type="submit" class="bg-primary hover:bg-green-800 text-white font-medium py-2 px-6 rounded-md transition-colors">
                Update Lecture
            </button>
            <a href="{{ route('admin.lectures.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-2 px-6 rounded-md transition-colors">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
