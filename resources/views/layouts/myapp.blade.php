<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'RealRentCar') }}</title>
    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('flatpickr::components.style')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-sec-400">

    {{-- -------------------------------------------------------------- Header -------------------------------------------------------------- --}}
    @guest
        <header>
            <nav class="bg-sec-600 border-gray-200 px-4 lg:px-6 py-4 dark:bg-gray-800 ">
                <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl drop-shadow-2xl">
                    {{-- LOGO --}}
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img loading="lazy" src="/images/logos/LOGOtext.png" class="mr-3 h-12" alt="Flowbite Logo" />
                    </a>

                    {{-- login & Register buttons --}}
                    <div class="flex items-center  lg:order-2">
                        <a href="{{ route('login') }}">
                            <button type="button"
                                class=" px-4 lg:px-5 py-2 lg:py-2.5 mr-2 text-white bg-gradient-to-br from-pr-400 to-pr-300 hover:bg-gradient-to-bl font-medium rounded-lg text-sm ">
                                login
                            </button>

                        </a>
                        <a href="{{ route('register') }}">
                            <button
                                class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 ">
                                <span
                                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-sec-600 dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Register
                                </span>
                            </button>

                        </a>

                        {{-- Mobile menu --}}
                        <button data-collapse-toggle="mobile-menu-2" type="button"
                            class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="mobile-menu-2" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>

                    {{-- Menu --}}
                    <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                        <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                            <li>
                                <a href="/">
                                    <div class="group text-center">
                                        <div class="group-hover:cursor-pointer">Home</div>
                                        <div
                                            class="block invisible bg-pr-400 w-12 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                        </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('cars') }}">
                                    <div class="group text-center">
                                        <div class="group-hover:cursor-pointer">Cars</div>
                                        <div
                                            class="block invisible bg-pr-400 w-8 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                        </div>
                                </a>
                            </li>
                            <li>
                                <a href="/location">
                                    <div class="group text-center">
                                        <div class="group-hover:cursor-pointer">Location</div>
                                        <div
                                            class="block invisible bg-pr-400 w-16 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                        </div>
                                </a>
                            </li>
                            <li>
                                <a href="/contact_us">
                                    <div class="group text-center">
                                        <div class="group-hover:cursor-pointer">Contact Us</div>
                                        <div
                                            class="block invisible bg-pr-400 w-20 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                        </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    @else
        <header>
            <nav class="bg-sec-600 border-gray-200 px-4 lg:px-6 py-4 dark:bg-gray-800">
                <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                    {{-- LOGO --}}
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img loading="lazy" src="/images/logos/LOGOtext.png" class="mr-3 h-12" alt="Flowbite Logo" />
                    </a>

                    {{-- Dropdown button --}}


                    @if (Auth::user()->role == 'admin')
                        <div class="hidden justify-between mb-6 items-center w-full lg:flex lg:w-auto" id="mobile-menu-2">
                            <ul class="flex flex-col  font-medium lg:flex-row lg:space-x-8 lg:mt-0 ">
                                <li>
                                    <a href='{{ route('adminDashboard') }}'>
                                        <div class="group text-center">
                                            <div class="group-hover:cursor-pointer">Dashboard</div>
                                            <div
                                                class="block invisible bg-pr-400 w-20 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                            </div>
                                    </a>

                                </li>

                                <li class=' '>
                                    <a href="{{ route('cars.index') }}">
                                        <div class="group text-center">
                                            <div class="group-hover:cursor-pointer ">Cars</div>
                                            <div
                                                class="block invisible bg-pr-400 w-8 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                            </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('users') }}">
                                        <div class="group text-center">
                                            <div class="group-hover:cursor-pointer">Users</div>
                                            <div
                                                class="block invisible bg-pr-400 w-10 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                            </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            class="text-black bg-pr-400 hover:bg-pr-600 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center "
                            type="button">
                            <img loading="lazy" src="/images/user.png" width="24" alt="user icon" class="mr-3">
                            <p> Admin ( {{ Auth::user()->name }} ) </p>
                            <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>

                        <div id="dropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="{{ route('adminDashboard') }}"
                                        class="block px-4 py-2 hover:bg-pr-200 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a class="block px-4 py-2 hover:bg-pr-200 " href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="hidden">
                                        @csrf
                                    </form>

                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="hidden justify-between items-center w-full lg:flex lg:w-auto" id="mobile-menu-2">
                            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                                <li>

                                    <a href="/">
                                        <div class="group text-center">
                                            <div class="group-hover:cursor-pointer">Home</div>
                                            <div
                                                class="block invisible bg-pr-400 w-12 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                            </div>
                                        </div>
                                    </a>



                                </li>
                                <li>
                                    <a href="{{ route('cars') }}">
                                        <div class="group text-center">
                                            <div class="group-hover:cursor-pointer">Cars</div>
                                            <div
                                                class="block invisible bg-pr-400 w-8 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/location">
                                        <div class="group text-center">
                                            <div class="group-hover:cursor-pointer">Location</div>
                                            <div
                                                class="block invisible bg-pr-400 w-16 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                            </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/contact_us">
                                        <div class="group text-center">
                                            <div class="group-hover:cursor-pointer">Contact Us</div>
                                            <div
                                                class="block invisible bg-pr-400 w-20 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                            </div>
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            class="text-black bg-pr-400 hover:bg-pr-600 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center "
                            type="button">
                            <img loading="lazy" src="/images/user.png" width="24" alt="user icon" class="mr-3">
                            {{ Auth::user()->name }}
                            <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDefaultButton">

                                <li>
                                    <a href="{{ route('clientReservation') }}"
                                        class="block px-4 py-2 hover:bg-pr-200 ">Reservations</a>
                                </li>

                                <li>
                                    <a class="block px-4 py-2 hover:bg-pr-200 " href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="hidden">
                                        @csrf
                                    </form>

                                </li>
                            </ul>
                        </div>
                    @endif
                    {{-- Mobile menu --}}
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    {{-- Menu --}}

                </div>
            </nav>
        </header>
    @endguest

    {{-- --------------------------------------------------------------- Main  --------------------------------------------------------------- --}}
    <main>
        @yield('content')
    </main>
    {{-- --------------------------------------------------------------- Footer  --------------------------------------------------------------- --}}
    @if (Auth::check() && Auth::user()->role == 'admin')
        <footer class="px-4 h-[100px]  sm:p-6 bg-gray-800 flex justify-center items-center">
            <p class="text-gray-100 font-car font-medium text-5xl ">admin panel</p>
        </footer>
    @else
        <footer class="px-4  sm:p-6 bg-gray-800">
            <div class="pt-10 mx-auto max-w-screen-xl relative">
                <div class="md:flex md:justify-between">
                    <div class="mb-12 md:mb-0 flex justify-center ">
                        <a href="" class="flex items-center">
                            <img loading="lazy" src="/images/logos/LogoTextDark.png" class="mr-3 h-24"
                                alt="Logo" />
                        </a>
                    </div>

                    <div class="grid grid-cols-3 gap-8 ">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Resources</h2>
                            <ul class=" text-gray-400">
                                <li class="mb-4">
                                    <a href="https://laravel.com/" target='_blank'="hover:underline">Laravel 10.x</a>
                                </li>
                                <li>
                                    <a href="https://tailwindcss.com/" target='_blank'
                                        class="hover:underline">Tailwind
                                        CSS</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Follow us</h2>
                            <ul class="text-gray-400">
                                <li class="mb-4">
                                    <a href="https://github.com/Mohamed-Galdi/RealRentCar" class="hover:underline "
                                        target='_blank'>Github</a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/mohamed-galdi/" class="hover:underline"
                                        target='_blank'>Linkedin</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Legal</h2>
                            <ul class=" text-gray-400">
                                <li class="mb-4">
                                    <a href="{{ route('privacy_policy') }}" class="hover:underline">Privacy
                                        Policy</a>
                                </li>
                                <li>
                                    <a href="{{ route('terms_conditions') }}" class="hover:underline">Terms &amp;
                                        Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <hr class="my-6  sm:mx-auto border-gray-700 lg:my-8" />

                <div class="sm:flex sm:items-center sm:justify-between md:ms-0 pb-4  ms-32">
                    <span class="text-sm sm:text-center text-gray-400 md:ms-0 -ms-8">© 2022 <a
                            href="https://www.linkedin.com/in/mohamed-galdi/" target='_blank'
                            class="hover:underline">Galdi.dev™</a>. All Rights Reserved.
                    </span>
                    <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                        <a href="https://github.com/Mohamed-Galdi/RealRentCar" target='_blank'
                            class="text-gray-500 hover:text-white">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="https://twitter.com/GaldiMohamed" target='_blank'
                            class="text-gray-500 hover:text-white">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/in/mohamed-galdi/" target='_blank'
                            class="text-gray-500  hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <style>
                                    svg {
                                        fill: #ea9800
                                    }
                                </style>
                                <path
                                    d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/galldii/" target='_blank'
                            class="text-gray-500  hover:text-white">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>


                    </div>
                </div>
                <div>
                    <a href="javascript:void(0);" onclick="scrollToTop();"
                        class="text-white absolute top-4 md:-right-8 -right-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="3em" viewBox="0 0 512 512">
                            <path
                                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM135.1 217.4l107.1-99.9c3.8-3.5 8.7-5.5 13.8-5.5s10.1 2 13.8 5.5l107.1 99.9c4.5 4.2 7.1 10.1 7.1 16.3c0 12.3-10 22.3-22.3 22.3H304v96c0 17.7-14.3 32-32 32H240c-17.7 0-32-14.3-32-32V256H150.3C138 256 128 246 128 233.7c0-6.2 2.6-12.1 7.1-16.3z" />
                        </svg>
                    </a>

                </div>
            </div>

        </footer>
    @endif


</body>
<script>
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>
@include('flatpickr::components.script')

</html>
