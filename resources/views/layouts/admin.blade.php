<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin - {{ config('app.name', 'Islamic Speakers Hub') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0B4A2B',
                        secondary: '#D4AF37',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans antialiased bg-gray-50 flex h-screen overflow-hidden">
    <!-- Sidebar -->
    <aside class="w-64 bg-primary text-white flex flex-col h-full flex-shrink-0 shadow-xl z-20">
        <div class="h-20 flex items-center px-6 border-b border-white/10">
            <span class="font-bold text-xl tracking-tight text-secondary">ISH Admin Panel</span>
        </div>
        <nav class="flex-grow py-6 px-4 space-y-2 overflow-y-auto">
            <a href="{{ route('admin.dashboard') }}" class="block px-4 py-3 rounded-lg hover:bg-white/10 transition-colors {{ request()->routeIs('admin.dashboard') ? 'bg-white/10 border-l-4 border-secondary font-medium' : '' }}">Dashboard</a>
            <a href="{{ route('admin.speakers.index') }}" class="block px-4 py-3 rounded-lg hover:bg-white/10 transition-colors {{ request()->routeIs('admin.speakers.*') ? 'bg-white/10 border-l-4 border-secondary font-medium' : '' }}">Speakers</a>
            <a href="{{ route('admin.topics.index') }}" class="block px-4 py-3 rounded-lg hover:bg-white/10 transition-colors {{ request()->routeIs('admin.topics.*') ? 'bg-white/10 border-l-4 border-secondary font-medium' : '' }}">Topics</a>
            <a href="{{ route('admin.lectures.index') }}" class="block px-4 py-3 rounded-lg hover:bg-white/10 transition-colors {{ request()->routeIs('admin.lectures.*') ? 'bg-white/10 border-l-4 border-secondary font-medium' : '' }}">Lectures</a>
        </nav>
        <div class="p-4 border-t border-white/10">
            <a href="{{ route('home') }}" class="block w-full text-center py-2 text-sm text-gray-300 hover:text-white transition-colors">Back to Site</a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col h-full overflow-hidden">
        <header class="h-20 bg-white shadow-sm flex items-center justify-between px-8 z-10 flex-shrink-0">
            <h2 class="text-xl font-bold text-gray-800">@yield('header')</h2>
            <div class="flex items-center gap-6">
                <div class="flex flex-col items-end">
                    <span class="text-sm font-semibold text-gray-800">{{ auth()->user()->name }}</span>
                    <span class="text-xs text-gray-500">Administrator</span>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm font-medium text-red-600 hover:text-red-800 transition-colors bg-red-50 px-4 py-2 rounded-lg border border-red-100">
                        Logout
                    </button>
                </form>
            </div>
        </header>

        <!-- Content Area -->
        <div class="flex-1 overflow-auto p-8 bg-gray-50">
            @if(session('success'))
                <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            @if($errors->any())
                <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <ul class="list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </div>
    </main>
</body>
</html>
