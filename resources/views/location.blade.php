@extends('layouts.myapp')
@section('content')
    <div class="mx-auto max-w-screen-xl ">
        <div class="flex md:flex-row flex-col justify-around  items-center px-6 pt-6">
            <div class="md:m-12 p-6 md:w-1/2">
                <img loading="lazy" src="/images/shop1.png" alt="shop image">
            </div>
            <div class=" relative md:m-12 m-6 md:w-1/2 md:p-6">

                <p>Welcome to our car rental shop conveniently located in the heart of the city. Situated in a prime
                    location, our shop provides easy access and a central hub for all your car rental needs. Whether you are
                    a local resident or a traveler exploring the area, finding us is a breeze.</p>
                <br>
                <p>Our shop is strategically positioned near major transportation hubs, including airports, train stations,
                    and bus terminals, making it incredibly convenient for you to pick up and drop off your rental vehicle.
                    Upon arrival, our friendly staff will warmly greet you, ensuring a smooth and efficient rental process
                    from start to finish.</p>
            </div>

        </div>
        <div class="flex md:flex-row flex-col justify-around  items-center px-6 pt-6">

            <div class="md:m-12 p-6 md:w-1/2 md:order-last ">
                <img loading="lazy" src="/images/shop_2.jpg" alt="shop image">
            </div>

            <div class=" relative md:m-12 m-6 md:w-1/2 md:p-6">
                <p>Located in a vibrant neighborhood, our shop is surrounded by a variety of amenities and attractions.
                    You'll find an array of restaurants, cafes, and shopping centers just a short distance away, perfect for
                    grabbing a bite to eat or running errands before or after your car rental experience.</p>
                <br>
                <p>With ample parking space available at our location, you can easily drive in, park your own vehicle, and
                    drive out with your rental car seamlessly. We prioritize your convenience, and our location is designed
                    to minimize any inconvenience or delays, allowing you to focus on your journey ahead.</p>
            </div>


        </div>
        <div class=" p-3 mb-8">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3464.9188930414984!2d-8.984100424763344!3d29.722108575087578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb6b1b1966dcdef%3A0x2bf9c55ec4ef96f9!2sIsta%20Tafraout!5e0!3m2!1sen!2sma!4v1686498234799!5m2!1sen!2sma"
                class="w-full h-96" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>
@endsection
