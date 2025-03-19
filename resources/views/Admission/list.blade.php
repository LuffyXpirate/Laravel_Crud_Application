<x-frontend-layout>
    <section class="bg-gray-100 py-10">
        <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow-lg">
            <!-- Button aligned right -->
            <div class="flex justify-end mb-4">
                <a href="{{ url('/add-student') }}">
                    <button type="button"
                        class="px-4 py-2 text-sm text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 transition duration-200">
                        Admit Student
                    </button>
                </a>
            </div>

            <!-- Title -->
            <h1 class="text-2xl font-semibold text-gray-800 text-center mb-6">Students</h1>

            <!-- Table -->
            <div class="overflow-auto">
                <table class="w-full table-auto border-collapse bg-white shadow-md rounded-lg">
                    <thead class="bg-gray-300">
                        <tr class="text-left">
                            <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700">ID</th>
                            <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700">Name</th>
                            <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700">Phone</th>
                            <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700">Email</th>
                            <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700">Course</th>
                            <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        @forelse ($admissions as $i => $student)
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">{{ $i + 1 }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $student->full_name }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $student->phone }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $student->email }}</td>
                                
                                <!-- Display Course from Foreign Key Relationship -->
                                <td class="border border-gray-300 px-4 py-2">
                                    {{ $student->course ? $student->course->Course_name : 'N/A' }}
                                </td>
                                

                                <!-- Actions -->
                                <td class="border border-gray-300 px-4 py-2 text-center">
                                    <div class="flex justify-center gap-2">
                                        <a href="{{ route('edit.student', $student->id) }}" 
                                            class="bg-yellow-500 text-white px-3 py-2 rounded hover:bg-yellow-600">
                                            Edit
                                        </a>
                                        
                                        <form action="{{ route('delete.student', $student->id) }}" method="POST" class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                class="bg-red-600 text-white px-3 py-2 rounded hover:bg-red-700 delete-btn"
                                                onclick="return confirm('Are you sure you want to delete this student?');">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4 text-gray-500">
                                    No students found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>


</x-frontend-layout>
