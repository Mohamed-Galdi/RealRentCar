@extends('layouts.myapp')
@section('content')
    {{-- <div class="flex h-screen bg-gray-50 dark:bg-gray-900 w-10/12" > --}}
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl ">
        <div class="flex flex-col flex-1 w-full">
            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid mb-32 ">


                    <!-- Cards -->
                    <div class="grid md:grid-cols-3 gap-6 mb-8 mt-16 ">
                        <!-- Card -->
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                            <div class="p-3 mr-4 bg-blue-400 rounded-full ">
                                <svg style="fill: #fff" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 512 512">
                                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->

                                    <path
                                        d="M135.2 117.4L109.1 192H402.9l-26.1-74.6C372.3 104.6 360.2 96 346.6 96H165.4c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32H346.6c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2V400v48c0 17.7-14.3 32-32 32H448c-17.7 0-32-14.3-32-32V400H96v48c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V400 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-lg font-medium text-gray-500 ">
                                    Total Cars:
                                </p>
                                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                    {{ $cars->count() }}
                                </p>
                            </div>
                        </div>

                        <!-- Card -->
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                            <div class="p-3 mr-4 bg-green-400 rounded-full ">
                                <svg style="fill: #fff" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 448 512">
                                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->

                                    <path
                                        d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-lg font-medium text-gray-500 ">
                                    Assured cars
                                </p>
                                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                    {{ $cars->where('insu_id', '!=', null)->count() }}
                                </p>

                            </div>
                        </div>
                        <!-- Card -->
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                            <div class="p-3 mr-4 bg-red-500 rounded-full ">
                                <svg style="fill: #fff" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 512 512">
                                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->

                                    <path
                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24V264c0 13.3-10.7 24-24 24s-24-10.7-24-24V152c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-lg font-medium text-gray-500 ">
                                    Non Assured Cars
                                </p>
                                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                    {{ $cars->where('insu_id', null)->count() }}
                                </p>
                            </div>
                        </div>
                        <!-- Card -->

                    </div>


                    <div class="mx-auto max-w-screen-xl">
                        <a href="{{ route('insurances.create') }}">
                            <button
                                class="flex justify-center items-center bg-pr-400  p-3 rounded-md mt-8 hover:bg-black  ">

                                <svg class="ms-2" style="fill: #fff" xmlns="http://www.w3.org/2000/svg" height="1.5em"
                                    viewBox="0 0 448 512">
                                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->

                                    <path
                                        d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                </svg>
                                <p class="mx-2  text-white  font-bold">Assure a new car</p>
                            </button>

                        </a>
                    </div>


                    <div class="mt-12">
                        <div class="flex align-middle justify-center">
                            <hr class=" mt-8 h-0.5 w-1/2 bg-pr-500">
                            <p class="my-2 mx-8  p-2 font-car font-bold text-gray-600 text-lg ">Cars</p>
                            <hr class=" mt-8 h-0.5 w-1/2 bg-pr-500">
                            <hr>
                        </div>

                    </div>

                    <!-- New Table -->
                    <div class="w-full overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full whitespace-no-wrap">
                                <thead>
                                    <tr
                                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                        <th class="px-4 py-3">Car</th>
                                        <th class="px-4 py-3">Insurance Company</th>
                                        <th class="px-4 py-3">Type</th>
                                        <th class="px-4 py-3">Start at</th>
                                        <th class="px-4 py-3">End at</th>
                                        <th class="px-4 py-3">Duration</th>
                                        <th class="px-4 py-3">Price</th>
                                        <th class="px-4 py-3">Status</th>
                                        <th class="px-4 py-3">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                    @foreach ($insurances as $insu)
                                        <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                                <div class="flex items-center text-sm">
                                                    <!-- Avatar with inset shadow -->
                                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                        <img loading="lazy" class="object-cover w-full h-full "
                                                            src="{{ $insu->car->image }}" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner"
                                                            aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-semibold">{{ $insu->car->brand }}
                                                            {{ $insu->car->model }}</p>
                                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                                            {{ $insu->car->engine }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                {{ $insu->company }}
                                            </td>

                                            <td class="px-4 py-3 text-sm">
                                                {{ $insu->type }}
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                {{ $insu->start_date }}
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                {{ $insu->end_date }}
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                @if ($insu->end_date > $insu->start_date)
                                                    {{ Carbon\Carbon::parse($insu->end_date)->diffInDays(Carbon\Carbon::parse($insu->start_date)) }}
                                                    days
                                                @else
                                                    <p class="text-xl">😲</p>
                                                @endif

                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                {{ $insu->price }} $
                                            </td>

                                            <td class="px-4 py-3 text-xs">
                                                @if ($insu->status == 'Active')
                                                    <p class=" rounded-lg bg-green-100  text-green-700 text-center p-1">
                                                        {{ $insu->status }}</p>
                                                @else
                                                    <p class=" rounded-lg bg-red-100  text-red-700 text-center p-1">
                                                        {{ $insu->status }}</p>
                                                @endif
                                            </td>
                                            <td class="flex my-4 py-3  px-6  space-x-3 ">

                                                <form action="{{ route('insurances.destroy', ['insurance' => $insu->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach




                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="flex justify-center my-12 w-full">
                        {{ $insurances->links('pagination::tailwind') }}
                    </div>


                </div>
            </main>
        </div>
    </div>
@endsection
