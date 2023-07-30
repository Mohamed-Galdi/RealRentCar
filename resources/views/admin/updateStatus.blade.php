<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="bg-gray-200 flex justify-center items-center h-screen">
        <div class="bg-white p-6 rounded-md md:w-1/3 w-full mx-4">
            <h2 class="text-center font-car font-medium text-xl">{{ $reservation->car->brand }}
                {{ $reservation->car->model }}</h2>
            <h2 class="text-start mt-4 text-gray-500 ">Current Reservation Status: <span
                    class="text-lg text-gray-800">{{ $reservation->status }}</span></h2>
            <div>
                <form action="{{ route('updateStatus', ['reservation' => $reservation->id]) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="my-5 w-full flex items-center">
                        <label class="w-44" for="status">Payment Status: </label>
                        <select
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6"
                            name="status" id="status">
                            <option value="Active">Active</option>
                            <option value="Pending">Pending</option>
                            <option value="Ended">Ended</option>
                            <option value="Canceled">Canceled</option>
                        </select>
                    </div>
                    <div class="flex justify-center mt-12">
                        <a href="{{ route('adminDashboard') }}" class="p-3 w-full text-white text-center rounded-md me-2 bg-red-600 hover:bg-red-800" ><button >Cancel</button></a>
                        <button type="submit" class="p-3 w-full text-white rounded-md bg-blue-500 hover:bg-blue-700">Save</button>
                    </div>
                </form>
            </div>


        </div>

    </div>
</body>

</html>
