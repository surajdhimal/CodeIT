<x-frontend-layout>
<section>
    <div class="container py-10">
        <h1 class="text-2xl font-medium text-center mb-5 bg-blue-100 p-4">Company Lists</h1>
<!-- {{-- {{ $companies}} --}} -->
<!-- @foreach ($companies as $company)
        <h1>{{ $company->name }}</h1>
        <h1>{{ $company->phone }}</h1>
        <h1>{{$company->logo}}</h1>
@endforeach -->
        <table class="w-full text-center">
            <thead>
            <tr class="bg-gray-100">
                    <th class="border p-2">Name</th>
                    <th class="border p-2">SN</th>
                    <th class="border p-2">Email</th>
                    <th class="border p-2">Phone</th>
                    <th class="border p-2">Logo</th>
                    <th class="border p-2">Address</th>
                    <th class="border p-2">View</th>
                    <th class="border p-2">Delete</th>
                    <th class="border p-2">Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $index => $company)
                <tr>
                    <td class="border p-2">{{++$index}}</td>
                    <td class="border p-2">{{$company->name}}</td>

                    <td class="border p-2">{{$company->email}}</td>
                    <td class="border p-2">{{$company->phone}}</td>
                    <td class="border p-2"><img src="{{ asset($company->logo)}}" class="w-40" alt="{{$company->name}}"></td>
                    <td class="border p-2">{{$company->address}}</td>
                    <td class="border p-2">
                        <a href="{{ route("edit_company", $company->id) }}" class="bg-blue-500 py-2 px-4 rounded hover:bg-blue-600">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('delete_company', $company->id) }}" method="post">
                            @csrf 
                            @method('delete')
                            <button class="bg-[#db3450] py-2 px-4 rounded hover:bg-[red]">Delete</button>
                        </form>
                    </td>
                    <td class="border p-2">
                        <a href="{{ route("edit_company", $company->id) }}" class="bg-[yellow] py-2 px-4 rounded hover:bg-[orange]">Update</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
</x-frontend-layout>
