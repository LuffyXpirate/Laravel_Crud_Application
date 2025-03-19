<x-frontend-layout>
    <section class="bg-gray-100 py-6">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-lg">
            <h1 class="text-2xl font-semibold text-gray-800 text-center mb-6">Student Registration</h1>

            <form action="/save-student" method="post" class="space-y-4" enctype="multipart/form-data">
                @csrf

                <div>
                    <label for="name" class="block font-medium text-gray-700 text-sm">Name</label>
                    <input type="text" name="name" placeholder="Enter full name" 
                           class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="email" class="block font-medium text-gray-700 text-sm">Email</label>
                    <input type="email" name="email" placeholder="Enter email" 
                           class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="phone" class="block font-medium text-gray-700 text-sm">Phone</label>
                    <input type="number" name="phone" placeholder="Enter phone number" 
                           class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="dob" class="block font-medium text-gray-700 text-sm">Date of Birth</label>
                    <input type="date" name="dob" 
                           class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="address" class="block font-medium text-gray-700 text-sm">Address</label>
                    <input type="text" name="address" placeholder="Enter address" 
                           class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="course" class="block font-medium text-gray-700 text-sm">Select Course</label>
                    <select name="course" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="bca">BCA</option>
                        <option value="cs">Computer Science</option>
                        <option value="bba">BBA</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div>
                    <label for="guardian_name" class="block font-medium text-gray-700 text-sm">Guardian Name</label>
                    <input type="text" name="guardian_name" placeholder="Enter guardian's name" 
                           class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="guardian_phone" class="block font-medium text-gray-700 text-sm">Guardian Contact</label>
                    <input type="number" name="guardian_phone" placeholder="Guardian's contact number" 
                           class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="profile_picture" class="block font-medium text-gray-700 text-sm">Upload Profile Picture</label>
                    <input type="file" name="image" 
                           class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="password" class="block font-medium text-gray-700 text-sm">Password</label>
                        <input type="password" name="password" placeholder="Enter password" 
                               class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <div class="flex items-center space-x-2">
                    <input type="checkbox" name="terms" required class="w-4 h-4 text-blue-600">
                    <label class="text-sm text-gray-700">I agree to the terms and conditions</label>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </section>

    <section class="bg-gray-100 py-10">
        <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow-lg">
            <h1 class="text-2xl font-semibold text-gray-800 text-center mb-6">Student List</h1>
    
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto border-collapse bg-white shadow-md rounded-lg">
                    <thead class="bg-gray-300">
                        <tr class="text-left">
                            <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700">ID</th>
                            <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700">Name</th>
                            <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700">Email</th>
                            <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700">Phone</th>
                            <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700">DOB</th>
                            <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700">Address</th>
                            <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700">Course</th>
                            <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700">Guardian</th>
                            <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700">Profile</th>
                            <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-700">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        @foreach($data as $i => $student)
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">{{ ++$i }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $student->name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $student->email }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $student->phone }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $student->dob }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $student->address }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $student->course }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $student->guardian_name }}</td>
                          
                            <td class="border border-gray-300 px-4 py-2">
                          
                                @if($student->image)
                                    <img src="{{ asset($student->image) }}" class="h-12 w-12 rounded-full mx-auto">
                                @else
                                    <span class="text-gray-500">N/A</span>
                                @endif
                            </td>
                            
                            <td class="border border-gray-300 px-4 py-2 text-center flex justify-center items-center gap-2">
                                <a href="{{ route('edit.student', $student->id) }}" 
                                   class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit</a>
                            
                                <form action="{{ route('delete.student',$student->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Delete</button>
                                </form>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-frontend-layout>
