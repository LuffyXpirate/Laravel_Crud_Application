<x-frontend-layout>
    <section class="bg-gray-100 py-10">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
            
            <h1 class="text-2xl font-semibold text-gray-800 text-center mb-6">Add Student</h1>
            
            <!-- Display Validation Errors -->
            @if ($errors->any())
                <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('update.student', $admission->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                @method('PATCH')  
                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" id="full_name" name="full_name"  value="{{ $admission->full_name  }}" 
                        class="mt-1 p-2 w-full border rounded-md focus:ring focus:ring-blue-300" 
                        placeholder="Enter full name" autofocus>
                </div>
                
                <!-- Phone -->
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                    <input type="text" id="phone" name="phone"  required value="{{ $admission->phone }}"
                        class="mt-1 p-2 w-full border rounded-md focus:ring focus:ring-blue-300" 
                        placeholder="Enter phone number">
                </div>
                
                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email"  required value="{{ $admission->email }}"
                        class="mt-1 p-2 w-full border rounded-md focus:ring focus:ring-blue-300" 
                        placeholder="Enter email address">
                </div>
                
                <!-- Course Selection -->
                <div class="mb-4">
                    <label for="course_id" class="block text-sm font-medium text-gray-700">Course</label>
                    <select id="course_id" name="course_id" required 
                    class="mt-1 p-2 w-full border rounded-md focus:ring focus:ring-blue-300">
                    <option value="">Select a Course</option>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}" 
                            {{ ($admission->course_id == $course->id) ? 'selected' : '' }}>
                            {{ $course->Course_name }}
                        </option>
                    @endforeach
                </select>                
                </div>
                
                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                        Update Student
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-frontend-layout>
