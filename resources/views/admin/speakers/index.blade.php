@extends('layouts.admin')

@section('header', 'Manage Speakers')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center bg-gray-50">
        <h3 class="text-lg font-bold text-gray-800">All Speakers</h3>
        <!-- Placeholder for Create Button -->
        <a href="{{ route('admin.speakers.create') }}" class="bg-primary hover:bg-green-800 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
            Add New Speaker
        </a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-white border-b border-gray-100 text-xs uppercase text-gray-500 font-medium">
                    <th class="px-6 py-4">Name</th>
                    <th class="px-6 py-4">Bio snippet</th>
                    <th class="px-6 py-4">Lectures Count</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 text-sm text-gray-700">
                @forelse($speakers as $speaker)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 font-bold text-gray-900 flex items-center gap-3">
                        @if($speaker->image)
                            <img src="{{ Storage::disk('cloudinary')->url($speaker->image) }}" alt="{{ $speaker->name }}" class="w-8 h-8 rounded-full object-cover border border-gray-200">
                        @else
                            <div class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center text-xs font-bold">
                                {{ substr($speaker->name, 0, 1) }}
                            </div>
                        @endif
                        {{ $speaker->name }}
                    </td>
                    <td class="px-6 py-4 max-w-sm truncate text-gray-500" title="{{ $speaker->bio }}">
                        {{ $speaker->bio ?? 'No biography provided' }}
                    </td>
                    <td class="px-6 py-4">
                        <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded text-xs font-medium">{{ $speaker->lectures->count() ?? 0 }}</span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <a href="{{ route('admin.speakers.edit', $speaker) }}" class="inline-flex items-center justify-center w-9 h-9 rounded-md text-blue-600 hover:bg-blue-50 hover:text-blue-700 transition-colors" title="Edit">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.5-9.5a2.121 2.121 0 113 3L12 15l-4 1 1-4 7.5-7.5z"></path>
                                </svg>
                            </a>
                            <a href="{{ route('speakers.show', $speaker) }}" target="_blank" class="inline-flex items-center justify-center w-9 h-9 rounded-md text-green-600 hover:bg-green-50 hover:text-green-700 transition-colors" title="View">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.036 12.322a1.012 1.012 0 010-.644A11.89 11.89 0 0112 4.5a11.89 11.89 0 019.964 7.178 1.012 1.012 0 010 .644A11.89 11.89 0 0112 19.5a11.89 11.89 0 01-9.964-7.178z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                            </a>
                            <form action="{{ route('admin.speakers.destroy', $speaker) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this speaker?');">
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
                    <td colspan="4" class="px-6 py-8 text-center text-gray-500 italic">No speakers found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($speakers->hasPages())
        <div class="px-6 py-4 border-t border-gray-100 bg-gray-50">
            {{ $speakers->links() }}
        </div>
    @endif
</div>
@endsection
