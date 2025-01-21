@extends('studentdashboard.include.base')
@section('content')

<div class="page mt-16 bg-gray-50 dark:bg-gray-900 min-h-screen">
    <!-- Page Heading -->
    <div class="border-b border-gray-300 dark:border-gray-700 py-4">
        <div class="container mx-auto px-6 flex items-center">
            <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100">Courses</h1>
            <a href="quiz-edit.html" class="ml-auto bg-green-600 hover:bg-green-500 text-white py-2 px-4 rounded flex items-center">
                <i class="material-icons text-white mr-2">add</i> New Course
            </a>
        </div>
    </div>

    <div class="container mx-auto px-6 py-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach ($courses as $course)
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg overflow-hidden">
                <div class="flex">
                    <div class="w-1/3">
                        <img src="{{ asset('storage/course_images/' . $course->course_image) }}" alt="{{ $course->title }}"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="w-2/3 p-4 flex flex-col">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-2">
                            <a href="#" class="hover:underline">{{ $course->title }}</a>
                        </h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                            {{ Str::limit($course->description, 100) }}
                        </p>
                        <div class="flex items-center mt-auto">
                            <span class="text-sm text-gray-700 dark:text-gray-400 mr-3">
                                Instructor: {{ $course->instructor }}
                            </span>
                            <span class="bg-blue-100 text-blue-600 dark:bg-blue-800 dark:text-blue-100 py-1 px-3 rounded text-sm">
                                ₹{{ $course->discounted_fees }}
                            </span>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('course.show', $course->id) }}"
                               class="text-blue-600 hover:underline text-sm">
                                Start Course
                            </a>
                        </div>
                    </div>
                </div>
            



                               

                                @if ($course->pivot && $course->pivot->batch_id)
                                
                                    <div>
                                        <strong>Selected Batch:</strong> {{ $course->batches->firstWhere('id', $course->pivot->batch_id)->batch_name }}
                                    </div>
                                @else
                                <form action="{{ route('course.updateBatch', $course->id) }}" method="POST">
                                    @csrf
                                    @method('PUT') <!-- Optional if you stick to PUT -->
                                
                                    <div class="form-group">
                                        <label for="batch_{{ $course->id }}">Select Batch:</label>
                                        <select name="batch_id" id="batch_{{ $course->id }}" class="form-control">
                                            <option value="">-- Select a Batch --</option>
                                            @foreach ($course->batches as $batch)
                                                <option value="{{ $batch->id }}" 
                                                    {{ $course->pivot && $course->pivot->batch_id == $batch->id ? 'selected' : '' }}>
                                                    {{ $batch->batch_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-secondary mt-2">Update Batch</button>
                                </form>
                                @endif
                           


            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
