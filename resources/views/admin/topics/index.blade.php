@extends('layouts.admin')

@section('header', 'Manage Topics')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center bg-gray-50">
        <h3 class="text-lg font-bold text-gray-800">All Topics</h3>
        <!-- Placeholder for Create Button -->
        <a href="{{ route('admin.topics.create') }}" class="bg-primary hover:bg-green-800 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
            Add New Topic
        </a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-white border-b border-gray-100 text-xs uppercase text-gray-500 font-medium">
                    <th class="px-6 py-4">ID</th>
                    <th class="px-6 py-4">Topic Name</th>
                    <th class="px-6 py-4">Lectures Count</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 text-sm text-gray-700">
                @forelse($topics as $topic)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 text-gray-500">#{{ $topic->id }}</td>
                    <td class="px-6 py-4 font-bold text-gray-900">{{ $topic->name }}</td>
                    <td class="px-6 py-4">
                        <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded text-xs font-medium">{{ $topic->lectures->count() ?? 0 }}</span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.topics.edit', $topic) }}" class="text-blue-500 hover:text-blue-700 font-medium mr-3">Edit</a>
                        <a href="{{ route('lectures.index', ['topic' => [$topic->id]]) }}" target="_blank" class="text-primary hover:text-green-800 font-medium mr-3">View Lectures</a>
                        <form action="{{ route('admin.topics.destroy', $topic) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this topic?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 font-medium">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-8 text-center text-gray-500 italic">No topics found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($topics->hasPages())
        <div class="px-6 py-4 border-t border-gray-100 bg-gray-50">
            {{ $topics->links() }}
        </div>
    @endif
</div>
@endsection
