<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('assets/images/sjoms fav.png') }}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased">
        <!-- Wrapper with shared Alpine state -->
        <div x-data="{ sidebarOpen: false, sidebarCollapsed: false, sidebarHover: false }" class="flex h-screen bg-gray-100" x-cloak>
            <!-- Mobile overlay for sidebar -->
            @include('layouts.mobile-header')
            <!-- Sidebar -->
            @include('layouts.sidebar')
            <!-- Main Content -->
            <div class="flex flex-col flex-1 pt-16 overflow-hidden md:pt-0">
                @include('layouts.header')
                <main class="grid flex-1 grid-cols-12 gap-4 p-4 overflow-y-auto md:p-6 md:gap-6">
                    <!-- Add this inside your body tag, after the main wrapper -->
                    <div class="col-span-12">
                        {{ $slot }}
                    </div>
                    <livewire:main.patient-queue />



                </main>

                <footer class="p-3 text-sm text-center bg-gray-200 text-slate-500">
                    © <span id="current-year"></span> {{ config('app.name') }} | Dalitso Mandala. All rights reserved.
                </footer>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
        <script src="https://unpkg.com/lucide@latest"></script>
        <script>
            lucide.createIcons({

                inTemplates: true,
            });
        </script>
        <script>
            // This script runs after the document is loaded
            document.addEventListener('DOMContentLoaded', (event) => {
                // Find the span by its ID and set its text content to the current year
                const yearSpan = document.getElementById('current-year');
                if (yearSpan) {
                    yearSpan.textContent = new Date().getFullYear();
                }
            });
        </script>


    </body>

</html>
