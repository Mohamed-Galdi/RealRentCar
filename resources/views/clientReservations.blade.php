@extends('layouts.myapp')
@section('content')
    <div class="mx-auto max-w-screen-xl">
        <div class="">
            <div class="my-6 py-6 px-4 bg-white rounded-md flex justify-start items-center flex-wrap md:flex-nowrap gap-y-4 md:gap-y-0">
                <div class="flex justify-center w-1/2 md:w-1/4">
                    <img loading="lazy" class="w-44 h-44 rounded-full border-2 border-pr-400 shadow-lg shadow-pr-400/50"
                        src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}">
                </div>
                <div class="w-1/2 md:w-1/4">
                    <h2 class="font-medium text-slate-600 text-5xl">{{ Auth::user()->name }}</h2>
                    <h2 class="text-lg font-medium text-gray-900">{{ Auth::user()->email }}</h2>
                </div>
                <div class="w-full grid grid-cols-2 gap-4 md:w-1/2">
                    <div
                        class="bg-blue-300 p-4 rounded-md border-2 border-blue-700 flex flex-col justify-center items-center">
                        <p class="text-lg font-car font-normal text-gray-500">Total Reservations </p>
                        <h2 class="font-medium text-blue-600 text-3xl">{{ Auth::user()->reservations->count() }}</h2>
                    </div>

                    <div
                        class="bg-green-300 p-4 rounded-md border-2 border-green-700 flex flex-col justify-center items-center">
                        <p class="text-lg font-car font-normal text-gray-500">Active Reservations </p>
                        <h2 class="font-medium text-green-600 text-3xl">
                            {{ Auth::user()->reservations->where('status', 'Active')->count() }}</h2>
                    </div>

                    <div
                        class="bg-yellow-300 p-4 rounded-md border-2 border-yellow-700 flex flex-col justify-center items-center">
                        <p class="text-lg font-car font-normal text-gray-500">Pending Reservations </p>
                        <h2 class="font-medium text-yellow-600 text-3xl">
                            {{ Auth::user()->reservations->where('status', 'Pending')->count() }}</h2>
                    </div>

                    <div
                        class="bg-red-300 p-4 rounded-md border-2 border-red-700 flex flex-col justify-center items-center">
                        <p class="text-lg font-car font-normal text-gray-500">Canceled Reservations </p>
                        <h2 class="font-medium text-red-600 text-3xl">
                            {{ Auth::user()->reservations->where('status', 'Canceled')->count() }}</h2>
                    </div>
                </div>
            </div>

            <div class="bg-white p-4 rounded-md my-12">
                <h2 class="text-3xl font-car font-medium text-gray-500 text-center mb-4">Reservations</h2>
                @forelse ($reservations as $reservation)
                    <div class="flex justify-center w-full mb-4 rounded-lg bg-gray-200">
                        <div class="md:w-1/3 w-full h-[250px]  overflow-hidden p-1 hidden md:block  m-3 rounded-md">
                            <img loading="lazy" class="w-full h-full object-cover overflow-hidden rounded-md"
                                src="{{ $reservation->car->image }}" alt="">
                        </div>
                        <div class="m-3 p-1 md:w-2/3 w-full">
                            <h2 class="mt-2 font-car text-gray-800 text-2xl font-medium">{{ $reservation->car->brand }}
                                {{ $reservation->car->model }} {{ $reservation->car->engine }}</h2>
                            <div class="mt-4 flex md:flex-row flex-col justify-start md:gap-10 gap-5">
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
                                <a href="{{ route('invoice', ['reservation' => $reservation->id]) }}" target="_blank">
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
