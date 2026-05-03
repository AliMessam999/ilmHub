@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="relative bg-primary text-white overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
            <path d="M50 0 L100 50 L50 100 L0 50 Z" fill="none" stroke="currentColor" stroke-width="2"/>
            <path d="M50 20 L80 50 L50 80 L20 50 Z" fill="none" stroke="currentColor" stroke-width="2"/>
        </svg>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-6">
            Discover Authentic <span class="text-secondary">Islamic Knowledge</span>
        </h1>
        <p class="text-xl md:text-2xl text-gray-200 mb-10 max-w-3xl mx-auto font-light">
            Browse and watch educational lectures from renowned scholars. Filter by topic, language, and speaker to find exactly what you're looking for.
        </p>
        <a href="{{ route('lectures.index') }}" class="inline-block bg-secondary text-primary font-bold text-lg px-8 py-4 rounded-full shadow-lg hover:bg-yellow-400 hover:shadow-xl transition-all transform hover:-translate-y-1">
            Start Exploring
        </a>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <!-- Featured Speakers -->
    <div class="mb-16">
        <div class="flex justify-between items-center mb-8 border-b-2 border-gray-200 pb-4">
            <h2 class="text-3xl font-bold text-primary flex items-center gap-3">
                <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                Featured Speakers
            </h2>
            <div class="flex gap-2">
                <button class="speaker-prev bg-white border border-gray-200 text-primary hover:bg-primary hover:text-white p-2 rounded-full shadow-sm transition-all outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button class="speaker-next bg-white border border-gray-200 text-primary hover:bg-primary hover:text-white p-2 rounded-full shadow-sm transition-all outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
        </div>
        
        <div class="swiper speaker-slider">
            <div class="swiper-wrapper">
                @foreach($featuredSpeakers as $speaker)
                    <div class="swiper-slide">
                        <a href="{{ route('speakers.show', $speaker) }}" class="group bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all block border border-gray-100 h-full">
                            <div class="h-32 bg-primary/5 group-hover:bg-primary/10 flex items-center justify-center transition-colors overflow-hidden">
                                @if($speaker->image)
                                    <img src="{{ asset($speaker->image) }}" alt="{{ $speaker->name }}" class="w-24 h-24 rounded-full object-cover shadow-md border-2 border-primary/20 group-hover:border-primary transition-colors">
                                @else
                                    <div class="w-24 h-24 bg-primary text-secondary rounded-full flex items-center justify-center text-3xl font-bold shadow-md border-2 border-primary/20 group-hover:border-primary transition-colors">
                                        {{ substr($speaker->name, 0, 1) }}
                                    </div>
                                @endif
                            </div>
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-bold text-gray-900 mb-1 group-hover:text-primary transition-colors">{{ $speaker->name }}</h3>
                                <p class="text-sm text-gray-500 bg-gray-100 inline-block px-3 py-1 rounded-full">{{ $speaker->lectures_count }} Lectures</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.speaker-slider', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                navigation: {
                    nextEl: '.speaker-next',
                    prevEl: '.speaker-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 4,
                    },
                }
            });
        });
    </script>

    <!-- Latest Lectures -->
    <div class="mb-16">
        <div class="flex justify-between items-end mb-8 border-b-2 border-gray-200 pb-4">
            <h2 class="text-3xl font-bold text-primary flex items-center gap-3">
                <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                Latest Lectures
            </h2>
            <a href="{{ route('lectures.index') }}" class="text-primary font-semibold hover:text-secondary transition-colors">View All &rarr;</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($latestLectures as $lecture)
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow border border-gray-100 flex flex-col">
                    <div class="relative pb-[56.25%] bg-gray-200">
                        @if($lecture->video_url && str_contains($lecture->video_url, 'youtube.com/watch?v='))
                            @php
                                parse_str(parse_url($lecture->video_url, PHP_URL_QUERY), $vars);
                                $videoId = $vars['v'] ?? '';
                            @endphp
                            <img src="https://img.youtube.com/vi/{{ $videoId }}/mqdefault.jpg" alt="{{ $lecture->title }}" class="absolute top-0 left-0 w-full h-full object-cover">
                            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                                <svg class="w-16 h-16 text-white opacity-80" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                            </div>
                        @else
                            <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center text-gray-400 bg-gray-100">
                                <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                        @endif
                        <div class="absolute top-4 right-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full shadow">
                            {{ $lecture->language }}
                        </div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <div class="flex flex-wrap gap-2 mb-3">
                            @foreach($lecture->topics->take(2) as $topic)
                                <span class="text-xs font-medium text-primary bg-primary/10 px-2 py-1 rounded">{{ $topic->name }}</span>
                            @endforeach
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2 line-clamp-2">
                            <a href="{{ route('lectures.show', $lecture) }}" class="hover:text-primary transition-colors">{{ $lecture->title }}</a>
                        </h3>
                        <p class="text-gray-600 text-sm flex-grow line-clamp-3 mb-4">{{ $lecture->description }}</p>
                        
                        <div class="mt-auto pt-4 border-t border-gray-100 flex items-center justify-between">
                            <a href="{{ route('speakers.show', $lecture->speaker) }}" class="flex items-center gap-2 text-sm font-medium text-gray-700 hover:text-primary transition-colors">
                                <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center text-primary font-bold">
                                    {{ substr($lecture->speaker->name, 0, 1) }}
                                </div>
                                {{ $lecture->speaker->name }}
                            </a>
                            <span class="text-xs text-gray-500">{{ $lecture->date ? $lecture->date->format('M Y') : '' }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Popular Topics -->
    <div>
        <div class="flex justify-between items-end mb-8 border-b-2 border-gray-200 pb-4">
            <h2 class="text-3xl font-bold text-primary flex items-center gap-3">
                <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
                Popular Topics
            </h2>
        </div>
        <div class="flex flex-wrap gap-4">
            @foreach($popularTopics as $topic)
                <a href="{{ route('lectures.index', ['topic' => [$topic->id]]) }}" class="bg-white border border-gray-200 hover:border-secondary hover:bg-secondary/5 text-gray-800 font-medium px-6 py-3 rounded-full shadow-sm hover:shadow transition-all flex items-center gap-2">
                    {{ $topic->name }}
                    <span class="bg-gray-100 text-gray-500 text-xs py-0.5 px-2 rounded-full">{{ $topic->lectures_count }}</span>
                </a>
            @endforeach
        </div>
    </div>
</div>
@endsection