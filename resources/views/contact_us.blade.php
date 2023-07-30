@extends('layouts.myapp')
@section('content')
    <div class="mt-16">
        <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-center text-gray-900 font-car">Contact
            Us</h2>
        <p class="mb-8 font-light text-center text-gray-500 font-car lg:mb-16 dark:text-gray-400 sm:text-xl">Got a
            technical issue? Want to send feedback about a beta feature? Need details about our Business plan?
            Let us know.</p>
    </div>
    <div class="flex md:flex-row flex-col justify-between max-w-screen-xl md:px-16 px-8 mx-auto gap-12 ">
        <div class="md:w-1/2 order-last md:order-first mb-12 ">
            <form action="#" class="space-y-8" id="contact-form">
                <div class="flex justify-between">
                    <div class="w-full mr-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">First
                            Name</label>
                        <input type="email" id="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                            placeholder="Mohamed" required>
                    </div>

                    <div class="w-full ">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Last
                            Name</label>
                        <input type="email" id="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                            placeholder="Galdi" required>
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="w-full mr-5">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                        <input type="email" id="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                            placeholder="contact.galdi@gmail.com" required>
                    </div>

                    <div class="w-full ">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone
                            Number</label>
                        <input type="email" id="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                            placeholder="+212600000000" required>
                    </div>
                </div>
                <div>
                    <label for="subject"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                    <select name="subject" id="subject"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light">
                        <option value="0" disabled selected>Select subject</option>
                        <option value="reservation">reservation</option>
                        <option value="payment">payment</option>
                        <option value="car problem">car problem</option>
                        <option value="cancelation">cancelation</option>
                        <option value="other">other</option>
                    </select>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your
                        message</label>
                    <textarea id="message" rows="6"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Leave a comment..."></textarea>
                </div>
                <button type="submit"
                    class="p-3 mb-16 font-bold border rounded-md border-pr-400 text-pr-400 hover:text-white hover:bg-pr-400">Send
                    message</button>
            </form>
        </div>
        <div class="grid mx-auto text-center gap-4 ">
            <div>
                <div class="w-20 p-6 mx-auto mb-3 bg-gray-200 rounded-md ">
                    <svg id="o" xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <style>
                            #o {
                                fill: #60646c
                            }
                        </style>
                        <path
                            d="M0 32C0 14.3 14.3 0 32 0H480c17.7 0 32 14.3 32 32s-14.3 32-32 32V448c17.7 0 32 14.3 32 32s-14.3 32-32 32H304V464c0-26.5-21.5-48-48-48s-48 21.5-48 48v48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32V64C14.3 64 0 49.7 0 32zm96 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H112c-8.8 0-16 7.2-16 16zM240 96c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H240zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H368c-8.8 0-16 7.2-16 16zM112 192c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H112zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H240c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H368zM328 384c13.3 0 24.3-10.9 21-23.8c-10.6-41.5-48.2-72.2-93-72.2s-82.5 30.7-93 72.2c-3.3 12.8 7.8 23.8 21 23.8H328z" />
                    </svg>
                </div>
                <h2 class="text-lg font-bold text-gray-800 font-car">Company information:</h2>
                <p class="text-sm font-light text-gray-700 font-car">RealRentCar LLC</p>
                <p class="text-sm font-light text-gray-700 font-car">Location: Morocco</p>
            </div>
            <div>
                <div class="w-20 p-6 mx-auto mb-3 bg-gray-200 rounded-md ">
                    <svg id="o" xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <style>
                            #o {
                                fill: #60646c
                            }
                        </style>
                        <path
                            d="M0 32C0 14.3 14.3 0 32 0H480c17.7 0 32 14.3 32 32s-14.3 32-32 32V448c17.7 0 32 14.3 32 32s-14.3 32-32 32H304V464c0-26.5-21.5-48-48-48s-48 21.5-48 48v48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32V64C14.3 64 0 49.7 0 32zm96 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H112c-8.8 0-16 7.2-16 16zM240 96c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H240zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H368c-8.8 0-16 7.2-16 16zM112 192c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H112zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H240c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H368zM328 384c13.3 0 24.3-10.9 21-23.8c-10.6-41.5-48.2-72.2-93-72.2s-82.5 30.7-93 72.2c-3.3 12.8 7.8 23.8 21 23.8H328z" />
                    </svg>
                </div>
                <h2 class="text-lg font-bold text-gray-800 font-car">Address:</h2>
                <p class="text-sm font-light text-gray-700 font-car">DR ANABDOUR AMMELEN TIZNIT</p>
                <p class="text-sm font-light text-gray-700 font-car">Zip Code/Postal code:85450</p>
            </div>
            <div>
                <div class="w-20 p-6 mx-auto mb-3 bg-gray-200 rounded-md ">
                    <svg id="o" xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <style>
                            #o {
                                fill: #60646c
                            }
                        </style>
                        <path
                            d="M0 32C0 14.3 14.3 0 32 0H480c17.7 0 32 14.3 32 32s-14.3 32-32 32V448c17.7 0 32 14.3 32 32s-14.3 32-32 32H304V464c0-26.5-21.5-48-48-48s-48 21.5-48 48v48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32V64C14.3 64 0 49.7 0 32zm96 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H112c-8.8 0-16 7.2-16 16zM240 96c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H240zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H368c-8.8 0-16 7.2-16 16zM112 192c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H112zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H240c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H368zM328 384c13.3 0 24.3-10.9 21-23.8c-10.6-41.5-48.2-72.2-93-72.2s-82.5 30.7-93 72.2c-3.3 12.8 7.8 23.8 21 23.8H328z" />
                    </svg>
                </div>
                <h2 class="text-lg font-bold text-gray-800 font-car">Call us:</h2>
                <p class="text-sm font-light text-gray-700 font-car">Call us to speak to a member of our team. We are always
                    happy to help.
                </p>
                <p class="font-car text-pr-400 ">+212600000000</p>
            </div>
            <hr class="my-6  sm:mx-auto border-gray-700 lg:my-8 md:hidden" />


        </div>

    </div>

    <script>
        $(document).ready(function() {
            function showPopup() {
                alert('Thank you! We have received your message.');
            }

            $('#contact-form').submit(function(e) {
                e.preventDefault();

                showPopup();

            });
        });
    </script>
@endsection
