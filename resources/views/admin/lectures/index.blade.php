@extends('layouts.admin')

@section('header', 'Manage Lectures')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center bg-gray-50">
        <h3 class="text-lg font-bold text-gray-800">All Lectures</h3>
        <!-- Placeholder for Create Button -->
        <a href="{{ route('admin.lectures.create') }}" class="bg-primary hover:bg-green-800 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
            Add New Lecture
        </a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-white border-b border-gray-100 text-xs uppercase text-gray-500 font-medium">
                    <th class="px-6 py-4">Title</th>
                    <th class="px-6 py-4">Speaker</th>
                    <th class="px-6 py-4">Language</th>
                    <th class="px-6 py-4">Date Added</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 text-sm text-gray-700">
                @forelse($lectures as $lecture)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 font-medium text-gray-900 max-w-xs truncate" title="{{ $lecture->title }}">{{ $lecture->title }}</td>
                    <td class="px-6 py-4">{{ $lecture->speaker->name ?? 'N/A' }}</td>
                    <td class="px-6 py-4">
                        <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded text-xs font-medium">{{ $lecture->language }}</span>
                    </td>
                    <td class="px-6 py-4">{{ $lecture->created_at->format('M d, Y') }}</td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.lectures.edit', $lecture) }}" class="text-blue-500 hover:text-blue-700 font-medium mr-3">Edit</a>
                        <a href="{{ route('lectures.show', $lecture) }}" target="_blank" class="text-primary hover:text-green-800 font-medium mr-3">View</a>
                        <form action="{{ route('admin.lectures.destroy', $lecture) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this lecture?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 font-medium">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-8 text-center text-gray-500 italic">No lectures found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($lectures->hasPages())
        <div class="px-6 py-4 border-t border-gray-100 bg-gray-50">
            {{ $lectures->links() }}
        </div>
    @endif
</div>
@endsection
