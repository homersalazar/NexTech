@extends('layout.app')

@section('content')
    <div class="flex justify-between border-b-2 border-gray-500">
        <div>
            <h1 class="py-2 text-3xl max-sm:text-x">Create Discount</h1>
        </div>
        <div>
            <a href="" type="button" class="bg-white text-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Cancel</a>
            <a href="" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Save</a>
        </div>
    </div>
    <div class="grid grid-cols-1 bg-gray-800 p-4 mt-5 rounded-lg">
        <form action="" method="POST">
            <div class="mb-6 md:w-1/2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Code</label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Code" required> 
            </div>
            <div class="mb-6 md:w-1/2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categories</label>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> 
                    <option value="">Single Product</option>
                    <option value="">Entire Order</option>
                </select> 
            </div>
            <div class="mb-6 md:w-1/2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Products</label>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> 
                    <option value="">Single Product</option>
                    <option value="">Entire Order</option>
                </select> 
            </div>
            <div class="mb-6 md:w-1/2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> 
                    <option value="">Percentage</option>
                    <option value="">Fixed</option>
                </select> 
            </div>
            <div class="mb-6 md:w-1/2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Value</label>
                <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required> 
            </div>
            <div class="mb-6 md:w-1/2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Date</label>
                <input type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" required> 
            </div>
            <div class="mb-6 md:w-1/2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End Date</label>
                <input type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" required> 
            </div>
        </form>
    </div>
@endsection
