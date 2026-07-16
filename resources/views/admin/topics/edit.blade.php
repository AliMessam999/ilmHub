@extends('layouts.admin')

@section('header', 'Edit Topic')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8 max-w-xl">
    <form action="{{ route('admin.topics.update', $topic) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-6">
            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Topic Name <span class="text-red-500">*</span></label>
            <input type="text" name="name" id="name" value="{{ old('name', $topic->name) }}" required 
                class="w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none @error('name') border-red-500 @enderror">
            @error('name')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Parent Topic <span class="text-gray-400 text-xs">(optional)</span></label>

            @php $currentParentId = old('parent_id', $topic->parent_id); @endphp

            <div class="flex gap-3 mb-3">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="has_parent" value="0" id="no_parent"
                        class="text-primary focus:ring-primary"
                        {{ $currentParentId ? '' : 'checked' }}
                        onchange="document.getElementById('parent_select').classList.add('hidden');
                                  document.getElementById('parent_id').value = '';">
                    <span class="text-sm text-gray-700">No parent (top-level topic)</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="has_parent" value="1" id="has_parent"
                        class="text-primary focus:ring-primary"
                        {{ $currentParentId ? 'checked' : '' }}
                        onchange="document.getElementById('parent_select').classList.remove('hidden');">
                    <span class="text-sm text-gray-700">Set a parent topic</span>
                </label>
            </div>

            <div id="parent_select" class="{{ $currentParentId ? '' : 'hidden' }}">
                <select name="parent_id" id="parent_id"
                    class="w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none">
                    <option value="">— Select a parent —</option>
                    @foreach($topics as $parent)
                        <option value="{{ $parent->id }}" {{ $currentParentId == $parent->id ? 'selected' : '' }}>{{ $parent->name }}</option>
                        @foreach($parent->children as $child)
                            <option value="{{ $child->id }}" {{ $currentParentId == $child->id ? 'selected' : '' }}>&nbsp;&nbsp;&nbsp;↳ {{ $child->name }}</option>
                        @endforeach
                    @endforeach
                </select>
            </div>

            @error('parent_id')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex gap-4">
            <button type="submit" class="bg-primary hover:bg-green-800 text-white font-medium py-2 px-6 rounded-md transition-colors">
                Update Topic
            </button>
            <a href="{{ route('admin.topics.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-2 px-6 rounded-md transition-colors">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
