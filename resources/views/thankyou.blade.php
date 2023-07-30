<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank you</title>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="/images/logos/LOGOtext.png">
</head>

<body class="mx-auto max-w-screen-xl bg-gray-200">
    <div class="h-screen bg-gray-200 flex justify-center items-center ">
        <div class="bg-white md:w-3/5 h-4/5 rounded-lg mx-4 shadow-xl flex flex-col justify-start items-center gap-8">
            <div class="w-32 mt-10">
                <img loading="lazy"  src="/images/logos/LOGO.png" alt="">
            </div>
            <div class="">
                <h1 class="font-car font-bold text-gray-900 text-6xl text-center">Thank You ❤️</h1>
                <p class="font-car text-center">Thank you for choosing and trusting our car company</p>
            </div>
            <div class="relative bg-gray-200 md:w-3/5 m-4 md:mt-10">
                <div
                    class="w-0 h-0 absolute -top-[29px] left-[215px] border-l-[20px] border-l-transparent border-b-[30px] border-b-gray-200 border-r-[20px] border-r-transparent">
                </div>
                <div class="p-3">
                    <h2 class="text-center mt-4 font-medium text-xl">What to do next !</h2>
                    <p class="text-lg font-car text-gray-600 text-justify">You can go to any of our stores near you and
                        present your reservation invoice (digital or printed) and then pay and get your car</p>
                    <div class="mt-2 flex justify-center">
                        <a href="{{route('invoice', ['reservation'=>$reservation->id])}}"
                        class="w-full p-2 m-2 text-white bg-pr-400 font-semibold rounded-md hover:bg-black flex justify-center items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <style>
                                    svg {
                                        fill: #ffffff
                                    }
                                </style>
                                <path
                                    d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384v38.6C310.1 219.5 256 287.4 256 368c0 59.1 29.1 111.3 73.7 143.3c-3.2 .5-6.4 .7-9.7 .7H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM288 368a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm211.3-43.3c-6.2-6.2-16.4-6.2-22.6 0L416 385.4l-28.7-28.7c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6l40 40c6.2 6.2 16.4 6.2 22.6 0l72-72c6.2-6.2 6.2-16.4 0-22.6z" />
                            </svg>
                            <p>
                                print your invoice
                            </p>
                        </a>

                        <a href="{{route('clientReservation')}}"
                            class="w-full p-2 m-2 text-white bg-gray-700 font-semibold rounded-md hover:bg-black flex justify-center items-center gap-3 hover:cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <style>
                                    svg {
                                        fill: #ffffff
                                    }
                                </style>
                                <path
                                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                            </svg>
                            <p>go to reservations</p>
                        </a>

                    </div>
                </div>

            </div>
        </div>



    </div>
</body>

</html>
