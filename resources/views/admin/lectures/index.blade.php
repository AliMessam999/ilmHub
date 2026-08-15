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
                        <div class="flex items-center justify-end gap-2">
                            <a href="{{ route('admin.lectures.edit', $lecture) }}" class="inline-flex items-center justify-center w-9 h-9 rounded-md text-blue-600 hover:bg-blue-50 hover:text-blue-700 transition-colors" title="Edit">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.5-9.5a2.121 2.121 0 113 3L12 15l-4 1 1-4 7.5-7.5z"></path>
                                </svg>
                            </a>
                            <a href="{{ route('lectures.show', $lecture) }}" target="_blank" class="inline-flex items-center justify-center w-9 h-9 rounded-md text-green-600 hover:bg-green-50 hover:text-green-700 transition-colors" title="View">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.036 12.322a1.012 1.012 0 010-.644A11.89 11.89 0 0112 4.5a11.89 11.89 0 019.964 7.178 1.012 1.012 0 010 .644A11.89 11.89 0 0112 19.5a11.89 11.89 0 01-9.964-7.178z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                            </a>
                            <form action="{{ route('admin.lectures.destroy', $lecture) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this lecture?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center justify-center w-9 h-9 rounded-md text-red-600 hover:bg-red-50 hover:text-red-700 transition-colors" title="Delete">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M3 7h18m-5 0V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>
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
