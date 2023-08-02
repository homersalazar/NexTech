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
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="general-tab" data-tabs-target="#general" type="button" role="tab" aria-controls="general" aria-selected="false">General</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="media-tab" data-tabs-target="#media" type="button" role="tab" aria-controls="media" aria-selected="false">Media</button>
            </li>
            <!-- <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="options-tab" data-tabs-target="#options" type="button" role="tab" aria-controls="options" aria-selected="false">Options</button>
            </li> -->
        </ul>
    </div>
    <div id="myTabContent">
        <form action="">
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="general" role="tabpanel" aria-labelledby="general-tab">
                <div class="grid grid-cols-1">
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name" required>
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description (HTML) (Optional)</label>
                        <textarea rows="5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Product Description..."></textarea>
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">URL Slug (Optional)</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Product name">
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price </label>
                        <input type="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Price" required>
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">RRP (Optional)</label>
                        <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="RRP">
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                        <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Quantity" required> 
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 tbext-sm font-medium text-gray-900 dark:text-white">Category (Optional)</label>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">a</option>
                            <option value="">b</option>
                        </select>
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Weight (lbs)</label>
                        <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Weight (lbs)" required> 
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 tbext-sm font-medium text-gray-900 dark:text-white">Category (Optional)</label>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Enabled</option>
                            <option value="">Disabled</option>
                        </select>
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discount Code</label>
                        <input type="date" value="<?= date('Y-m-d'); ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="media" role="tabpanel" aria-labelledby="media-tab">
                <div class="grid grid-cols-1">
                    <div class="mb-6 md:w-1/2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address Street</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="options" role="tabpanel" aria-labelledby="options-tab">
            <!-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg py-10">
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
            </div> -->
        </form>
    </div>
@endsection
