@extends('layouts.admin')

@section('header', 'Add New Topic')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8 max-w-xl">
    <form action="{{ route('admin.topics.store') }}" method="POST">
        @csrf
        
        <div class="mb-6">
            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Topic Name <span class="text-red-500">*</span></label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required 
                class="w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none @error('name') border-red-500 @enderror">
            @error('name')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex gap-4">
            <button type="submit" class="bg-primary hover:bg-green-800 text-white font-medium py-2 px-6 rounded-md transition-colors">
                Save Topic
            </button>
            <a href="{{ route('admin.topics.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-2 px-6 rounded-md transition-colors">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
