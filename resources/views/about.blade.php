@include('include.head')
@include('include.header')


<header class="relative">
        <img class="w-full brightness-50" src="./img/about-us.png" alt="">
        <h1 class="absolute top-[50%] left-[50%] text-3xl md:text-[110px] text-center w-3/4 font-black text-white translate-x-[-50%] translate-y-[-50%]">About Us</h1>
</header>
    <section class="m-4 md:m-16 xl:m-[100px]">
        <>
           <div class="grid xl:grid-cols-2 items-center md:gap-16 relative pt-8 lg:py-20 lg:pr-20">
                <div class="grid grid-cols-2 gap-4 order-last md:-order-1">
                    <div class="mt-12 md:mt-0">
                        <img class="brightness-[.7] rounded" src="./img/salon2.jpg" alt="">
                        <div class="flex items-end p-4 gap-2">
                            <p class="text-xs md:text-base"> 6145 Franconia Rd, Alexandria Virginia 22310 </p>
                            <span class="text-3xl">&rarr; </span>
                        </div>
                    </div>
                    <div>
                        <p class="text-transparent py-8">6145 Franconia Rd, Alexandria Virginia 22310</p>
                        <img class="brightness-[.6] rounded" src="./img/salon3.jpg" alt="">
                    </div>
                </div>
                <div class="p-4 md:p-0">
                    <h2 class="text-2xl md:text-4xl font-bold text-green-900">Our Salon</h2> <br>
                    <p class="md:text-xl">
                        We specialize in all types of hairstyles, from braids and twists to afros, and offer hair extensions and natural hair care products. Customer service is our number one priority, and customer satisfaction is our main goal. <br><br>
                        We achieve these objectives by handling every client with the utmost care and pride ourselves on giving you beautiful hairstyles. Our stylists focus on making you look your best every time. <br><br>
                        The cozy, comfortable, modern, with pleasant and ambiance, add to the aesthetics. Akwaba Hair Braiding Salon is well equipped and functional for any hair braiding style you wish.
                    </p>
                </div>
                <div class="hidden lg:block absolute right-0 -z-10 bg-gray-100 h-full w-8/12"></div>
           </div>
           <!-- vision, mission, goals -->
            @include('include.vision')
           <!-- end vision, mission, goals -->

    </section>


@include('include.footer')