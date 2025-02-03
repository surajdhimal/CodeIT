<x-frontend-layout>
    <section>
        <div class="container py-10">
            <h1 class="text-2xl font-medium text-center mb-5 bg-blue-100 p-4">Admission Lists</h1>
            <a href="{{ route('admission.create') }}" class="bg-green-500 py-2 px-3 rounded hover:bg-green-900">Add new user</a>

            <table class="w-full text-center">
                <thead>
                <tr class="bg-gray-100">
                        <th class="border p-2">Name</th>
                        <th class="border p-2">SN</th>
                        <th class="border p-2">Email</th>
                        <th class="border p-2">Phone</th>
                        <th class="border p-2">Course Name</th>
                        <th class="border p-2">View</th>
                        <th class="border p-2">Delete</th>
                        <th class="border p-2">Update</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admissions as $index => $admission)
                    <tr>
                        <td class="border p-2">{{++$index}}</td>
                        <td class="border p-2">{{$admission->name}}</td>

                        <td class="border p-2">{{$admission->email}}</td>
                        <td class="border p-2">{{$admission->phone}}</td>
                        <td class="border p-2">{{$admission->course->name}}</td>
                        {{-- <td class="border p-2"><img src="{{ asset($admission->course->image) }}" class="w-32" alt="{{ $admission->course->image }}"></td> --}}
                        <td class="border p-2">
                            <a href="{{ route("edit_company", $admission->id) }}" class="bg-blue-500 py-2 px-4 rounded hover:bg-blue-600">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('delete_company', $admission->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="bg-[#db3450] py-2 px-4 rounded hover:bg-[red]">Delete</button>
                            </form>
                        </td>
                        <td class="border p-2">
                            <a href="{{ route("edit_company", $admission->id) }}" class="bg-[yellow] py-2 px-4 rounded hover:bg-[orange]">Update</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    </x-frontend-layout>
