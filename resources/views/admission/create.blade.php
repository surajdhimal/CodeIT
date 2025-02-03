<x-frontend-layout :title="'Home'">
    <section>

        <div class="container py-10">
            <div class="flex items-center justify-between mb-5">
                <h1 class="text-2xl font-medium">Admissions Create</h1>
                <a href="{{ route('admission.index') }}" class="bg-blue-500 text-white px-3 py-2 rounded">Go back</a>
            </div>
            <form action="{{ route('admission.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Company Name -->
                    <div>
                        <label for="name" class="block text-lg font-medium text-gray-700 mb-2">Enter your Name:</label>
                        <input type="text" name="name" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Company Phone -->
                    <div>
                        <label for="phone" class="block text-lg font-medium text-gray-700 mb-2">Enter your Phone:</label>
                        <input type="text" name="phone" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Company Email -->
                    <div>
                        <label for="email" class="block text-lg font-medium text-gray-700 mb-2">Enter your Email:</label>
                        <input type="text" name="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <div>
                        <label for="course">Select Course</label>
                        <select name="course" id="course">
                            <option value="1">Laravel</option>
                            <option value="2">Django</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="col-span-2 mt-6">
                        <button type="submit" class="w-full sm:w-auto bg-[#fc18b0] px-6 py-2 text-white rounded-lg hover:bg-[#72053c] focus:outline-none focus:ring-4 focus:ring-[#fc18b0] transition duration-300">
                            Save Record
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-frontend-layout>
