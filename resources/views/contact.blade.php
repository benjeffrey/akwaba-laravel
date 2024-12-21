@include('include.head')
@include('include.header')


    <header class="flex justify-center items-center relative" >
        <div class="h-80 w-full bg-cover bg-cente brightness-50 " style="background-image: url('./img/hairstyle-tools.jpg')"></div>
        <div class="w-full px-4 md:p-0 md:w-7/12 absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]  brightness-100">
            <h1 class="text-3xl md:text-6xl text-center text-white font-black leading-snug">Contact Us</h1>
            <hr class="w-32 border my-8 mx-auto ">
            <p class="text-white text-center text-sm md:text-base">Ready to transform your hair with stunning braids, twists, afros, or hair extensions? Reach out to us today! At Akwaba Hair Braiding Salon, we specialize in all types of hairstyles that celebrate your natural beauty.</p>                    
        </div>
    </header>
    <!-- get in touch -->
    @include('include.getintouch')
    <!-- end get in touch -->

    <!-- contact info -->
    <section class="m-4 md:mx-8 lg:mx-[100px]">
        <div class="grid md:grid-cols-3 gap-4 md:gap-8">
            <div class="bg-white rounded-lg shadow flex items-center gap-2 lg:gap-6 p-4 lg:p-6">
                <ion-icon class="text-4xl lg:text-5xl text-green-900" name="mail"></ion-icon>
                <div class="flex flex-col gap-1">
                    <span class="text-gray-500">Email</span>
                    <span class="text-lg font-medium break-all">info@akwabahairbraiding.com</span>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow flex items-center gap-2 md:gap-6 p-4 md:p-6">
                <ion-icon class="text-4xl lg:text-5xl text-green-900" name="call"></ion-icon>
                <div class="flex flex-col gap-1">
                    <span class="text-gray-500">Phone</span>
                    <span class="text-lg font-medium">(703) 313-0046 / (630) 518-1313</span>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow flex items-center gap-2 md:gap-6 p-4 md:p-6">
                <ion-icon class="text-5xl text-green-900" name="location"></ion-icon>
                <div class="flex flex-col gap-1">
                    <span class="text-gray-500">Address</span>
                    <span class="text-lg font-medium">6145 Franconia Rd, Alexandria Virginia 22310</span>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact info -->

@include('include.open')
@include('include.map')
@include('include.footer')
