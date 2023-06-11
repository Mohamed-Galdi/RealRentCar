@extends('layouts.myapp')
@section('content')
    <main>



        <div class="bg-sec-100 ">
            {{-- hero --}}

            <div class="flex justify-center py-28 mx-auto max-w-screen-xl">
                <div class="flex  flex-col justify-center w-3/5 ms-20">
                    <h1 class=" font-car font-bold text-gray-900 mb-8  text-7xl"><span class="text-pr-400"> EASY </span>AND
                        FAST WAY TO RENT YOUR CAR</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat facilis voluptas eius recusandae,
                        voluptatibus deserunt voluptates sapiente repudiandae non, labore minus consequuntur quasi quisquam
                        corporis, quis atque hic aut odio?</p>
                    <div class="flex justify-center mt-12 w-2/3">
                        <button
                            class="bg-pr-400 p-2 border-2 border-white rounded-md text-white hover:bg-pr-500 w-32 mx-12 ">cars</button>
                        <button class="border-2 border-pr-400 text-black w-32 p-2 rounded-md hover:bg-sec-400">contact
                            us</button>
                    </div>
                </div>
                <div class="w-3/5">
                    <img src="/images/home car.png" alt="home car">
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
                <div class="   mr-16  flex justify-end">
                    <button
                        class="border-2 border-pr-400 text-black w-16 p-1 rounded-md hover:bg-pr-400 hover:text-white">See
                        All</button>
                </div>
            </div>

            <div class=" grid grid-cols-3  ps-4 justify-center items-center mx-auto max-w-screen-xl">
                @foreach ($cars as $car)
                    <div
                        class="relative m-10 flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                        <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
                            <img class="object-cover" src="{{ $car->image }}" alt="product image" />
                            <span
                                class="absolute top-0 left-0 m-2 rounded-full bg-pr-400 px-2 text-center text-sm font-medium text-white">{{ $car->reduce }}
                                %
                                OFF</span>
                        </a>
                        <div class="mt-4 px-5 pb-5">
                            <a href="#">
                                <h5 class=" font-bold text-xl tracking-tight text-slate-900">{{ $car->brand }}
                                    {{ $car->model }}
                                    {{ $car->engine }}</h5>
                            </a>
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
                            <a href="#"
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
                                Add to cart</a>
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
                <div class="bg-gray-800 text-white  mt-6 rounded-md flex justify-evently mx-16 max-w-screen-xl">

                    <div class="flex justify-around w-1/3 text-center my-4 h-16 align-middle border-r-2 border-white">
                        <div class="flex flex-col justify-center">
                            <h3 class="font-car font-medium text-4xl">80</h3>
                            <p class="font-car  text-lg">Super Cars</p>
                        </div>
                    </div>
                    <div class="flex justify-around w-1/3 text-center my-4 h-16 align-middle border-r-2 border-white">
                        <div class="flex flex-col justify-center">
                            <h3 class="font-car font-medium text-4xl">4500 + </h3>
                            <p class="font-car  text-lg">Satisdied Client</p>
                        </div>
                    </div>
                    <div class="flex justify-around w-1/3 text-center my-4 h-16 align-middle ">
                        <div class="flex flex-col justify-center">
                            <h3 class="font-car font-medium text-4xl">7000</h3>
                            <p class="font-car  text-lg">Reservation</p>
                        </div>
                    </div>

                </div>
            </div>


            {{--  --}}
            <div class="mx-auto max-w-screen-xl mt-16 mb-8 h-screen">
                <div>
                    <h2 class="text-center font-car text-3xl font-medium text-pr-400"> <span
                            class=" text-gray-900">Why</span> Choose us</h2>
                </div>
                <div class="  mt-6 rounded-md flex flex-col justify-evently mx-16 max-w-screen-xl">

                    <div>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, omnis.
                            Officiis incidunt ipsa modi magni saepe corrupti. Assumenda, voluptas quis. Lorem ipsum, dolor
                            sit amet consectetur adipisicing elit. At velit mollitia ullam cumque hic quia deleniti magni
                            repellat saepe cum, molestiae quae officiis ut voluptates odio neque, nemo vitae eius amet! Eum
                            aspernatur tenetur voluptas veritatis est iste perspiciatis ad?</p>
                    </div>
                    <div class="mx-auto max-w-screen-xl">
                        <div class=" absolute -left-96 ">
                            <img src="/images/orange car 1.png" alt="">
                        </div>
                        <div class="bg-gray-800 text-white relative  left-48 top-24 w-full">
                            <div class="grid grid-cols-2 gap-10">

                                <div class="flex p-4 m-4">
                                    <div class="bg-pr-400 p-3 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <style>
                                                svg {
                                                    fill: #fafafa
                                                }
                                            </style>
                                            <path
                                                d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                        </svg>
                                    </div>
                                    <div class="mx-12">

                                        <h3 class="font-car font-medium text-xl">hhhh</h3>
                                        <p class="font-car font-light text-sm">jjjjj</p>
                                    </div>
                                </div>
                                <div class="flex p-4 m-4">
                                    <div class="bg-pr-400 p-3 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <style>
                                                svg {
                                                    fill: #fafafa
                                                }
                                            </style>
                                            <path
                                                d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                        </svg>
                                    </div>
                                    <div class="mx-12">

                                        <h3 class="font-car font-medium text-xl">hhhh</h3>
                                        <p class="font-car font-light text-sm">jjjjj</p>
                                    </div>
                                </div>
                                <div class="flex p-4 m-4">
                                    <div class="bg-pr-400 p-3 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <style>
                                                svg {
                                                    fill: #fafafa
                                                }
                                            </style>
                                            <path
                                                d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                        </svg>
                                    </div>
                                    <div class="mx-12">

                                        <h3 class="font-car font-medium text-xl">hhhh</h3>
                                        <p class="font-car font-light text-sm">jjjjj</p>
                                    </div>
                                </div>
                                <div class="flex p-4 m-4">
                                    <div class="bg-pr-400 p-3 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <style>
                                                svg {
                                                    fill: #fafafa
                                                }
                                            </style>
                                            <path
                                                d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                        </svg>
                                    </div>
                                    <div class="mx-12">

                                        <h3 class="font-car font-medium text-xl">hhhh</h3>
                                        <p class="font-car font-light text-sm">jjjjj</p>
                                    </div>
                                </div>
                                <div class="flex p-4 m-4">
                                    <div class="bg-pr-400 p-3 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <style>
                                                svg {
                                                    fill: #fafafa
                                                }
                                            </style>
                                            <path
                                                d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                        </svg>
                                    </div>
                                    <div class="mx-12">

                                        <h3 class="font-car font-medium text-xl">hhhh</h3>
                                        <p class="font-car font-light text-sm">jjjjj</p>
                                    </div>
                                </div>
                                <div class="flex p-4 m-4">
                                    <div class="bg-pr-400 p-3 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <style>
                                                svg {
                                                    fill: #fafafa
                                                }
                                            </style>
                                            <path
                                                d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                        </svg>
                                    </div>
                                    <div class="mx-12">

                                        <h3 class="font-car font-medium text-xl">hhhh</h3>
                                        <p class="font-car font-light text-sm">jjjjj</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </main>
@endsection
