<x-frontend-layout>
    <section class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="max-w-5xl w-full bg-white shadow-lg rounded-lg p-8 flex flex-wrap md:flex-nowrap gap-8">
            
            <!-- Form Section -->
            <div class="w-full md:w-1/2">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Add New Course</h2>
                
                <form action="{{ url('/save-course') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @method("POST")
                    <!-- Course Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Course Name</label>
                        <input type="text" name="course_name" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>
                    
                    <!-- Price -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Price ($)</label>
                        <input type="number" name="price" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>

                    <!-- Duration -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Duration</label>
                        <input type="text" name="duration" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" rows="3" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
                    </div>

                    <!-- Course Image Upload -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Course Image</label>
                        <input type="file" name="course_image" id="course-image" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
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
