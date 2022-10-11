<html class="h-full bg-gray-100">
<head>

</head>

<body class="h-full">
<div class="min-h-full">
    <header class="bg-gradient-to-r from-sky-800 to-cyan-600 pb-24">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="relative flex flex-wrap items-center justify-center lg:justify-between">
                <!-- Logo -->
                <div class="absolute left-0 flex-shrink-0 py-5 lg:static">
                    <a href="#">
                        <img class="h-24 w-auto" src="{{asset('images/logo.png')}}" alt="">
                    </a>
                </div>



                <div class="w-full py-5 lg:border-t lg:border-white lg:border-opacity-20">
                    <div class="lg:grid lg:grid-cols-3 lg:items-center lg:gap-8">
                        <!-- Left nav -->
                        <div class="hidden lg:col-span-2 lg:block">
                            <nav class="flex space-x-4">
                                <a href="#" class="text-white text-sm font-medium rounded-md bg-white bg-opacity-0 px-3 py-2 hover:bg-opacity-10" aria-current="page">Translations</a>
                            </nav>
                        </div>

                    </div>
                </div>

                <!-- Menu button -->
                <div class="absolute right-0 flex-shrink-0 lg:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" class="inline-flex items-center justify-center rounded-md bg-transparent p-2 text-cyan-200 hover:bg-white hover:bg-opacity-10 hover:text-white focus:outline-none focus:ring-2 focus:ring-white" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!--
                          Heroicon name: outline/bars-3

                          Menu open: "hidden", Menu closed: "block"
                        -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!--
                          Heroicon name: outline/x-mark

                          Menu open: "block", Menu closed: "hidden"
                        -->
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

{{--        <!-- Mobile menu, show/hide based on mobile menu state. -->--}}
{{--        <div class="lg:hidden">--}}
{{--            <!----}}
{{--              Mobile menu overlay, show/hide based on mobile menu state.--}}

{{--              Entering: "duration-150 ease-out"--}}
{{--                From: "opacity-0"--}}
{{--                To: "opacity-100"--}}
{{--              Leaving: "duration-150 ease-in"--}}
{{--                From: "opacity-100"--}}
{{--                To: "opacity-0"--}}
{{--            -->--}}
{{--            <div class="fixed inset-0 z-20 bg-black bg-opacity-25" aria-hidden="true"></div>--}}

{{--            <!----}}
{{--              Mobile menu, show/hide based on mobile menu state.--}}

{{--              Entering: "duration-150 ease-out"--}}
{{--                From: "opacity-0 scale-95"--}}
{{--                To: "opacity-100 scale-100"--}}
{{--              Leaving: "duration-150 ease-in"--}}
{{--                From: "opacity-100 scale-100"--}}
{{--                To: "opacity-0 scale-95"--}}
{{--            -->--}}
{{--            <div class="absolute inset-x-0 top-0 z-30 mx-auto w-full max-w-3xl origin-top transform p-2 transition">--}}
{{--                <div class="divide-y divide-gray-200 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">--}}
{{--                    <div class="pt-3 pb-2">--}}
{{--                        <div class="flex items-center justify-between px-4">--}}
{{--                            <div>--}}
{{--                                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=cyan&shade=600" alt="Your Company">--}}
{{--                            </div>--}}
{{--                            <div class="-mr-2">--}}
{{--                                <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-500">--}}
{{--                                    <span class="sr-only">Close menu</span>--}}
{{--                                    <!-- Heroicon name: outline/x-mark -->--}}
{{--                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />--}}
{{--                                    </svg>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                       --}}
{{--                    </div>--}}
{{--                    <div class="pt-4 pb-2">--}}
{{--                        <div class="flex items-center px-5">--}}
{{--                            <div class="flex-shrink-0">--}}
{{--                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="ml-3 min-w-0 flex-1">--}}
{{--                                <div class="truncate text-base font-medium text-gray-800">Chelsea Hagon</div>--}}
{{--                                <div class="truncate text-sm font-medium text-gray-500">chelsea.hagon@example.com</div>--}}
{{--                            </div>--}}
{{--                            <button type="button" class="ml-auto flex-shrink-0 rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2">--}}
{{--                                <span class="sr-only">View notifications</span>--}}
{{--                                <!-- Heroicon name: outline/bell -->--}}
{{--                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />--}}
{{--                                </svg>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </header>
    <main class="-mt-24 pb-8">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <h1 class="sr-only">Translations</h1>
            {{ $slot }}
        </div>
    </main>
    <footer>

    </footer>
</div>

</body>
</html>
