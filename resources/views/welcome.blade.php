
    @include('include.head')
    @include('include.header')
        <!-- home image -->
    <section class="bg-green-950 pb-1 lg:p-8 xl:p-[100px]">
        <div class="m-auto">
            <div class="relative ">
                <img src="./img/banner-image.jpg" alt="akwaba home image" class="md:rounded-t-2xl border-white">
                <!--  <span class="text-transparent" style="-webkit-text-stroke: 5px #fff;"> -->
                <h1 class="absolute top-[50%] left-[50%] text-4xl md:text-[110px] xl:text-[90px] text-center w-3/4 font-black text-white translate-x-[-50%] translate-y-[-50%] leading-tight">Walk  in welcome</h1>            
            </div>
            <div class="bg-white grid grid-cols-2 gap-4 md:flex justify-around items-center p-4 md:p-[60px] md:rounded-b-2xl">
                <p class="md:text-[30px] font-semibold">Where care meets <br> trusted service</p>
                <div><span class="text-xl md:text-3xl lg:text-[50px] font-bold">12.4m+</span><br><span>Client Trust</span></div>
                <div><span class="text-xl md:text-3xl lg:text-[50px] font-bold">15+Yrs</span><br><span>of Excellence</span></div>
                <div><span class="text-xl md:text-3xl lg:text-[50px] font-bold">99.99%</span><br><span>Client Satisfaction</span></div>
            </div>
        </div>
    </section>

    <!-- service section -->
    @include('include.service')
    <!-- end service section -->

    <!-- email section -->
    @include('include.email')
    <!-- end email section -->

    <!-- tips section -->
     @include('include.tips')
    <!-- end tips section -->

    <!-- comment section-->
    @include('include.comment')
    <!-- end comment section -->

    <!-- contact info -->
     @include('include.contact')
    <!-- end contact info -->

    <!-- map -->
     @include('include.map')
    <!-- end map -->
     
    <!-- footer -->
    @include('include.footer')
    <!-- end footer -->