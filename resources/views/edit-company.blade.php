<x-frontend-layout>
    <section>
        {{ $company }}

        <div class="container py-16 px-6">
            <h1 class="text-4xl font-semibold text-center text-gray-800 mb-8">Edit Company</h1>
            <form action="{{ route('update_company', $company->id) }}" method="post" enctype="multipart/form-data" class="bg-white shadow-lg rounded-lg p-8 space-y-6">
                @csrf
                @method('put')
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Company Name -->
                    <div>
                        <label for="name" class="block text-lg font-medium text-gray-700 mb-2">Enter Company Name:</label>
                        <input type="text" name="name" id="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $company->name }}">
                    </div>

                    <!-- Company Address -->
                    <div>
                        <label for="address" class="block text-lg font-medium text-gray-700 mb-2">Enter Company Address:</label>
                        <input type="text" name="address" id="address" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $company->address }}">
                    </div>

                    <!-- Company Phone -->
                    <div>
                        <label for="phone" class="block text-lg font-medium text-gray-700 mb-2">Enter Company Phone:</label>
                        <input type="text" name="phone" id="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $company->phone }}">
                    </div>

                    <!-- Company Email -->
                    <div>
                        <label for="email" class="block text-lg font-medium text-gray-700 mb-2">Enter Company Email:</label>
                        <input type="text" name="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $company->address }}" value="{{ $company->email }}">
                    </div>

                    <!-- Company Logo -->
                    <div>
                        <label for="logo" class="block text-lg font-medium text-gray-700 mb-2">Upload Company Logo:</label>
                        <input type="file" name="logo" id="logo" class="w-full py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <img src="{{ asset($company->logo) }}" alt="{{ $company->logo }}" class="w-[30%] h-auto">
                    </div>

                    <!-- Submit Button -->
                    <div class="col-span-2 text-center">
                        <button type="submit" class="w-full sm:w-auto bg-[#fc18b0] text-white py-3 px-8 rounded-lg font-semibold text-lg shadow-md hover:bg-[#72053c] focus:outline-none focus:ring-4 focus:ring-[#fc18b0] transition duration-300">
                            Update Record
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-frontend-layout>
