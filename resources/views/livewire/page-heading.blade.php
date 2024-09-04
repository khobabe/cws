<div class="w-full">
    <section class="bg-blue-900 text-white py-12 md:py-16">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <!-- Text Content -->
            <div class="text-center md:text-left mb-8 md:mb-0 md:w-1/2">
                <h1 class="text-3xl md:text-4xl font-bold mb-4 mt-5">{{$title}}</h1>
                <p class="text-md md:text-lg mb-6">
                    {{$description}}
                </p>
                <div class="flex flex-col md:flex-row justify-center md:justify-start gap-4">
                    <a href="#"
                        class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-5 rounded-full">
                        GET FREE TUTORIAL
                    </a>
                    <a href="tel:+919546805580"
                        class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-5 rounded-full">
                        Call: +91-9546-8055-80
                    </a>
                </div>
            </div>
            <!-- Image -->
            <div class="flex justify-center md:justify-end md:w-1/2 px-4">
                <img src="{{asset('assets/'.$image)}}" alt="{{$title}}" class="max-w-full h-auto rounded-lg">
            </div>
        </div>
    </section>
    <div class="bend-bottom bg-blue-900 h-16"></div>
</div>