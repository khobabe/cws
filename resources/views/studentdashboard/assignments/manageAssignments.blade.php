@extends('studentDashboard.include.base')

@section('title', 'Upload Assignment File')

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Manage Assignments</h1>

        <!-- Add Assignment Button -->


        <!-- Assignments Tble -->
        <div class="bg-gray-50 p-6 shadow-lg rounded-lg">
            @if($courses->isNotEmpty())
                @foreach($courses as $course)
                <div class="mb-6">
                    <div class="bg-blue-500 text-white px-4 py-3 rounded-t-lg">
                        <h2 class="text-lg font-semibold">{{ $course->title }}</h2>
                    </div>
                    <div class="overflow-x-auto bg-white shadow-md rounded-b-lg">
                        <table class="min-w-full border-collapse border border-gray-200">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-4 py-2 border text-left">ID</th>
                                    <th class="px-4 py-2 border text-left">Title</th>
                                    <th class="px-4 py-2 border text-left">Description</th>
                                    {{-- <th class="px-4 py-2 border text-center">Status</th> --}}
                                    <th class="px-4 py-2 border text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($course->assignments as $assignment)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2 border">{{ $assignment->id }}</td>
                                    <td class="px-4 py-2 border">{{ $assignment->title }}</td>
                                    
                                    <td class="px-4 py-2 border">{!! Str::limit($assignment->description, 50) !!}</td>
                                    {{-- <td class="px-4 py-2 border text-center">
                                        <span class="px-2 py-1 text-sm rounded-full 
                                            {{ $assignment->status ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                            {{ $assignment->status ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td> --}}
                                    <td class="px-4 py-2 border text-center">
                                        <a href="{{ route('student.assignment-upload', $assignment->id) }}" 
                                           class="text-blue-500 hover:underline">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="px-4 py-2 border text-center text-gray-500">
                                        No assignments available for this course.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                @endforeach
            @else
                <p class="text-gray-500 text-center">No courses available for the logged-in student.</p>
            @endif
        </div>
        

        <!-- Pagination -->

    </div>
@endsection
