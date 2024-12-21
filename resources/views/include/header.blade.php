<!-- navigation bar -->
<nav class="bg-green-950 p-2 py-4 md:p-5 text-white flex justify-between md:justify-around items-center">
        <a href="./"><img class="w-32 md:w-auto" src="./img/Akwaba-Hair-Braiding-LogoWhiteLogo.png" alt="Akwaba icon"></a>
        <ul class="hidden lg:flex bg-green-900 space-x-4 xl:space-x-8 rounded-full p-1 px-4 items-center order-last md:order-none">
            <li class="bg-green-950 p-1 px-2 rounded-full"><a href="./">Home</a></li>
            <li class="hover:bg-green-950 p-1 px-2 rounded-full"><a href="./services">Services</a></li>
            <li class="hover:bg-green-950 p-1 px-2 rounded-full"><a href="./gallery">Gallery</a></li>
            <li class="hover:bg-green-950 p-1 px-2 rounded-full"><a href="./braidtip">Braids Care Tips</a></li>
            <li class="hover:bg-green-950 p-1 px-2 rounded-full"><a href="./about">About us</a></li>
            <li class="hover:bg-green-950 p-1 px-2 rounded-full"><a href="./contact">Contact us</a></li>
        </ul>
        <div class="flex">
            <a class="hidden lg:block bg-white text-black py-2 px-4 rounded-lg font-medium" href="./book">Book now</a>
            <a class="hidden lg:block bg-red-400 text-white py-2 px-4 rounded-lg font-medium ml-5" href="{{route('login')}}">Admin</a>
            <button class="lg:hidden"><ion-icon onclick="Menu(this)" class="text-5xl text-right pr-4" name="menu"></ion-icon></button>
        </div>
    </nav>
    <div id="screen" class="lg:hidden bg-green-950 w-full text-white z-40 absolute p-4 -top-[500px] transition-all ease-in duration-500">
        <ul class="text-center text-xl ">
            <li class="py-3.5 underline underline-offset-8"><a href="./">Home</a></li>
            <li class="py-3.5"><a href="./services">Services</a></li>
            <li class="py-3.5"><a href="./gallery">Gallery</a></li>
            <li class="py-3.5"><a href="./braidtip">Braids Care Tips</a></li>
            <li class="py-3.5"><a href="./about">About us</a></li>
            <li class="py-3.5"><a href="./contact">Contact us</a></li>
        </ul>
        <div class="my-4 flex items-center justify-center">
            <a class="inline-block text-xl w-44 mx-auto bg-white text-center text-black py-2 px-4 rounded-lg font-bold" href="./book">Book now</a>
        </div>
    </div>

