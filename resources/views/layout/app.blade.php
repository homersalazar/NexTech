<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- Font Awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        {{-- Flowbite --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>

        {{-- DataTable --}}
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <title>NexTech</title>
    </head>
        <body>
            <nav class="bg-blue-800 border-blue-200 p-4">
                <div class="flex flex-wrap justify-between w-full">
                    <div class="flex space-x-3">
                        <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                            </svg>
                        </button>
                        <a href="{{ route('dashboard.index') }}" class="flex space-x-3 rtl:space-x-reverse">
                            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">NexTech</span>
                        </a>
                    </div>
                    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                        <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-blue-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
                        </button>
                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow" id="user-dropdown">
                            <div class="px-4 py-3">
                                <span class="block text-sm text-gray-900">Bonnie Green</span>
                                <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                            </div>
                            <ul class="py-2" aria-labelledby="user-menu-button">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Earnings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Sign out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>


            <aside id="default-sidebar" class="fixed left-0 z-40 w-64 h-screen pt-[65px] transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
                <div class="h-full px-3 py-4 overflow-y-auto bg-blue-800">
                    <ul class="space-y-2 font-medium">
                        <li>
                            <a href="/dashboard" class="flex items-center p-2 rounded-lg text-white hover:bg-blue-700 group">
                            <i class="fa-solid fa-chart-pie"></i>
                            <span class="ml-3">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="/order" class="flex items-center p-2 rounded-lg text-white hover:bg-blue-700 group">
                            <i class="fa-solid fa-cart-shopping fa-lg"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Orders</span>

                            </a>
                        </li>
                        <li>
                            <a href="/product" class="flex items-center p-2 rounded-lg text-white hover:bg-blue-700 group">
                            <i class="fa-solid fa-box-open fa-lg"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Products</span>
                            <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-700 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('category.index') }}" class="flex items-center p-2 rounded-lg text-white hover:bg-blue-700 group">
                            <i class="fa-solid fa-list fa-lg"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Categories</span>
                            </a>
                        </li>
                        <li>
                            <a href="/account" class="flex items-center p-2 rounded-lg text-white hover:bg-blue-700 group">
                            <i class="fa-solid fa-users fa-lg"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Accounts</span>
                            </a>
                        </li>
                        <li>
                            <a href="/shipping" class="flex items-center p-2 rounded-lg text-white hover:bg-blue-700 group">
                            <i class="fa-solid fa-truck-fast fa-lg"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Shipping</span>
                            </a>
                        </li>
                        <li>
                            <a href="/discount" class="flex items-center p-2 rounded-lg text-white hover:bg-blue-700 group">
                            <i class="fa-solid fa-tag fa-lg"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Discounts</span>
                            </a>
                        </li>
                        <li>
                            <a href="/taxes" class="flex items-center p-2 rounded-lg text-white hover:bg-blue-700 group">
                            <i class="fa-solid fa-percent fa-lg"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Taxes</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('media.index') }}" class="flex items-center p-2 rounded-lg text-white hover:bg-blue-700 group">
                            <i class="fa-solid fa-images fa-lg"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Media</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 rounded-lg text-white hover:bg-blue-700 group">
                            <i class="fa-solid fa-envelope fa-lg"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Email Templates</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 rounded-lg text-white hover:bg-blue-700 group">
                            <i class="fa-solid fa-cogs fa-lg"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>

            <div class="p-4 sm:ml-64">
                @yield('content')
            </div>
    </body>
</html>
