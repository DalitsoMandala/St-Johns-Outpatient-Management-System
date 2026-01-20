<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.slug', 'Laravel') }} | @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
<link rel="icon" type="image/png" sizes="48x48" href="{{ asset('assets/images/sjoms fav.png') }}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased text-gray-900">

        <div class="relative p-6 bg-white z-1 sm:p-0 dark:bg-gray-100">
            <div class="relative flex flex-col justify-center w-full h-screen sm:p-0 lg:flex-row dark:bg-gray-900">
                <!-- Form -->

                <div class="flex flex-col flex-1 w-full lg:w-1/2">
                    @if (!Request::is('login'))
                        <div class="w-full max-w-md pt-10 mx-auto">
                            <a href="/login"
                                class="inline-flex items-center text-sm text-gray-500 transition-colors hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300">
                                <svg class="stroke-current" xmlns="http://www.w3.org/2000/svg" width="20"
                                    height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M12.7083 5L7.5 10.2083L12.7083 15.4167" stroke="" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                Back to login
                            </a>
                        </div>
                    @endif
                    <div class="flex flex-col justify-center flex-1 w-full max-w-md mx-auto">
                        <div>
                            <div class="mb-5 sm:mb-8">
                                <p class="block mb-10 text-2xl font-bold text-center lg:hidden">
                                    <span class="px-2 text-white bg-blue-500 rounded">
                                        St John's</span>
                                    Outpatient <br> Management System<span class="text-blue-500">.</span>
                                </p>



                            </div>
                            <div>
                                {{ $slot }}

                            </div>
                        </div>
                    </div>
                </div>

                <div style="background-image: url('{{ asset('assets/images/img.jpg') }}')"
                    class="relative items-center hidden w-full h-full bg-center bg-no-repeat bg-cover lg:grid lg:w-1/2 dark:bg-white/5">
                    <div class="absolute inset-0 bg-black opacity-50"></div>

                    <div class="relative flex items-center justify-center text-white z-1">
                        <div class="fixed top-[45%]">
                            <div class="text-center mx-30">
                                <span class="font-bold text-white text-4xl/10 ">
                                    <span class="px-2 text-white bg-blue-500 rounded">
                                        St John's</span>
                                    Outpatient <br>
                                    Management Sytem<span class="text-blue-500">.</span>
                                </span>
                            </div>

                        </div>
                        <!-- Overlay content (optional) -->
                    </div>
                </div>
            </div>
        </div>
        <x-toast />
    </body>

</html>
