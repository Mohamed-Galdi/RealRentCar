@extends('layouts.myapp')
@section('content')
    <div class="flex flex-col items-center justify-center max-w-screen-xl mx-auto my-20 ">
        <form class="w-full " action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="md:w-2/3 w-5/6 md:px-24 px-4 pb-8 mx-auto mt-2 space-y-12 bg-white border-2 border-gray-600 rounded-md">
                <div class="pb-12 border-b border-gray-900/10">
                    <h2 class="mt-2 text-lg font-bold leading-7 text-center text-gray-900">Fill the new car details</h2>

                    <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <div class="sm:col-span-3">
                            <label for="brand" class="block text-sm font-medium leading-6 text-gray-900">Brand</label>
                            <div class="mt-2">
                                <input type="text" name="brand" id="brand"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                            </div>
                            @error('brand')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>



                        <div class="sm:col-span-3">
                            <label for="model" class="block text-sm font-medium leading-6 text-gray-900">Model</label>
                            <div class="mt-2">
                                <input type="text" name="model" id="model"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                            </div>
                            @error('model')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="sm:col-span-2 sm:col-start-1">
                            <label for="engine" class="block text-sm font-medium leading-6 text-gray-900">Engine</label>
                            <div class="mt-2">
                                <input type="text" name="engine" id="engine"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                            </div>
                            @error('engine')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="sm:col-span-2">
                            <label for="quantity" class="block text-sm font-medium leading-6 text-gray-900">Quantity</label>
                            <div class="mt-2">
                                <input type="text" name="quantity" id="quantity"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                            </div>
                            @error('quantity')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="sm:col-span-2">
                            <label for="price_per_day" class="block text-sm font-medium leading-6 text-gray-900">Price per
                                day</label>
                            <div class="mt-2">
                                <input type="text" name="price_per_day" id="price_per_day"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                            </div>
                            @error('price_per_day')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="sm:col-span-3">
                            <label for="" class="block text-sm font-medium leading-6 text-gray-900">Reduce %
                            </label>
                            <div class="mt-2">
                                <input type="number" name="reduce" id="reduce"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                            </div>
                            @error('reduce')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="sm:col-span-3">
                            <label for="stars" class="block text-sm font-medium leading-6 text-gray-900">Car
                                stars</label>
                            <div class="mt-2">
                                <select id="stars" name="stars"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option disabled selected value="1">
                                        ⭐⭐⭐⭐⭐
                                    </option>
                                    <option value="1">1/5</option>
                                    <option value="2">2/5</option>
                                    <option value="2">3/5</option>
                                    <option value="4">4/5</option>
                                    <option value="5">5/5</option>
                                </select>
                            </div>
                            @error('stars')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>




                        <div class="col-span-full">
                            <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Cover
                                photo</label>
                            <div
                                class="flex justify-center px-6 py-10 mt-2 border border-dashed rounded-lg border-gray-900/25">
                                <div class="text-center">
                                    <svg class="w-12 h-12 mx-auto text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div class="flex mt-4 text-sm leading-6 text-gray-600">
                                        <label for="file-upload"
                                            class="relative font-semibold bg-white rounded-md cursor-pointer text-pr-400 focus-within:outline-none focus-within:ring-2 focus-within:ring-pr-400 focus-within:ring-offset-2 hover:text-pr-400">
                                            <span>Upload a file</span>
                                            <input id="file-upload" name="image" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                            @error('image')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="sm:col-span-3">
                            <label for="status" class="block text-sm font-medium leading-6 text-gray-900">Status</label>
                            <div class="mt-2">
                                <select id="status" name="status"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value="available">Available</option>
                                    <option value="unavailable">Unavailable</option>
                                </select>
                            </div>
                            @error('status')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>


                    </div>
                </div>


                <div class="flex items-center justify-center mb-6 gap-x-6">
                    <a href="{{route('cars.index')}}"
                        class="w-20 p-1 text-sm font-semibold leading-6 text-center text-gray-900 border-2 rounded-md border-pr-200 hover:bg-white bg-sec-300">Cancel</a>
                    <button type="submit"
                        class="w-1/3 px-3 py-2 text-sm font-semibold text-white rounded-md shadow-sm bg-pr-400 hover:bg-pr-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pr-400">Save</button>
                </div>

            </div>


        </form>

    </div>
@endsection
