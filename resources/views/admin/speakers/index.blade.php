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
                            <img src="{{ asset($speaker->image) }}" alt="{{ $speaker->name }}" class="w-8 h-8 rounded-full object-cover border border-gray-200">
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
                        <a href="{{ route('admin.speakers.edit', $speaker) }}" class="text-blue-500 hover:text-blue-700 font-medium mr-3">Edit</a>
                        <a href="{{ route('speakers.show', $speaker) }}" target="_blank" class="text-primary hover:text-green-800 font-medium mr-3">View</a>
                        <form action="{{ route('admin.speakers.destroy', $speaker) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this speaker?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 font-medium">Delete</button>
                        </form>
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
