<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @fonts

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="">
    <main class="font-inter-tight">
        {{-- Header --}}
        <header class="w-full">
            <nav class="container mx-auto p-4 flex justify-between items-center lg:px-0">
                {{-- logo --}}
                <a href="/" class="w-32.5 h-8 block">
                    <img src="{{ asset('/asset/images/clientra-logo.png') }}"
                        class="w-full h-full object-center object-cover overflow-hidden" alt="Logo">
                </a>
                {{-- Hamburger menu --}}
                <div class="lg:hidden">
                    <span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M4 7L7 7M20 7L11 7" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round">
                                </path>
                                <path d="M20 17H17M4 17L13 17" stroke="#1C274C" stroke-width="1.5"
                                    stroke-linecap="round"></path>
                                <path d="M4 12H7L20 12" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round">
                                </path>
                            </g>
                        </svg>
                    </span>
                </div>
                <ul class="hidden lg:flex justify-center items-center gap-4">
                    <li><a href="#">Product</a></li>
                    <li><a href="#">Customers</a></li>
                    <li><a href="#">Switch</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Resources</a></li>
                </ul>
                <div class="hidden lg:flex justify-end items-center gap-4">
                    <a href="#">Login</a>
                    <button
                        class="bg-indigo-700 text-white font-semibold text-sm flex justify-center items-center w-full gap-4 px-5 py-3 rounded-full sm:text-base">Start
                        free trial</button>
                </div>
            </nav>
        </header>

        {{ $slot }}

        {{-- Footer --}}
        <footer class="w-full border-t border-t-gray-200">
            <div class="container mx-auto px-4 py-5 lg:px-0 lg:py-20">
                <div class="w-full flex flex-col gap-4 lg:justify-between lg:flex-row lg:flex-wrap">
                    <div class="flex flex-col sm:w-70 lg:w-1/4">
                        <img width="150" src="{{ asset('asset/images/clientra-logo.png') }}" alt="Logo-footer">
                        <p class="text-gray-500 text-sm lg:text-base">Clientra helps small teams plan, ship and measure
                            their work in one place.</p>
                    </div>
                    <div class="flex flex-col gap-4 sm:flex-row sm:justify-between sm:flex-wrap lg:w-1/2">
                        <div class="flex flex-col gap-2">
                            <span class="text-lg font-semibold">Product</span>
                            <div class="flex flex-col gap-2">
                                <a href="" class="text-base font-light text-gray-500">Features</a>
                                <a href="" class="text-base font-light text-gray-500">Integrations</a>
                                <a href="" class="text-base font-light text-gray-500">Pricing</a>
                                <a href="" class="text-base font-light text-gray-500">Security</a>
                                <a href="" class="text-base font-light text-gray-500">Changelog</a>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <span class="text-lg font-semibold">Product</span>
                            <div class="flex flex-col gap-2">
                                <a href="" class="text-base font-light text-gray-500">Features</a>
                                <a href="" class="text-base font-light text-gray-500">Integrations</a>
                                <a href="" class="text-base font-light text-gray-500">Pricing</a>
                                <a href="" class="text-base font-light text-gray-500">Security</a>
                                <a href="" class="text-base font-light text-gray-500">Changelog</a>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <span class="text-lg font-semibold">Product</span>
                            <div class="flex flex-col gap-2">
                                <a href="" class="text-base font-light text-gray-500">Features</a>
                                <a href="" class="text-base font-light text-gray-500">Integrations</a>
                                <a href="" class="text-base font-light text-gray-500">Pricing</a>
                                <a href="" class="text-base font-light text-gray-500">Security</a>
                                <a href="" class="text-base font-light text-gray-500">Changelog</a>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <span class="text-lg font-semibold">Product</span>
                            <div class="flex flex-col gap-2">
                                <a href="" class="text-base font-light text-gray-500">Features</a>
                                <a href="" class="text-base font-light text-gray-500">Integrations</a>
                                <a href="" class="text-base font-light text-gray-500">Pricing</a>
                                <a href="" class="text-base font-light text-gray-500">Security</a>
                                <a href="" class="text-base font-light text-gray-500">Changelog</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
    </main>
</body>

</html>