@extends('layouts.myapp')
@section('content')
    <div class="mx-auto max-w-screen-xl">
        <div class=" bg-white rounded-md p-6 flex md:flex-row flex-col md:my-12">
            <div class="md:w-1/4 md:border-r border-gray-900 flex flex-col gap-8">
                <div class="flex justify-center">
                    <img loading="lazy" class="w-[150px]" src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}">
                </div>
                <div class="text-center md:text-start">
                    <h2 class="text-lg font-medium text-gray-900"><span
                            class="text-lg font-car font-normal text-gray-500">Name:
                        </span>{{ Auth::user()->name }}</h2>
                    <h2 class="text-lg font-medium text-gray-900"><span
                            class="text-lg font-car font-normal text-gray-500">Eamil:
                        </span>{{ Auth::user()->email }}</h2>

                    <h2 class="text-lg font-medium text-green-600"><span
                            class="text-lg font-car font-normal text-gray-500">Active
                            Reservations: </span>{{ Auth::user()->reservations->where('status', 'Active')->count() }}</h2>
                    <h2 class="text-lg font-medium text-yellow-300"><span
                            class="text-lg font-car font-normal text-gray-500">Pending
                            Reservations: </span>{{ Auth::user()->reservations->where('status', 'Pending')->count() }}</h2>
                    <h2 class="text-lg font-medium text-Black"><span
                            class="text-lg font-car font-normal text-gray-500">Ended
                            Reservations: </span>{{ Auth::user()->reservations->where('status', 'Ended')->count() }}</h2>
                    <h2 class="text-lg font-medium text-red-600"><span
                            class="text-lg font-car font-normal text-gray-500">Canceled
                            Reservations: </span>{{ Auth::user()->reservations->where('status', 'Canceled')->count() }}</h2>
                    <h2 class="text-lg font-medium text-pr-400"><span
                            class="text-lg font-car font-normal text-gray-500">Total
                            Reservations: </span>{{ Auth::user()->reservations->count() }}</h2>

                </div>
            </div>

            <div class="md:w-3/4 mt-8 md:mt-0">
                @forelse ($reservations as $reservation)
                    <div class="flex justify-center  md:m-6 mb-4 rounded-lg bg-gray-200">
                        <div class="w-[350px] h-[250px]  overflow-hidden p-1 hidden md:block  m-3 rounded-md">
                            <img loading="lazy" class="w-full h-full object-cover overflow-hidden rounded-md"
                                src="{{ $reservation->car->image }}" alt="">
                        </div>
                        <div class="m-3 p-1 md:w-[500px]">
                            <h2 class="mt-2 font-car text-gray-800 text-2xl font-medium">{{ $reservation->car->brand }}
                                {{ $reservation->car->model }} {{ $reservation->car->engine }}</h2>
                            <div class="mt-4 flex justify-start md:gap-10 gap-5">
                                <div class="flex gap-2 items-center">
                                    <p class="text-lg font-medium">From: </p>
                                    <p class="text-pr-600 font-semibold text-lg">
                                        {{ Carbon\Carbon::parse($reservation->start_date)->format('y-m-d') }}</p>
                                </div>
                                <div class="flex gap-2 items-center">
                                    <p class="text-lg font-medium">To: </p>
                                    <p class="text-pr-600 font-semibold text-lg">
                                        {{ Carbon\Carbon::parse($reservation->end_date)->format('y-m-d') }}</p>
                                </div>
                                <div class="flex gap-2 items-center">
                                    <p class="text-lg font-medium">Price: </p>
                                    <p class="text-pr-600 font-semibold text-lg">{{ $reservation->total_price }} <span
                                            class="text-black">$</span> </p>
                                </div>



                            </div>
                            <div class="mt-8 flex justify-start md:gap-16 gap-6">

                                <div class="flex md:gap-2 items-center">
                                    <p class="text-lg font-medium">Payment: </p>
                                    <div class="px-4 py-3 text-sm ">
                                        @if ($reservation->payment_status == 'Pending')
                                            <span
                                                class="p-2 text-white rounded-md bg-yellow-300 ">{{ $reservation->payment_status }}</span>
                                        @elseif ($reservation->payment_status == 'Canceled')
                                            <span
                                                class="p-2 text-white rounded-md bg-red-500 ">{{ $reservation->payment_status }}</span>
                                        @elseif ($reservation->payment_status == 'Paid')
                                            <span
                                                class="p-2 text-white rounded-md bg-green-500 px-5">{{ $reservation->payment_status }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="flex gap-2 items-center">
                                    <p class="text-lg font-medium">Reservation: </p>
                                    <div class="px-4 py-3 text-sm ">
                                        @if ($reservation->status == 'Pending')
                                            <span
                                                class="p-2 text-white rounded-md bg-yellow-300 ">{{ $reservation->status }}</span>
                                        @elseif ($reservation->status == 'Ended')
                                            <span
                                                class="p-2 text-white rounded-md bg-black ">{{ $reservation->status }}</span>
                                        @elseif ($reservation->status == 'Active')
                                            <span
                                                class="p-2 text-white rounded-md bg-green-500 px-4">{{ $reservation->status }}</span>
                                        @elseif ($reservation->status == 'Canceled')
                                            <span
                                                class="p-2 text-white rounded-md bg-red-500 ">{{ $reservation->status }}</span>
                                        @endif
                                    </div>
                                </div>

                            </div>

                            <div class="w-[350px] h-[250px]  overflow-hidden p-1  md:hidden  mx-auto mt-3 rounded-md">
                            <img loading="lazy" class="w-full h-full object-cover overflow-hidden rounded-md"
                                src="{{ $reservation->car->image }}" alt="">
                        </div>

                            <div class="mt-8 text-center w-full px-2">
                                <a href="{{ route('invoice', ['reservation' => $reservation->id]) }}">
                                    <button class="bg-pr-400 p-3 text-white font-bold hover:bg-black w-full rounded-md ">
                                        Get Reservation Invoice</button>
                                </a>
                            </div>

                        </div>

                    </div>
                @empty
                    <div class="h-full w-full flex justify-center items-center">
                        <h2 class="font-medium text-2xl ">There no reservations yet</h2>
                    </div>
                @endforelse

            </div>

        </div>
    </div>
@endsection
