<x-frontend-layout>
    <section>
        <div class="container py-10">
            <h1 class="text-3xl font-medium text-center mb-5">Create Company</h1>
            <form action="" method="post">
                <div class="grid grid-cols-2 gap-5">
                    <div>
                        <label for="name">Enter Company Name:</label>
                        <input type="text" name="name" id="name" class="w-full" placeholder="e.g., Acme Corporation">
                    </div>
                    <div>
                        <label for="address">Enter Company Address:</label>
                        <input type="text" name="address" id="address" class="w-full" placeholder="e.g., 123 Business St, City, Country">
                    </div>
                    <div>
                        <label for="phone">Enter Company Phone:</label>
                        <input type="text" name="phone" id="phone" class="w-full" placeholder="e.g., +1 234 567 890">
                    </div>
                    <div>
                        <label for="email">Enter Company Email:</label>
                        <input type="text" name="email" id="email" class="w-full" placeholder="e.g., info@company.com">
                    </div>
                    <div>
                        <label for="logo">Upload Company Logo:</label>
                        <input type="file" name="logo" id="logo" class="w-full">
                    </div>
                    <div class="col-span-2">
                        <button class="bg-[#fc18b0] px-4 py-1 text-[white] hover:bg-[#72053c] duration-300" type="submit">Save Record</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-frontend-layout>
