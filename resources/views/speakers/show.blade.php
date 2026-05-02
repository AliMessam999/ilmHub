@extends('layouts.app')

@section('content')
<!-- Speaker Header -->
<div class="bg-primary text-white border-b-4 border-secondary pt-12 pb-20 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="{{ route('lectures.index') }}" class="text-secondary hover:text-white mb-8 inline-flex items-center gap-2 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Back to Lectures
        </a>
        
        <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
            <!-- Avatar Placeholder -->
            <div class="w-40 h-40 bg-white rounded-full border-4 border-secondary shadow-xl flex items-center justify-center flex-shrink-0 z-10 relative mt-4 md:mt-0 overflow-hidden">
                @if($speaker->image)
                    <img src="{{ asset($speaker->image) }}" alt="{{ $speaker->name }}" class="w-full h-full object-cover">
                @else
                    <span class="text-6xl font-bold text-primary">{{ substr($speaker->name, 0, 1) }}</span>
                @endif
            </div>
            
            <div class="text-center md:text-left flex-grow">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $speaker->name }}</h1>
                <p class="text-gray-300 max-w-3xl text-lg leading-relaxed mb-6">{{ $speaker->bio ?: 'No biography available for this speaker.' }}</p>
                
                <div class="flex flex-wrap items-center justify-center md:justify-start gap-4">
                    <div class="bg-primary-dark px-4 py-2 rounded-lg border border-white/20 shadow-inner flex items-center gap-2">
                        <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        <span class="font-bold">{{ $speaker->lectures->count() }} Lectures</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 -mt-10 relative z-20">
    <div class="flex flex-col md:flex-row gap-8">
        <!-- Sidebar -->
        <div class="w-full md:w-1/4">
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 mb-8 sticky top-24">
                <h3 class="text-xl font-bold text-primary mb-4 border-b border-gray-100 pb-2 flex items-center gap-2">
                    <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
                    Topics Covered
                </h3>
                @if($topics->count() > 0)
                    <div class="flex flex-wrap gap-2">
                        @foreach($topics as $topic)
                            <a href="{{ route('lectures.index', ['speaker' => $speaker->id, 'topic' => [$topic->id]]) }}" class="text-sm bg-gray-100 text-gray-700 hover:bg-primary hover:text-white px-3 py-1.5 rounded-full transition-colors">
                                {{ $topic->name }}
                            </a>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-500 italic text-sm">No topics assigned to lectures yet.</p>
                @endif
            </div>
        </div>

        <!-- Lectures List -->
        <div class="w-full md:w-3/4">
            <div class="bg-white rounded-xl shadow border border-gray-100 p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-8 flex items-center gap-3">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    All Lectures by {{ $speaker->name }}
                </h2>

                @if($speaker->lectures->count() > 0)
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($speaker->lectures as $lecture)
                            <div class="bg-white rounded-lg shadow-sm hover:shadow-md overflow-hidden border border-gray-200 flex flex-col group transition-all">
                                <div class="relative pb-[56.25%] bg-gray-100">
                                    @if($lecture->video_url && str_contains($lecture->video_url, 'youtube.com/watch?v='))
                                        @php
                                            parse_str(parse_url($lecture->video_url, PHP_URL_QUERY), $vars);
                                            $videoId = $vars['v'] ?? '';
                                        @endphp
                                        <img src="https://img.youtube.com/vi/{{ $videoId }}/mqdefault.jpg" alt="{{ $lecture->title }}" class="absolute top-0 left-0 w-full h-full object-cover">
                                    @endif
                                    <div class="absolute inset-0 bg-black bg-opacity-20 group-hover:bg-opacity-40 transition-opacity flex items-center justify-center">
                                        <svg class="w-10 h-10 text-white opacity-0 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <div class="absolute top-2 right-2 bg-primary text-white text-[10px] font-bold px-2 py-1 rounded shadow">
                                        {{ $lecture->language }}
                                    </div>
                                </div>
                                <div class="p-4 flex-grow flex flex-col">
                                    <h3 class="font-bold text-gray-900 mb-2 line-clamp-2 leading-tight group-hover:text-primary transition-colors">
                                        <a href="{{ route('lectures.show', $lecture) }}">{{ $lecture->title }}</a>
                                    </h3>
                                    <div class="mt-auto flex flex-wrap gap-1">
                                        @foreach($lecture->topics->take(2) as $topic)
                                            <span class="text-[10px] text-primary bg-primary/10 px-2 py-0.5 rounded">{{ $topic->name }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-12 text-gray-500">
                        <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                        <p>No lectures uploaded yet.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
