<x-frontend-layout :title="'Course'">
    <section>

        <div class="container py-16 px-4">
            <h1 class="text-4xl font-semibold text-center text-gray-800 mb-8">Create Course</h1>
            <form action="/post-course" method="POST" enctype="multipart/form-data" class="bg-white shadow-lg rounded-lg p-8 space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Course Name -->
                    <div>
                        <label for="name" class="block text-lg font-medium text-gray-700 mb-2">Enter Course Name:</label>
                        <input type="text" name="name" id="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('name') }}" placeholder="Course name">
                        @error('name')
                            <div class="text-red-600 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Course Price -->
                    <div>
                        <label for="price" class="block text-lg font-medium text-gray-700 mb-2">Enter Price:</label>
                        <input type="text" name="price" id="price" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('price')}}" placeholder="Price">
                        @error('price')
                            <div class="text-red-600 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Course Image -->
                    <div>
                        <label for="image" class="block text-lg font-medium text-gray-700 mb-2">Upload Image:</label>
                        <input type="file" name="image" id="image" class="w-full py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('image')
                           <div class="text-red-600 mt-2">
                            {{ $message }}
                           </div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="col-span-2 text-center">
                        <button type="submit" class="w-full sm:w-auto bg-[#1dc4ee] text-white py-3 px-8 rounded-lg font-semibold text-lg shadow-md hover:bg-[#2b0572] focus:outline-none focus:ring-4 focus:ring-[#1dc4ee] transition duration-300">
                            Save Record
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-frontend-layout>
