@extends('layout.app')

@section('content')
    <div class="flex justify-between border-b-2 border-gray-500">
        <h1 class="py-2 text-3xl max-sm:text-x">Shipping</h1>
        <a href="/createshipping" type="button" class="text-white bg-blue-700 p-0 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create Shipping Method</a>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg py-10">
        <table id="myShipping" class="w-full text-base text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3 max-sm:hidden">
                        Type    
                    </th>
                    <th scope="col" class="px-6 py-3 max-sm:hidden">
                        Price Range
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Weight Range
                    </th>
                    <th scope="col" class="px-6 py-3 max-sm:hidden">
                        Total Shipping Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4 max-sm:hidden">
                        Laptop
                    </td>
                    <td class="px-6 py-4 max-sm:hidden">
                        $2999
                    </td>
                    <td class="px-6 py-4 max-sm:hidden">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function(){
            $('#myShipping').DataTable({
                lengthChange: false,
                info: false
            });
        });
    </script>
@endsection
