@extends('partials.Header')

@section('content')
    <div class="grid h-screen place-items-center w-full">
        <div class="w-full md:w-96 px-5">
            <h1 class="text-center text-4xl font-semibold"> Log in</h1>
            <p class="text-center py-5">Enter your credentials to continue</p>
            <form>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Enter your email</label>
                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Enter your password</label>
                    <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Log in</button>
                <p class="text-center py-3">I don't have an account. <a href="{{ route('register-user') }}" class="underline">Sign up</a></p>
            </form>
        </div>
    </div>

@endsection
