@extends('layout.app')

@section('content')
    <h1 class="py-2 text-3xl max-sm:text-xl border-b-2 border-gray-500">Dashboard</h1>
    <div class="grid grid-cols-4 max-sm:grid-cols-1 mt-5 gap-3">
        <div class="card bg-gray-700 rounded-lg p-2">
            <div class="card-body">
                <div class="flex px-2">
                    <div class="w-8/12">
                        <p class="text-lg font-medium">New Orders</p>
                        <span class="text-3xl font-medium">0</span>
                    </div>
                    <div class="w-4/12 sm:block hidden p-3">
                        <i class="fa-solid fa-cart-arrow-down text-xl text-blue-900 bg-sky-200 p-3 rounded-full"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted flex items-center mt-4 border-t">
                <i class="fa-solid fa-repeat mr-2"></i> <span>Total orders</span>
            </div>
        </div>
        <div class="card bg-gray-700 rounded-lg p-2">
            <div class="card-body">
                <div class="flex px-2">
                    <div class="w-8/12">
                        <p class="text-lg font-medium">New Sales</p>
                        <span class="text-3xl font-medium">&#x20B1;0</span>
                    </div>
                    <div class="w-4/12 sm:block hidden p-3">
                        <i class="fa-solid fa-database text-xl text-blue-900 bg-sky-200 p-3 rounded-full"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted flex items-center mt-4 border-t">
                <i class="fa-solid fa-repeat mr-2"></i> <span>Total earnings for today</span>
            </div>
        </div>
        <div class="card bg-gray-700 rounded-lg p-2">
            <div class="card-body">
                <div class="flex px-2">
                    <div class="w-8/12">
                        <p class="text-lg font-medium">Total Accounts</p>
                        <span class="text-3xl font-medium">0</span>
                    </div>
                    <div class="w-4/12 sm:block hidden p-3">
                        <i class="fa-solid fa-users text-xl text-blue-900 bg-sky-200 p-3 rounded-full"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted flex items-center mt-4 border-t">
                <i class="fa-solid fa-repeat mr-2"></i> <span>Total accounts</span>
            </div>
        </div>
        <div class="card bg-gray-700 rounded-lg p-2">
            <div class="card-body">
                <div class="flex px-2">
                    <div class="w-8/12">
                        <p class="text-lg font-medium">Total Products</p>
                        <span class="text-3xl font-medium">0</span>
                    </div>
                    <div class="w-4/12 sm:block hidden p-3">
                        <i class="fa-solid fa-boxes text-xl text-blue-900 bg-sky-200 rounded-full p-3"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted flex items-center mt-4 border-t">
                <i class="fa-solid fa-repeat mr-2"></i> <span>Total products</span>
            </div>
        </div>

    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg py-10">
        <table id="myDashboard" class="w-full text-base text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Customer
                    </th>
                    <th scope="col" class="px-6 py-3 max-sm:hidden">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3 max-sm:hidden">
                        Products
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Total
                    </th>
                    <th scope="col" class="px-6 py-3 max-sm:hidden">
                        Method
                    </th>
                    <th scope="col" class="px-6 py- max-sm:hidden">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 max-sm:hidden">
                        Date
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
                    <td class="px-6 py-4 max-sm:hidden">
                        $2999
                    </td>
                    <td class="px-6 py-4 max-sm:hidden">
                        $2999
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function(){
            $('#myDashboard').DataTable({
                lengthChange: false,
                info: false
            });
        });
    </script>
@endsection
