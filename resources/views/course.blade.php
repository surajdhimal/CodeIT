<x-frontend-layout>
    <section>
        <img class="w-full h-60" src="{{ asset('images/ocean.webp') }}" alt="">

        <div class="container py-10">
            <h1 class="text-3xl font-medium text-center mb-5">Create Course</h1>
            <form action="/post-course" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-2 gap-5">
                    <div>
                        <label for="name">Enter Course Name:</label>
                        <input type="text" name="name" id="name" class="w-full" value="{{ old('name') }}">
                        @error('name')
                            <div class="text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="price">Enter Price:</label>
                        <input type="text" name="price" id="price" class="w-full" value="{{ old('price')}}">
                        @error('price')
                            <div class="text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="image">Enter Image:</label>
                        <input type="file" name="image" id="image" class="w-full">
                        @error('image')
                           <div class="text-red-600">
                            {{ $message }}
                           </div>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <button class="bg-[#1dc4ee] px-4 py-1 text-[white] hover:bg-[#2b0572] duration-300" type="submit">Save Record</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

</x-frontend-layout>

