@extends('layouts.myapp')
@section('content')
    <div class="mx-auto max-w-screen-xl">

        {{-- Admins --}}
        <div id="reservations" class="mt-12">
            <div class="flex align-middle justify-center">
                <hr class=" mt-8 h-0.5 w-1/2 bg-pr-500">
                <p class="my-2 mx-8  p-2 font-car font-bold text-gray-600 text-lg ">Admins</p>
                <hr class=" mt-8 h-0.5 w-1/2 bg-pr-500">
                <a href="{{ route('addAdmin') }}" class="flex  w-40  border-2 border-pr-500 hover:text-white hover:bg-pr-400 font-car font-medium p-1 " >
                    <button>add new admin</button>
                </a>
                <hr>
            </div>

        </div>

        <div class="grid md:grid-cols-3  gap-6 mt-6">
            @foreach ($admins as $admin)
                <div class="bg-white shadow-xl rounded-md flex  justify-start items-center mx-2 ">
                    <div class="w-1/6 m-3 ">
                        <img loading="lazy" src="{{ $admin->avatar }}" alt="admin avatar" class="">
                    </div>
                    <div class="my-3 ">
                        <h2 class="font-car text-gray-900 font-semibold text-xl">{{ $admin->name }}</h2>
                        <h3 class=" text-gray-700 font-medium ">{{ $admin->email }}</h3>
                    </div>
                </div>
            @endforeach

        </div>


        {{-- clients --}}

        <div id="reservations" class="mt-12">
            <div class="flex align-middle justify-center">
                <hr class=" mt-8 h-0.5 w-1/2 bg-pr-500">
                <p class="my-2 mx-8  p-2 font-car font-bold text-gray-600 text-lg ">Clients</p>
                <hr class=" mt-8 h-0.5 w-1/2 bg-pr-500">
                <hr>
            </div>

        </div>

        <div class="w-full overflow-hidden rounded-lg shadow-xs mb-12">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap overflow-scroll table-auto text-center">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="text-center px-4 py-3">Client</th>
                            <th class="text-center px-4 py-3 w-48">Name</th>
                            <th class="text-center px-4 py-3 w-24">Email</th>
                            <th class="text-center px-4 py-3 w-24">Joined at</th>
                            <th class="text-center w-56 px-4 py-3">Reservations</th>
                            <th class="text-center px-4 py-3 w-26">Actions</th>

                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">


                        @forelse ($clients as $client)
                            <tr class="text-gray-700 dark:text-gray-400">

                                <td class="px-4 py-3 text-sm w-1/12">
                                    <img loading="lazy" src="{{ $client->avatar }}" alt="">
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <p>
                                        {{ $client->name }}
                                    </p>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <p>
                                        {{ $client->email }}
                                    </p>
                                </td>
                                <td class="px-4 py-3 text-sm w-32">
                                    <p>
                                        {{ Carbon\Carbon::parse($client->created_at)->format('Y-m-d') }}
                                    </p>
                                </td>
                                <td class="px-4 py-3 text-sm text-center">
                                    @if ($client->reservations->count() > 0)
                                        <p>
                                            <span class=" font-bold text-">{{ $client->reservations->count() }} </span>
                                             reservation
                                        </p>
                                    @else
                                        no active reservations!!!
                                    @endif
                                </td>

                                <td class="px-4 py-3 text-sm w-32">
                                    <a href="{{ route('userDetails', ['user' => $client->id]) }}" >
                                        <button type="submit"
                                            class="bg-blue-500 text-white p-3 rounded-md hover:bg-blue-700">
                                            Details
                                        </button>
                                    </a>

                                </td>



                            </tr>
                        @empty
                        @endforelse


                    </tbody>
                </table>
            </div>
            <div class="flex justify-center my-12 w-full">
        {{ $clients->links('pagination::tailwind') }}
    </div>
        </div>


    </div>
@endsection
