@extends('partials.Header')

@section('content')
    <div class="grid h-screen place-items-center">
        <div class="w-full md:w-96 px-5">
            <h1 class="text-center text-4xl font-semibold">Sign up</h1>
            <p class="text-center py-5">Enter your credentials to continue</p>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="Fullname" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                    <input type="text" name="Fullname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="email" name="Email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                    <input type="password" name="pass_word" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Confirm Password</label>
                    <input type="password" name="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign up</button>
                <p class="text-center py-5">You already have an account? <a href="{{ route('login') }}" class="underline">Log in</a></p>
            </form>
        </div>
    </div>

@endsection
