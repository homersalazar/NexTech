@extends('layout.app')

@section('content')
    <div class="flex justify-between border-b-2 border-gray-500">
        <div>
            <h1 class="py-2 text-3xl max-sm:text-x">Create Order</h1>
        </div>
        <div>
            <a href="" type="button" class="bg-white text-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Cancel</a>
            <a href="" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Save</a>
        </div>
    </div>
    
    <div class="mb-4 border-b border-gray-200 dark:border-gray-700 mt-5">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Details</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Address</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Items</button>
            </li>
        </ul>
    </div>
    <div id="myTabContent">
        <form action="">
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="grid grid-cols-1">
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Transaction ID</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Transaction ID" required>
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 required">
                            <option value="0">Completed</option>
                            <option value="1">Pending</option>
                            <option value="2">Failed</option>
                            <option value="3">Cancelled</option>
                            <option value="4">Reversed</option>
                            <option value="5">Refunded</option>
                            <option value="6">Shipped</option>
                        </select>
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment Amount</label>
                        <input type="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0.00" required>
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customer Email</label>
                        <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="johndoe@example.com" required>
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Account (Optional)</label>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 required">
                            <option value="0">email</option>
                            <option value="1">email</option>
                            <option value="2">email</option>
                            <option value="3">email</option>
                            <option value="4">email</option>
                            <option value="5">email</option>
                            <option value="6">email</option>
                        </select>
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name (Optional)</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John">
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name (Optional)</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe">
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment Method (Optional)</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="website">
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Shipping Method (Optional)</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Standard">
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Shipping Amount</label>
                        <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0.00" required>
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discount Code (Optional)</label>
                        <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Discount Code">
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discount Code</label>
                        <input type="date" value="<?= date('Y-m-d'); ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <div class="grid grid-cols-1">
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address Street</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address City</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address State</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address Zip</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg py-10">
                <table id="myOrders" class="w-full text-base text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Product
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Quantity
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Option
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
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>

@endsection
