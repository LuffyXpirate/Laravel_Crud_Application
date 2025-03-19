<x-frontend-layout>
    <section class="bg-gray-100 py-6">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-lg">
            <h1 class="text-2xl font-semibold text-gray-800 text-center mb-6"> Edit Student Registration</h1>

            <form action="{{ route('update.student', $form->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                @method('PUT')

                <div>
                    <label for="name" class="block font-medium text-gray-700 text-sm">Name</label>
                    <input type="text" name="name" value={{ $form->name }} placeholder="Enter full name"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="email" class="block font-medium text-gray-700 text-sm">Email</label>
                    <input type="email" name="email" value={{ $form->email }} placeholder="Enter email"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="phone" class="block font-medium text-gray-700 text-sm">Phone</label>
                    <input type="number" name="phone" value={{ $form->phone }} placeholder="Enter phone number"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="dob" class="block font-medium text-gray-700 text-sm">Date of Birth</label>
                    <input type="date" name="dob" value={{ $form->dob }}
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="address" class="block font-medium text-gray-700 text-sm">Address</label>
                    <input type="text" name="address" placeholder="Enter address" value={{ $form->address }}
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="course" class="block font-medium text-gray-700 text-sm">Select Course</label>
                    <select name="course"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="bca" {{ $form->course == 'bca' ? 'selected' : '' }}>BCA</option>
                        <option value="cs" {{ $form->course == 'cs' ? 'selected' : '' }}>Computer Science</option>
                        <option value="bba" {{ $form->course == 'bba' ? 'selected' : '' }}>BBA</option>
                        <option value="other" {{ $form->course == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>

                <div>
                    <label for="guardian_name" class="block font-medium text-gray-700 text-sm">Guardian Name</label>
                    <input type="text" name="guardian_name" placeholder="Enter guardian's name" value={{ $form->guardian_name }}
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="guardian_phone" class="block font-medium text-gray-700 text-sm">Guardian Contact</label>
                    <input type="number" name="guardian_phone" placeholder="Guardian's contact number" value={{ $form->guardian_phone }}
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="profile_picture" class="block font-medium text-gray-700 text-sm">Upload Profile
                        Picture</label>
                    <input type="file" name="image" value={{ $form->image }}
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="password" class="block font-medium text-gray-700 text-sm">Password</label>
                        <input type="password" name="password" placeholder="Enter password" value={{ $form->password }}
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <div class="flex items-center space-x-2">
                    <input type="checkbox" name="terms" required class="w-4 h-4 text-blue-600">
                    <label class="text-sm text-gray-700">I agree to the terms and conditions</label>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
                   Update
                    </button>
                </div>
            </form>
        </div>
    </section>

  
</x-frontend-layout>
