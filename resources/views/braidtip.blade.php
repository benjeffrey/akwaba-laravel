@include('include.head')

@include('include.header')

<section class="bg-green-950 p-4 md:p-16 lg:p-[100px]">
        <br>
        <div class="text-white flex flex-col md:flex-row justify-between mb-8 md:mb-[50px]">
            <h1 class="text-4xl lg:text-6xl font-bold mb-4">Some Braids Care Tips</h1>
            <p class="md:text-xl max-w-[450px] md:text-right font-medium">Just as a well-tended garden leads to a healthy crop, a well-groomed scalp leads to longer, healthier hair. </p>
        </div>
        <div class="grid md:grid-cols-3 gap-2 pb-16">
            <p class="md:text-xl max-w-[450px] font-medium text-white">More and more African American women are choosing braids over the press, curl, and perm.</p>  
            <p class="md:text-xl max-w-[450px] font-medium text-white md:pt-28"> The majority of braiding styles now use hair extensions. </p>
            <p class="md:text-xl max-w-[450px] font-medium text-white">To maintain braids of this kind for the longest time possible, here are some suggestions.</p>
        </div>
        <div class="grid md:grid-cols-2 items-center">
            <div class="relative">
                <img src="./img/side-view-woman-styling-hair.jpg" alt="">
                <span class="absolute top-[20%] left-[50%] text-xl md:text-3xl text-center w-3/4 font-black text-white translate-x-[-50%] bg-green-950/75 p-2">Wrapping the hair at night</span>
            </div>
            <div class="p-8">
                <h2 class="text-xl md:text-3xl font-black text-white">Wrapping the hair at night</h2><br>
                <p class="md:text-2xl text-white">
                    While sleeping at night, it is advisable to wear a cap or wrap the hair with a scarf to keep it in place as much as possible.  <br><br>
                    In this way, your tossing and turning will not pull on or tangle the braids.  In the morning, once the cap or wrap is removed, the braids hair can be styled with ease.
                </p>
            </div>
        </div>
        <div class="grid md:grid-cols-2 items-center">
            <div class="relative md:order-2">
                <img src="./img/woman-giving-herself-scalp-massage.jpg" alt="">
                <span class="absolute top-[20%] left-[50%] text-xl md:text-3xl text-center w-3/4 font-black text-white translate-x-[-50%] bg-green-950/75 p-2">Washing</span>
            </div>
            <div class="p-8">
                <h2 class="text-xl md:text-3xl font-black text-white">Washing</h2><br>
                <p class="md:text-2xl text-white">
                    While it is generally recommended that braided hair should not be shampoo washed for at least 7 days after the braids are set (some women are comfortable extending this period much longer). <br><br>
                    This allows the braids to maintain their setting.  However, after some time, you will experience a definite need to clean your scalp and ease itching. 
                    Braided hair and scalp can be washed with regular shampoo and conditioner, and the scalp treated with hair jell available from beauty shops.
                </p>
            </div>
        </div>
        <div class="grid md:grid-cols-2 items-center">
            <div class="relative">
                <img src="./img/child-getting-their-hair-blown-salon.jpg" alt="">
                <span class="absolute top-[20%] left-[50%] text-xl md:text-3xl text-center w-3/4 font-black text-white translate-x-[-50%] bg-green-950/75 p-2">Touch-ups</span>
            </div>
            <div class="p-8">
                <h2 class="text-xl md:text-3xl font-black text-white">Touch-ups</h2><br>
                <p class="md:text-2xl text-white">
                    The first braids to loosen are those around the front and sides of the scalp where the hair tends to be short and does not adhere firmly with the extensions. <br><br>
                    Most hair braiding stylists will provide a "touch-up" service to their customers to restore loosening braids. 
                    Generally, this service is provided if the braids have been in place for two to three weeks.
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-white text-xl">
        </div>
    </section>

    <hr class="md:hidden">

    <!-- open time -->
    <!-- @include('include/open') -->
    <!-- end open time -->

@include('include.footer')