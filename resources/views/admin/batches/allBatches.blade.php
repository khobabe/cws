@extends('admin.base')

@section('title', 'Add Assignment | ')
{{-- {{dd($batches->course_id)}} --}}
@section('content')
<div class="col-span-1 md:col-span-6">
    <nav class="flex items-center space-x-2 text-gray-600 overflow-auto" aria-label="Breadcrumb">
        <a href="#" class="text-gray-600 hover:underline">Dashboard</a>
        <span class="text-gray-400">/</span>

        <a href="#" class="text-blue-600 hover:underline"> {{ $course->title }}</a>
        
      </nav>
      
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Batches </h1>
    {{-- {{dd($batches)}} --}}
        @if($batches->isEmpty())
            <p class="text-gray-600">No batches available for this course.</p>
        @else
            <table class="min-w-full table-auto border-collapse border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">Batch Name</th>
                        <th class="border border-gray-300 px-4 py-2">Start Date</th>
                        <th class="border border-gray-300 px-4 py-2">End Date</th>
                        <th class="border border-gray-300 px-4 py-2">Total Seats</th>
                        <th class="border border-gray-300 px-4 py-2">Available Seats</th>
                        <th class="border border-gray-300 px-4 py-2">Students Enrolled</th>

                        <th class="border border-gray-300 px-4 py-2">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($batches as $batch)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $batch->batch_name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ \Carbon\Carbon::parse($batch->start_date)->timezone('Asia/Kolkata')->format('d-m-Y') }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ \Carbon\Carbon::parse($batch->end_date)->timezone('Asia/Kolkata')->format('d-m-Y') }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $batch->total_seats }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $batch->available_seats }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $batch->users_count }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ route('batches.students', $batch->id) }}" class="text-white bg-teal-400 px-2 py-1 rounded-lg">
                                    View Students
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>  
</div>
@endsection
