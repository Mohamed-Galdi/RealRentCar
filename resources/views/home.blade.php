@extends('layouts.myapp')
@section('content')
    <main>



        <div class="bg-sec-100 ">
            {{-- hero --}}
            <div class="flex justify-center md:py-28 py-12 mx-auto max-w-screen-xl">
                <div class="flex  flex-col justify-center md:w-3/5  mx-12 md:ms-20 md:mx-0">
                    <h1 class=" md:text-start text-center  font-car font-bold text-gray-900 mb-8  md:text-7xl text-4xl "><span class="text-pr-400"> EASY
                        </span>AND
                        FAST WAY TO RENT YOUR CAR</h1>
                    <div class="md:w-3/5 md:hidden  ">
                        <img loading="lazy" src="/images/home car.png" alt="home car">
                    </div>
                    <p class="text-justify md:mx-0 mx-8 ">Whether you're planning a weekend
                        getaway or a cross-country adventure, we've got you covered. With our wide selection of vehicles and
                        convenient booking system, renting a car has never been this effortless.</p>
                    <div class="flex justify-center md:justify-start mt-12 md:w-2/3 me-12 md:-ms-12">
                        <a href="/cars">
                            <button
                                class="bg-pr-400 p-2 border-2 border-white rounded-md text-white hover:bg-pr-500 w-32 md:me-12 md:mx-12 mx-7 font-bold ">CARS</button>
                        </a>
                        <a href="/contact_us">
                            <button class="border-2 border-pr-400 text-black w-32 p-2 rounded-md hover:bg-sec-400">CONTACT
                                US</button>
                        </a>
                    </div>
                </div>
                <div class="md:w-3/5 hidden md:block  ">
                    <img loading="lazy" src="/images/home car.png" alt="home car">
                </div>

            </div>

            {{-- Cars Section --}}


            <div class="mx-auto max-w-screen-xl">
                <div class="flex align-middle justify-center">
                    <hr class=" mt-8 h-0.5 w-2/5 bg-pr-500">
                    <p class="my-2 mx-8  p-2 font-car font-bold text-pr-400 text-lg ">CARS</p>
                    <hr class=" mt-8 h-0.5 w-2/5 bg-pr-500">
                    <hr>
                </div>
                <div class="   md:mr-16 mr-4 mb-4 flex justify-end">
                    <a href="/cars">
                        <button
                            class="border-2 border-pr-400 text-black w-16 p-1 rounded-md hover:bg-pr-400 hover:text-white">See
                            All</button>
                    </a>
                </div>
            </div>

            <div class=" grid md:grid-cols-3  md:ps-4 justify-center p-2 gap-4 items-center mx-auto max-w-screen-xl ">
                @foreach ($cars as $car)
                    <div
                        class="relative md:m-10 flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                        <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="{{ route('car.reservation', ['car' => $car->id]) }}">
                            <img loading="lazy" class="object-cover" src="{{ $car->image }}" alt="product image" />
                            <span
                                class="absolute top-0 left-0 m-2 rounded-full bg-pr-400 px-2 text-center text-sm font-medium text-white">{{ $car->reduce }}
                                %
                                OFF</span>
                        </a>
                        <div class="mt-4 px-5 pb-5">
                            <div >
                                <h5 class=" font-bold text-xl tracking-tight text-slate-900">{{ $car->brand }}
                                    {{ $car->model }}
                                    {{ $car->engine }}</h5>
                            </div>
                            <div class="mt-2 mb-5 flex items-center justify-between">
                                <p>
                                    <span class="text-3xl font-bold text-slate-900">{{ $car->price_per_day }}</span>
                                    <span
                                        class="text-sm text-slate-900 line-through">{{ intval(($car->price_per_day * 100) / (100 - $car->reduce)) }}
                                    </span>
                                </p>

                                <div class="flex items-center">
                                    @for ($i = 0; $i < $car->stars; $i++)
                                        <svg aria-hidden="true" class="h-5 w-5 text-pr-300" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                    @endfor
                                    <span
                                        class="mr-2 ml-3 rounded bg-pr-300 px-2.5 py-0.5 text-xs font-semibold">{{ $car->stars }}.0</span>
                                </div>
                            </div>
                            <a href="{{ route('car.reservation', ['car' => $car->id]) }}"
                                class="flex items-center justify-center rounded-md bg-slate-900 hover:bg-pr-400 px-5 py-2.5 text-center text-sm font-medium text-white  focus:outline-none focus:ring-4 focus:ring-blue-300">
                                <svg id="thisicon" class="mr-4 h-6 w-6" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 512 512">
                                    <style>
                                        #thisicon {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path
                                        d="M184 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H96c-35.3 0-64 28.7-64 64v16 48V448c0 35.3 28.7 64 64 64H416c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H376V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H184V24zM80 192H432V448c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V192zm176 40c-13.3 0-24 10.7-24 24v48H184c-13.3 0-24 10.7-24 24s10.7 24 24 24h48v48c0 13.3 10.7 24 24 24s24-10.7 24-24V352h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H280V256c0-13.3-10.7-24-24-24z" />
                                </svg>
                                Reserve</a>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Our numbers section --}}
            <div class="mx-auto max-w-screen-xl mt-16 mb-32">
                <div>
                    <h2 class="text-center font-car text-3xl font-medium text-pr-400"> <span
                            class=" text-gray-900">Our</span> Numbers</h2>
                </div>
                <div
                    class="bg-gray-800 text-white  mt-6 rounded-md flex md:flex-row flex-col md:justify-evently items-center gap-6 md:gap-0  mx-16 max-w-screen-xl">

                    <div
                        class="flex justify-around md:w-1/3 text-center my-4 h-16 align-middle md:border-b-0 md:border-r-2 border-b-2 pb-4 border-white">
                        <div class="flex flex-col justify-center">
                            <h3 class="font-car font-medium text-4xl">80</h3>
                            <p class="font-car  text-lg">Super Cars</p>
                        </div>
                    </div>
                    <div
                        class="flex justify-around md:w-1/3 text-center my-4 h-16 align-middle md:border-b-0 md:border-r-2 border-b-2 pb-4 border-white">
                        <div class="flex flex-col justify-center">
                            <h3 class="font-car font-medium text-4xl">4500 + </h3>
                            <p class="font-car  text-lg">Satisdied Client</p>
                        </div>
                    </div>
                    <div
                        class="flex justify-around md:w-1/3 text-center my-4 h-16 align-middle  border-b-2 pb-4 border-white md:border-b-0">
                        <div class="flex flex-col justify-center">
                            <h3 class="font-car font-medium text-4xl">7000</h3>
                            <p class="font-car  text-lg">Reservation</p>
                        </div>
                    </div>

                </div>
            </div>


            {{-- Why us section  --}}
            <div class="mx-auto max-w-screen-xl ">
                <div>
                    <h2 class="text-center font-car text-3xl font-medium text-pr-400"> <span
                            class=" text-gray-900">Why</span> Choose us</h2>
                </div>
                <div class="mt-7 mb-16">
                    <p class="md:text-center text-xl text-justify mx-8 ">We
                        prioritize your satisfaction and strive to make your car rental experience as seamless as possible.
                        With our wide selection of well-maintained vehicles, competitive prices, and simple booking process,
                        you can trust us to meet your needs. Our dedicated customer service team is available around the
                        clock to assist you, ensuring that you receive the support you deserve. Whether you need a car for a
                        weekend getaway or a long road trip, choose us for a hassle-free and enjoyable journey.</p>
                </div>

                <div
                    class=" grid md:grid-cols-3 md:p-12 p-4 gap-6 my-8 md:mx-auto mx-8 max-w-screen-xl border-[0.5px] border-gray-700 rounded-lg bg-white">
                    <div class="flex justify-center align-middle ">
                        <div class="bg-gray-800 p-3 rounded-lg mx-3 mb-6 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="2.5em" viewBox="0 0 512 512">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <style>
                                    svg {
                                        fill: #f49800
                                    }
                                </style>
                                <path
                                    d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-car font-bold text-gray-900 text-2xl">Customer Support</h3>
                            <p class="font-car text-gray-700 text-sm ">Our dedicated team is here to provide exceptional
                                customer support whenever you need it.</p>
                        </div>
                    </div>
                    <div class="flex justify-center align-middle ">
                        <div class="bg-gray-800 p-3 rounded-lg mx-3 mb-6 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="2.5em" viewBox="0 0 512 512">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <style>
                                    svg {
                                        fill: #f49b00
                                    }
                                </style>
                                <path
                                    d="M280 24c0-13.3-10.7-24-24-24s-24 10.7-24 24v80c0 13.3 10.7 24 24 24s24-10.7 24-24V24zM185.8 224H326.2c6.8 0 12.8 4.3 15.1 10.6L360.3 288H151.7l19.1-53.4c2.3-6.4 8.3-10.6 15.1-10.6zm-75.3-10.9L82.2 292.4C62.1 300.9 48 320.8 48 344v40 64 32c0 17.7 14.3 32 32 32H96c17.7 0 32-14.3 32-32V448H384v32c0 17.7 14.3 32 32 32h16c17.7 0 32-14.3 32-32V448 384 344c0-23.2-14.1-43.1-34.2-51.6l-28.3-79.3C390.1 181.3 360 160 326.2 160H185.8c-33.8 0-64 21.3-75.3 53.1zM128 344a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm232 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zM39 39c-9.4 9.4-9.4 24.6 0 33.9l48 48c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L73 39c-9.4-9.4-24.6-9.4-33.9 0zm400 0L391 87c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l48-48c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-car font-bold text-gray-900 text-2xl">Super Cars</h3>
                            <p class="font-car text-gray-700 text-sm "> Experience the thrill of driving our top-of-the-line
                                supercars that are sure to leave a lasting impression.</p>
                        </div>
                    </div>
                    <div class="flex justify-center align-middle ">
                        <div class="bg-gray-800 p-3 rounded-lg mx-3 mb-6 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="2.5em" viewBox="0 0 640 512">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <style>
                                    svg {
                                        fill: #f49b00
                                    }
                                </style>
                                <path
                                    d="M323.4 85.2l-96.8 78.4c-16.1 13-19.2 36.4-7 53.1c12.9 17.8 38 21.3 55.3 7.8l99.3-77.2c7-5.4 17-4.2 22.5 2.8s4.2 17-2.8 22.5l-20.9 16.2L512 316.8V128h-.7l-3.9-2.5L434.8 79c-15.3-9.8-33.2-15-51.4-15c-21.8 0-43 7.5-60 21.2zm22.8 124.4l-51.7 40.2C263 274.4 217.3 268 193.7 235.6c-22.2-30.5-16.6-73.1 12.7-96.8l83.2-67.3c-11.6-4.9-24.1-7.4-36.8-7.4C234 64 215.7 69.6 200 80l-72 48V352h28.2l91.4 83.4c19.6 17.9 49.9 16.5 67.8-3.1c5.5-6.1 9.2-13.2 11.1-20.6l17 15.6c19.5 17.9 49.9 16.6 67.8-2.9c4.5-4.9 7.8-10.6 9.9-16.5c19.4 13 45.8 10.3 62.1-7.5c17.9-19.5 16.6-49.9-2.9-67.8l-134.2-123zM16 128c-8.8 0-16 7.2-16 16V352c0 17.7 14.3 32 32 32H64c17.7 0 32-14.3 32-32V128H16zM48 320a16 16 0 1 1 0 32 16 16 0 1 1 0-32zM544 128V352c0 17.7 14.3 32 32 32h32c17.7 0 32-14.3 32-32V144c0-8.8-7.2-16-16-16H544zm32 208a16 16 0 1 1 32 0 16 16 0 1 1 -32 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-car font-bold text-gray-900 text-2xl">Free Cancelation</h3>
                            <p class="font-car text-gray-700 text-sm "> Enjoy the flexibility of free cancellation, giving
                                you peace of mind in case your plans change.</p>
                        </div>
                    </div>
                    <div class="flex justify-center align-middle ">
                        <div class="bg-gray-800 p-3 rounded-lg mx-3 mb-6 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="2.5em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <style>
                                    svg {
                                        fill: #f49b00
                                    }
                                </style>
                                <path
                                    d="M312 24V34.5c6.4 1.2 12.6 2.7 18.2 4.2c12.8 3.4 20.4 16.6 17 29.4s-16.6 20.4-29.4 17c-10.9-2.9-21.1-4.9-30.2-5c-7.3-.1-14.7 1.7-19.4 4.4c-2.1 1.3-3.1 2.4-3.5 3c-.3 .5-.7 1.2-.7 2.8c0 .3 0 .5 0 .6c.2 .2 .9 1.2 3.3 2.6c5.8 3.5 14.4 6.2 27.4 10.1l.9 .3 0 0c11.1 3.3 25.9 7.8 37.9 15.3c13.7 8.6 26.1 22.9 26.4 44.9c.3 22.5-11.4 38.9-26.7 48.5c-6.7 4.1-13.9 7-21.3 8.8V232c0 13.3-10.7 24-24 24s-24-10.7-24-24V220.6c-9.5-2.3-18.2-5.3-25.6-7.8c-2.1-.7-4.1-1.4-6-2c-12.6-4.2-19.4-17.8-15.2-30.4s17.8-19.4 30.4-15.2c2.6 .9 5 1.7 7.3 2.5c13.6 4.6 23.4 7.9 33.9 8.3c8 .3 15.1-1.6 19.2-4.1c1.9-1.2 2.8-2.2 3.2-2.9c.4-.6 .9-1.8 .8-4.1l0-.2c0-1 0-2.1-4-4.6c-5.7-3.6-14.3-6.4-27.1-10.3l-1.9-.6c-10.8-3.2-25-7.5-36.4-14.4c-13.5-8.1-26.5-22-26.6-44.1c-.1-22.9 12.9-38.6 27.7-47.4c6.4-3.8 13.3-6.4 20.2-8.2V24c0-13.3 10.7-24 24-24s24 10.7 24 24zM568.2 336.3c13.1 17.8 9.3 42.8-8.5 55.9L433.1 485.5c-23.4 17.2-51.6 26.5-80.7 26.5H192 32c-17.7 0-32-14.3-32-32V416c0-17.7 14.3-32 32-32H68.8l44.9-36c22.7-18.2 50.9-28 80-28H272h16 64c17.7 0 32 14.3 32 32s-14.3 32-32 32H288 272c-8.8 0-16 7.2-16 16s7.2 16 16 16H392.6l119.7-88.2c17.8-13.1 42.8-9.3 55.9 8.5zM193.6 384l0 0-.9 0c.3 0 .6 0 .9 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-car font-bold text-gray-900 text-2xl">Best Price</h3>
                            <p class="font-car text-gray-700 text-sm ">We guarantee the best prices for our rental cars,
                                ensuring you get the most value for your money.
                            </p>
                        </div>
                    </div>
                    <div class="flex justify-center align-middle ">
                        <div class="bg-gray-800 p-3 rounded-lg mx-3 mb-6 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="2.5em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <style>
                                    svg {
                                        fill: #f49b00
                                    }
                                </style>
                                <path
                                    d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V285.7l-86.8 86.8c-10.3 10.3-17.5 23.1-21 37.2l-18.7 74.9c-2.3 9.2-1.8 18.8 1.3 27.5H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-car font-bold text-gray-900 text-2xl">Easy Process</h3>
                            <p class="font-car text-gray-700 text-sm ">Our streamlined process makes renting a car quick
                                and effortless, saving you time and hassle.
                            </p>
                        </div>
                    </div>
                    <div class="flex justify-center align-middle ">
                        <div class="bg-gray-800 p-3 rounded-lg mx-3 mb-6 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="2.5em" viewBox="0 0 448 512">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <style>
                                    svg {
                                        fill: #f49b00
                                    }
                                </style>
                                <path
                                    d="M128 40c0-22.1 17.9-40 40-40s40 17.9 40 40V188.2c8.5-7.6 19.7-12.2 32-12.2c20.6 0 38.2 13 45 31.2c8.8-9.3 21.2-15.2 35-15.2c25.3 0 46 19.5 47.9 44.3c8.5-7.7 19.8-12.3 32.1-12.3c26.5 0 48 21.5 48 48v48 16 48c0 70.7-57.3 128-128 128l-16 0H240l-.1 0h-5.2c-5 0-9.9-.3-14.7-1c-55.3-5.6-106.2-34-140-79L8 336c-13.3-17.7-9.7-42.7 8-56s42.7-9.7 56 8l56 74.7V40zM240 304c0-8.8-7.2-16-16-16s-16 7.2-16 16v96c0 8.8 7.2 16 16 16s16-7.2 16-16V304zm48-16c-8.8 0-16 7.2-16 16v96c0 8.8 7.2 16 16 16s16-7.2 16-16V304c0-8.8-7.2-16-16-16zm80 16c0-8.8-7.2-16-16-16s-16 7.2-16 16v96c0 8.8 7.2 16 16 16s16-7.2 16-16V304z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-car font-bold text-gray-900 text-2xl">Digital services</h3>
                            <p class="font-car text-gray-700 text-sm ">Take advantage of our convenient digital services,
                                making your car rental experience even more convenient and efficient.
                            </p>
                        </div>
                    </div>



                </div>

            </div>

            {{-- Orange car section --}}
            <div class=" relative -bottom-[1px] mx-auto max-w-screen-xl  ">
                <img loading="lazy" src="/images/orange car 1.png" alt="" class="w-full">
            </div>

        </div>
    </main>
@endsection
