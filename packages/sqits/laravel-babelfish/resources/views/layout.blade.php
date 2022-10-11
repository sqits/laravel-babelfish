<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/public/app.css" rel="stylesheet">

        <link href="{{ asset(mix('app.css', 'vendor/babelfish')) }}" rel="stylesheet">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"
        />
    </head>


    <body class="h-full">
    <div id="babelfish" class="min-h-full">
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

                <div class="bg-white rounded-md shadow p-4">
                    <div class="px-4 ">
                        <div class="sm:flex sm:items-center">
                            <div class="sm:flex-auto mt-4">
                                <h1 class="text-xl font-semibold text-gray-900">Vertalingen</h1>
                                <p class="mt-2 text-sm text-gray-700">Hierin staan alle vertalingen van de keys in de applicatie</p>
                            </div>
                            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                                <button type="button" class="inline-flex transition items-center justify-center rounded-md border border-transparent bg-cyan-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-sky-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Publiceren</button>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-col  p-4 -mx-4">



                            <translation-table></translation-table>
{{--                            <div class="">--}}
{{--                                <div class="inline-block min-w-full py-2 align-middle">--}}
{{--                                    <div class="border rounded-md">--}}
{{--                                        <table class="min-w-full border-separate" style="border-spacing: 0">--}}
{{--                                            <thead class="bg-gray-50">--}}
{{--                                            <tr>--}}
{{--                                                <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-gray-50 bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">Sleutel</th>--}}
{{--                                                <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-gray-50 bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:table-cell">Vertaling</th>--}}
{{--                                                <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-gray-50 bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter lg:table-cell">Nederlands</th>--}}
{{--                                                <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-gray-50 bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:table-cell">Suggestie</th>--}}
{{--                                            </tr>--}}
{{--                                            </thead>--}}
{{--                                            <tbody class="bg-white">--}}
{{--                                            <tr>--}}
{{--                                                <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">translation.title</td>--}}

{{--                                                <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">--}}
{{--                                                    <input value="title" class=" border px-4 py-2 rounded-md w-full "/>--}}
{{--                                                </td>--}}
{{--                                                <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden lg:table-cell">--}}
{{--                                                    <input value="" class=" border px-4 py-2 rounded-md w-full "/>--}}
{{--                                                </td>--}}
{{--                                                <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">--}}
{{--                                                    <button type="button" class="inline-flex transition items-center justify-center rounded-md border border-transparent bg-cyan-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-sky-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-full">Suggestie ophalen</button>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">translation.subject</td>--}}

{{--                                                <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">--}}
{{--                                                    <input value="subject" class=" border px-4 py-2 rounded-md w-full "/>--}}
{{--                                                </td>--}}
{{--                                                <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden lg:table-cell">--}}
{{--                                                    <input value="" class=" border px-4 py-2 rounded-md w-full "/>--}}
{{--                                                </td>--}}
{{--                                                <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">--}}
{{--                                                    <div class="mt-1 flex rounded-md shadow-sm">--}}
{{--                                                        <span onclick="copy(this)" class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-gray-500 sm:text-sm hover:bg-gray-200 duration-100  transition cursor-pointer">Overnemen</span>--}}
{{--                                                        <input type="text" disabled value="onderwerp" name="company-website" id="company-website" class="block border w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 px-3 py-2 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                            </tbody>--}}
{{--                                        </table>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>

        </footer>
    </div>
    <script type="module" src="{{asset(mix('app.js', 'vendor/babelfish'))}}"></script>

    </body>
</html>

