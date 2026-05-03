@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="flex flex-col md:flex-row gap-8">
        <!-- Sidebar Filters -->
        <div class="w-full md:w-1/4">
            <div class="bg-white p-6 rounded-xl shadow-md sticky top-24 border border-gray-100">
                <h3 class="text-xl font-bold text-primary mb-6 flex items-center gap-2">
                    <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg>
                    Filters
                </h3>
                
                <form action="{{ route('lectures.index') }}" method="GET">
                    <!-- Search -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Search</label>
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Title or Speaker..." class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none">
                    </div>

                    <!-- Date Range -->
                    <div class="grid grid-cols-2 gap-3 mb-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">From Date</label>
                            <input type="date" name="from_date" value="{{ request('from_date') }}" class="w-full border border-gray-300 rounded-md shadow-sm px-2 py-2 text-sm focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">To Date</label>
                            <input type="date" name="to_date" value="{{ request('to_date') }}" class="w-full border border-gray-300 rounded-md shadow-sm px-2 py-2 text-sm focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none">
                        </div>
                    </div>

                    <!-- Speaker -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Speaker</label>
                        <select name="speaker" class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none bg-white">
                            <option value="">All Speakers</option>
                            @foreach($speakers as $s)
                                <option value="{{ $s->id }}" {{ request('speaker') == $s->id ? 'selected' : '' }}>{{ $s->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Language -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Language</label>
                        <select name="language" class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none bg-white">
                            <option value="">All Languages</option>
                            @foreach($languages as $lang)
                                <option value="{{ $lang }}" {{ request('language') == $lang ? 'selected' : '' }}>{{ $lang }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Topics (Multi-select via checkboxes) -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Topics</label>
                        <div class="max-h-48 overflow-y-auto pr-2 space-y-2 border border-gray-200 rounded-md p-3 bg-gray-50">
                            @foreach($topics as $topic)
                                <label class="flex items-center text-sm text-gray-700 cursor-pointer">
                                    <input type="checkbox" name="topic[]" value="{{ $topic->id }}" 
                                        class="rounded text-primary focus:ring-primary border-gray-300"
                                        {{ in_array($topic->id, (array)request('topic', [])) ? 'checked' : '' }}>
                                    <span class="ml-2">{{ $topic->name }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- Sort -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Sort By</label>
                        <select name="sort" class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none bg-white">
                            <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Latest</option>
                            <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Oldest</option>
                        </select>
                    </div>

                    <div class="flex gap-2">
                        <button type="submit" class="flex-1 bg-primary text-white py-2 px-4 rounded-md hover:bg-green-900 font-medium transition-colors">Apply</button>
                        <a href="{{ route('lectures.index') }}" class="flex-1 bg-gray-200 text-gray-700 py-2 px-4 rounded-md text-center font-medium hover:bg-gray-300 transition-colors">Reset</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Lecture Grid -->
        <div class="w-full md:w-3/4">
            <h2 class="text-3xl font-bold text-primary mb-8 border-b-2 border-gray-200 pb-4">Browse Lectures</h2>
            
            @if($lectures->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($lectures as $lecture)
                        <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow flex flex-col group">
                            <div class="relative pb-[56.25%] bg-gray-200">
                                @if($lecture->video_url && str_contains($lecture->video_url, 'youtube.com/watch?v='))
                                    @php
                                        parse_str(parse_url($lecture->video_url, PHP_URL_QUERY), $vars);
                                        $videoId = $vars['v'] ?? '';
                                    @endphp
                                    <img src="https://img.youtube.com/vi/{{ $videoId }}/mqdefault.jpg" alt="{{ $lecture->title }}" class="absolute top-0 left-0 w-full h-full object-cover">
                                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                        <svg class="w-12 h-12 text-white opacity-80" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                                    </div>
                                @else
                                    <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center text-gray-400 bg-gray-100">
                                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    </div>
                                @endif
                                <div class="absolute top-3 right-3 bg-primary text-secondary text-xs font-bold px-2 py-1 rounded shadow border border-secondary/20">
                                    {{ $lecture->language }}
                                </div>
                            </div>
                            <div class="p-5 flex-grow flex flex-col">
                                <div class="flex flex-wrap gap-1.5 mb-3">
                                    @foreach($lecture->topics->take(2) as $topic)
                                        <span class="text-[10px] font-bold text-primary bg-primary/10 px-2 py-0.5 rounded">{{ $topic->name }}</span>
                                    @endforeach
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2 line-clamp-2 leading-tight">
                                    <a href="{{ route('lectures.show', $lecture) }}" class="hover:text-primary transition-colors">{{ $lecture->title }}</a>
                                </h3>
                                <p class="text-gray-500 text-sm flex-grow line-clamp-2 mb-4">{{ $lecture->description }}</p>
                                
                                <div class="mt-auto pt-4 border-t border-gray-100 flex items-center justify-between">
                                    <a href="{{ route('speakers.show', $lecture->speaker) }}" class="flex items-center gap-2 text-xs font-semibold text-gray-700 hover:text-primary transition-colors">
                                        <div class="w-6 h-6 bg-gray-200 rounded-full flex items-center justify-center text-primary">
                                            {{ substr($lecture->speaker->name, 0, 1) }}
                                        </div>
                                        {{ $lecture->speaker->name }}
                                    </a>
                                    <span class="text-xs text-gray-400">{{ $lecture->date ? $lecture->date->format('M Y') : '' }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <div class="mt-10">
                    {{ $lectures->links('pagination::tailwind') }}
                </div>
            @else
                <div class="bg-white rounded-xl shadow border border-gray-200 p-12 text-center text-gray-500">
                    <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <p class="text-xl">No lectures found matching your criteria.</p>
                    <a href="{{ route('lectures.index') }}" class="inline-block mt-4 text-primary font-medium hover:underline">Clear all filters</a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
