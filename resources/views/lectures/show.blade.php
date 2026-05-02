@extends('layouts.app')

@section('content')
<div class="bg-primary text-white border-b-4 border-secondary">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <a href="{{ route('lectures.index') }}" class="text-secondary hover:text-white mb-6 inline-flex items-center gap-2 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Back to Lectures
        </a>
        <h1 class="text-3xl md:text-5xl font-bold mb-4">{{ $lecture->title }}</h1>
        <div class="flex flex-wrap items-center gap-6 text-sm text-gray-300">
            <a href="{{ route('speakers.show', $lecture->speaker) }}" class="flex items-center gap-2 hover:text-secondary transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                <span class="font-medium text-white">{{ $lecture->speaker->name }}</span>
            </a>
            <span class="flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                {{ $lecture->date ? $lecture->date->format('F d, Y') : 'Unknown Date' }}
            </span>
            <span class="flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path></svg>
                {{ $lecture->language }}
            </span>
        </div>
    </div>
</div>

<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-12 border border-gray-100">
        <!-- Video Player -->
        <div class="relative pb-[56.25%] bg-black">
            @if($lecture->video_url)
                @php
                    $isYoutube = str_contains($lecture->video_url, 'youtube.com') || str_contains($lecture->video_url, 'youtu.be');
                    $embedUrl = $lecture->video_url;
                    if($isYoutube) {
                        if(str_contains($lecture->video_url, 'youtube.com/watch?v=')) {
                            parse_str(parse_url($lecture->video_url, PHP_URL_QUERY), $vars);
                            $videoId = $vars['v'] ?? '';
                            $embedUrl = 'https://www.youtube.com/embed/' . $videoId;
                        } elseif(str_contains($lecture->video_url, 'youtu.be/')) {
                            $videoId = basename(parse_url($lecture->video_url, PHP_URL_PATH));
                            $embedUrl = 'https://www.youtube.com/embed/' . $videoId;
                        }
                    }
                @endphp
                <iframe src="{{ $embedUrl }}" class="absolute top-0 left-0 w-full h-full" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            @else
                <div class="absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center text-gray-500">
                    <svg class="w-16 h-16 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    <p>No video available for this lecture.</p>
                </div>
            @endif
        </div>

        <!-- Lecture Info -->
        <div class="p-8">
            <div class="flex flex-wrap gap-2 mb-6">
                @foreach($lecture->topics as $topic)
                    <a href="{{ route('lectures.index', ['topic' => [$topic->id]]) }}" class="bg-primary/10 text-primary hover:bg-primary hover:text-white text-sm font-bold px-3 py-1 rounded transition-colors">
                        {{ $topic->name }}
                    </a>
                @endforeach
            </div>

            <h2 class="text-2xl font-bold text-gray-900 mb-4 border-b pb-2">Description</h2>
            <div class="prose max-w-none text-gray-700 leading-relaxed">
                {!! nl2br(e($lecture->description)) !!}
            </div>
            
            @if(!$lecture->description)
                <p class="text-gray-500 italic">No description provided for this lecture.</p>
            @endif
        </div>
    </div>

    <!-- Related Lectures -->
    @if($relatedLectures->count() > 0)
        <div>
            <h3 class="text-2xl font-bold text-primary mb-6 flex items-center gap-2 border-b-2 border-gray-200 pb-2">
                <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                Related Lectures
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($relatedLectures as $related)
                    <div class="bg-white rounded-lg shadow hover:shadow-md transition-shadow overflow-hidden border border-gray-100 flex flex-col group">
                        <div class="relative pb-[56.25%] bg-gray-200">
                            @if($related->video_url && str_contains($related->video_url, 'youtube.com/watch?v='))
                                @php
                                    parse_str(parse_url($related->video_url, PHP_URL_QUERY), $vars);
                                    $videoId = $vars['v'] ?? '';
                                @endphp
                                <img src="https://img.youtube.com/vi/{{ $videoId }}/mqdefault.jpg" alt="{{ $related->title }}" class="absolute top-0 left-0 w-full h-full object-cover">
                            @endif
                            <div class="absolute inset-0 bg-black bg-opacity-20 group-hover:bg-opacity-40 transition-opacity flex items-center justify-center">
                                <svg class="w-10 h-10 text-white opacity-0 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                            </div>
                        </div>
                        <div class="p-4 flex-grow flex flex-col">
                            <h4 class="font-bold text-gray-900 mb-1 line-clamp-2 text-sm group-hover:text-primary transition-colors">
                                <a href="{{ route('lectures.show', $related) }}">{{ $related->title }}</a>
                            </h4>
                            <p class="text-xs text-gray-500 mt-auto">{{ $related->speaker->name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
@endsection
