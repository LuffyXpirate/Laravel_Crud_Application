<x-frontend-layout>
    <section class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="max-w-5xl w-full bg-white shadow-lg rounded-lg p-8 flex flex-wrap md:flex-nowrap gap-8">
            
            <!-- Form Section -->
            <div class="w-full md:w-1/2">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Add New Course</h2>
                
                <form action="{{ route('update.course', $course->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4"><form action="{{ route('update.course', $course->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @method('PATCH')  <!-- Change from PUT to PATCH -->
                
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Course Name</label>
                        <input type="text" name="course_name" value="{{ old('course_name', $course->Course_name) }}" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>
                
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Price ($)</label>
                        <input type="number" name="price" value="{{ old('price', $course->price) }}" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>
                
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Duration</label>
                        <input type="text" name="duration" value="{{ old('duration', $course->duration) }}" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>
                
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" rows="3" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">{{ old('description', $course->description) }}</textarea>
                    </div>
                
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Course Image</label>
                        <input type="file" name="course_image" id="course-image" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                
                        @if ($course->course_image)
                            <div class="mt-2">
                                <img src="{{ asset($course->course_image) }}" class="h-20 w-20 rounded-lg shadow-md">
                            </div>
                        @endif
                    </div>
                
                    <button type="submit" class="w-full py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-400 focus:outline-none transition duration-200">
                        Submit
                    </button>
                </form>
                
                    @csrf
                    @method('PUT')  <!-- Changed PUT to PATCH -->
                
                    <!-- Course Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Course Name</label>
                        <input type="text" name="course_name" value="{{ old('course_name', $course->Course_name) }}" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>
                    
                    <!-- Price -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Price ($)</label>
                        <input type="number" name="price" value="{{ old('price', $course->price) }}" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>

                    <!-- Duration -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Duration</label>
                        <input type="text" name="duration" value="{{ old('duration', $course->duration) }}" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>

                    <!-- Description (Fixed) -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" rows="3" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">{{ old('description', $course->description) }}</textarea>
                    </div>

                    <!-- Course Image Upload -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Course Image</label>
                        <input type="file" name="course_image" id="course-image" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">

                        <!-- Show Existing Image -->
                        @if ($course->course_image)
                            <div class="mt-2">
                                <img src="{{ asset($course->course_image) }}" class="h-20 w-20 rounded-lg shadow-md">
                            </div>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-400 focus:outline-none transition duration-200">
                        Submit
                    </button>
                </form>
            </div>

        </div>
    </section>
</x-frontend-layout>
