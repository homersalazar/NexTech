@extends('partials.Header')

@section('content')
    <div class="grid h-screen place-items-center">
        <div class="w-72">  
            <h1 class="text-center text-4xl font-semibold"> Log in</h1>
            <p class="text-center py-5">Enter your credentials to continue</p>
            <form>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter your email</label>
                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter your password</label>
                    <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                    </div>
                    <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                </div>
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                <p class="text-center py-3">or</p>
                <div class="flex justify-center items-center">
                    <button type="button" class="bg-transparent font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2">
                        <i class="fa-brands fa-google fa-2x"></i>
                    </button>
                    <button type="submit" class="bg-transparent font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2">
                        <i class="fa-brands fa-facebook-f fa-2x"></i>                
                    </button>
                </div>
                <p class="text-center">I don't have an account. <a href="{{ route('register-user') }}" class="underline">Sign up</a></p>
            </form>
        </div>
    </div>

@endsection