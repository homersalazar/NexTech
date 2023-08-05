@extends('layout.app')

@section('content')
    <div class="flex justify-between border-b-2 border-gray-500">
        <div>
            <h1 class="py-2 text-2xl max-sm:text-xl max-sm:text-x">Edit Category</h1>
        </div>
        <div>
            <a href="/category" type="button" class="bg-white text-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Cancel</a>
            <button type="submit" form="updateCategory" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Save</button>
        </div>
    </div>
    <div class="grid grid-cols-1 bg-gray-800 p-4 mt-5 rounded-lg">
        <form action="{{ route('category.update', $ctgy->id)  }}" method="POST" id="updateCategory">
            @csrf
            @method('PUT')            
            <div class="mb-6 md:w-1/2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input 
                    type="text" 
                    name="ctgy_name" 
                    value="{{ $ctgy->category_name }}" 
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                    placeholder="Name" 
                    required
                > 
            </div>
            <div class="mb-6 md:w-1/2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Parent</label>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> 
                    <option value="">a</option>
                    <option value="">v</option>
                </select> 
            </div>
        </form>
    </div>
@endsection
