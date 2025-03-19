<x-frontend-layout>
    <section class="bg-gray-100 py-10">
        <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow-lg">

            <!-- Button aligned right -->
            <div class="flex justify-end mb-4">
                <a href="{{ url('/add-course') }}">
                    <button type="button"
                        class="px-4 py-2 text-sm text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 transition duration-200">
                        ADD Courses
                    </button>
                </a>
            </div>

            <!-- Title -->
            <h1 class="text-2xl font-semibold text-gray-800 text-center mb-6">Courses</h1>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto border-collapse bg-white shadow-md rounded-lg">
                    <thead class="bg-gray-300">
                        <tr class="text-left">
                            <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700">ID</th>
                            <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700">Course Image</th>
                            <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700">Course Name</th>
                            <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700">Price</th>
                            <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700">Duration</th>
                            <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700">Description</th>
                            <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        @foreach ($data as $i => $courses)
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">{{ $i + 1 }}</td>

                                <!-- Course Image -->
                                <td class="border border-gray-300 px-4 py-2 text-center">
                                    @if($courses->course_image) 
                                        <img src="{{ asset($courses->course_image) }}" class="h-12 w-12 rounded-full mx-auto">
                                    @else
                                        <span class="text-gray-500">N/A</span>
                                    @endif
                                </td>

                                <td class="border border-gray-300 px-4 py-2 whitespace-nowrap">{{ $courses->Course_name }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $courses->price }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $courses->duration }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $courses->description }}</td>

                                <!-- Actions (Fixed Layout) -->
                                <td class="border border-gray-300 px-4 py-2 text-center">
                                    <div class="flex justify-center gap-2">
                                        <a href="{{ route('edit.course', $courses->id) }}" 
                                            class="bg-yellow-500 text-white px-3 py-2 rounded hover:bg-yellow-600">
                                            Edit
                                        </a>
                                        
                                        <form action="{{ route('delete.course', $courses->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                class="bg-red-600 text-white px-3 py-2 rounded hover:bg-red-700"
                                                onclick="return confirm('Are you sure you want to delete this course?');">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-frontend-layout>
