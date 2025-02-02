<x-frontend-layout :title="'Home'">
    <section>
        <img class="w-full h-60 object-cover" src="{{ asset('images/ocean.webp') }}" alt="Ocean Background">

        <div class="container py-10">
            <h1 class="text-3xl font-semibold text-center text-gray-800 mb-8">Create Company</h1>
            <form action="{{ route('post_company') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Company Name -->
                    <div>
                        <label for="name" class="block text-lg font-medium text-gray-700 mb-2">Enter Company Name:</label>
                        <input type="text" name="name" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., Acme Corporation">
                    </div>
                    
                    <!-- Company Address -->
                    <div>
                        <label for="address" class="block text-lg font-medium text-gray-700 mb-2">Enter Company Address:</label>
                        <input type="text" name="address" id="address" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., 123 Business St, City, Country">
                    </div>

                    <!-- Company Phone -->
                    <div>
                        <label for="phone" class="block text-lg font-medium text-gray-700 mb-2">Enter Company Phone:</label>
                        <input type="text" name="phone" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., +1 234 567 890">
                    </div>

                    <!-- Company Email -->
                    <div>
                        <label for="email" class="block text-lg font-medium text-gray-700 mb-2">Enter Company Email:</label>
                        <input type="text" name="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., info@company.com">
                    </div>

                    <!-- Company Logo -->
                    <div>
                        <label for="logo" class="block text-lg font-medium text-gray-700 mb-2">Upload Company Logo:</label>
                        <input type="file" name="logo" id="logo" class="w-full py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
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
