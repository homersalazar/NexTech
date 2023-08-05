@extends('layout.app')

@section('content')
    <div class="flex justify-between border-b-2 border-gray-500">
        <h1 class="py-2 text-2xl max-sm:texl-xl max-sm:text-x">Category</h1>
        <a href="{{ route('category.create') }}" type="button" class="text-white bg-blue-700 p-0 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create Category</a>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg py-10">
        <table id="myCategory" class="w-full text-base text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ctgy as $row)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            |- {{ $row->category_name }}
                        </td>
                        <td class="px-6 py-4">
                            <a type="button" href="{{ route('category.edit', $row->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function(){
            $('#myCategory').DataTable({
                lengthChange: false,
                info: false
            });
        });
    </script>
@endsection
