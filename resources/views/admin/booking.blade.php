<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/img/Akwaba-icon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home | Akwaba hair braiding</title>
</head>
<body>
    <div class="flex min-h-screen bg-slate-50 relaive mb-12 md:mb-0">
    <aside class="h-screen w-72 border-r bg-gray-50 hidden xl:flex flex-col gap-8 fixed z-10"> 
            <div class="px-8 pt-24 pb-0 flex items-center gap-3">
                <div class="bg-cover bg-center w-16 h-16 rounded-full" style="background-image: url('../img/hairstyle-tools.jpg')"></div>
                <div class="flex flex-col">
                    <span class="text-xl font-bold" >Administrator</span>
                    <span class="text-gray-500">Error(email)</span>
                </div>
            </div>
            
            <form method="POST" action="{{ route('logout') }}" class="px-8">
                @csrf
                <button type="submit" class="w-full text-center bg-green-500/50 text-green-800 p-2 font-bold rounded">Log Out</button>
            </form>
            
            <hr class="mx-8">
            <div class="flex justify-center w-full">
                <ul class="flex flex-col gap-4 text-xl font-semibold w-full">
                    <li class="hover:bg-green-200 p-3 px-16"><a href="./dashboard" class="flex gap-4 items-center">
                        <ion-icon name="home-outline"></ion-icon>
                        Dashboard</a></li>
                    <li class="hover:bg-green-200 p-3 px-16 border-r-4 border-green-800 text-green-800 "><a href="./booking" class="flex gap-4 items-center">
                        <ion-icon class="" name="file-tray-full-outline"></ion-icon>
                        Booking</a></li>
                    <li class="hover:bg-green-200 p-3 px-16 "><a href="./gallery" class="flex gap-4 items-center">
                        <ion-icon  class="" name="images-outline"></ion-icon>
                        Gallery</a></li>
                    <li class="hover:bg-green-200 p-3 px-16 "><a href="./email" class="flex gap-4 items-center">
                        <ion-icon class="" name="mail-outline"></ion-icon>
                        Email</a></li>
                    <li class="hover:bg-green-200 p-3 px-16 "><a href="./booking_history" class="flex gap-4 items-center">
                        <ion-icon class="" name="time-outline"></ion-icon>
                        Past Books</a></li>
                </ul>
            </div>
        </aside>
        <!-- buttom nav -->
        <nav class="xl:hidden fixed bottom-0 z-30 bg-slate-50 border w-full">
            <ul class="grid grid-cols-4 gap-4 md:gap-8 text-xs w-fit mx-auto px-6">
                <li class=""><a href="./dashboard" class="flex flex-col justify-center items-center hover:text-green-900  py-3">
                    <ion-icon class="text-3xl" name="home-outline"></ion-icon>
                    <span>Dashboard</span></a></li>
                <li class=""><a href="./booking" class="flex flex-col justify-center items-center hover:text-green-900 text-green-900 border-b-4 border-green-900  py-3">
                    <ion-icon class="text-3xl" name="file-tray-full-outline"></ion-icon>
                    <span>Booking</span></a></li>
                <li class=""><a href="./gallery" class="flex flex-col justify-center items-center hover:text-green-900  py-3">
                    <ion-icon class="text-3xl" name="images-outline"></ion-icon>
                    <span>Gallery</span></a></li>
                <li class=""><a href="./email" class="flex flex-col justify-center items-center hover:text-green-900  py-3">
                    <ion-icon class="text-3xl" name="mail-outline"></ion-icon>
                    <span>Email</span></a></li>
            </ul> 
        </nav>
        <section class="p-4 md:px-8 lg:px-20 xl:ml-72 w-full ">
            <!-- header -->
            <header class="mt-5 flex justify-between w-full relative">
                <div class="w-8/12 flex items-center">
                    <img src="../img/Akwaba-Hair-Braiding-LogoWhiteLogo.png" alt="">
                </div>
                <div>
                    <ion-icon onclick="Menu(this)" class="xl:hidden text-2xl bg-gray-100 p-3 border rounded" name="menu" id="ham-menu"></ion-icon>
                </div>
                <div class="hidden xl:flex items-center gap-4">
                    <div class="flex flex-col text-right">
                        <span class="text-gray-500 text-xs">Today's Date</span>
                        <span class="font-semibold text-xl" id="currentDate"></span>
                    </div>
                    <button>  <!-- open button -->
                        <ion-icon class="text-2xl bg-gray-100 p-3 border rounded" name="calendar-outline"></ion-icon>
                    </button>
                </div>
            </header>
            <!-- hamburege -->
            <div>
                <div id="screen" class="xl:hidden absolute bg-gray-100 border right-4 z-40 -top-[400px] p-8 h-fit shadow-lg transition-all ease-in duration-500" id="off-screen-menu">
                    <div class="flex flex-col gap-8 ">
                        <div class=" flex items-center gap-3">
                            <div class="bg-cover bg-center w-16 h-16 rounded-full" style="background-image: url('../img/hairstyle-tools.jpg')"></div>
                            <div class="flex flex-col">
                                <span class="text-xl font-bold" >Administrator</span>
                                <span class="text-gray-500">Error(email)</span>
                            </div>
                        </div>
                        
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-center bg-green-500/50 text-green-800 p-2 font-bold rounded">Log Out</button>
                        </form>
                        
                    </div>
                </div>
            </div>
            <!-- main -->
            <main class="my-8">
                <div>
                    <p class="text-lg my-4 font-medium">All Appointments ({{$total}})</p>
                    @if(session('success'))
                        {!!session('success')!!}
                    @endif
                    <div class="relative overflow-x-auto">
                     <table class="w-full text-lg text-left rtl:text-right text-gray-500 shadow-xl rounded border">
                        <thead class="text-base text-gray-700 uppercase bg-white  border-b-4 ">
                            <tr>
                                <th scope="col" class="px-4 py-3 whitespace-nowrap"> No </th>
                                <th scope="col" class="px-4 py-3 whitespace-nowrap"> Clients Name </th>
                                <th scope="col" class="px-4 py-3 whitespace-nowrap"> Phone </th>
                                <th scope="col" class="px-4 py-3 whitespace-nowrap"> Date(y/m/d) </th>
                                <th scope="col" class="px-4 py-3 whitespace-nowrap"> Time </th>
                                <th scope="col" class="px-4 py-3 whitespace-nowrap"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($booking as $b)
                            <tr class="bg-white border-b hover:bg-slate-50">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">{{ ($booking->currentPage() - 1) * $booking->perPage() + $loop->index + 1 }}</th>
                            <td class="px-4 py-3 whitespace-nowrap">{{$b['name']}} </td>
                            <td class="px-4 py-3 whitespace-nowrap"><a href="tel:$b['phone']">{{$b['phone']}} </a></td>
                            <td class="px-4 py-3 whitespace-nowrap">{{$b['date']}} </td>
                            <td class="px-4 py-3 whitespace-nowrap">{{$b['time']}} </td>
                            <td class="px-4 py-3 flex gap-4">
                            <form method="POST" action="{{route('booking.approve', ['id' => $b['id']])}}">
                                @csrf
                                <button onclick=" return save();" class="font-medium text-green-600 hover:underline">Approve</button>
                            </form>
                            <form method="POST" action="{{route('booking.delete', ['id' => $b['id']])}}">
                                @csrf
                                <button onclick="return del();" class="font-medium text-red-600 hover:underline">Delete</button>
                            </form>
                            </td>
                            </tr>
                            @endforeach
                            @if($total == 0)
                                <tr>
                                <td colspan="5">
                                <br><br><br><br>
                                <center>
                                <img src="../img/notfound.svg" width="10%">
                                
                                <br>
                                <p class="heading-main12" style="margin-left: 45px;font-size:20px;color:rgb(49, 49, 49)">No Booking Here For Now...</p>
                                </a>
                                </center>
                                <br><br><br><br>
                                </td>
                                </tr>
                            @endif
                            
                        </tbody>
                    </table>
                    </div>
                    <!-- <button class="mx-auto w-full m-2 p-3 bg-green-900 text-white font-semibold rounded hover:bg-green-800 "> Show all Appointments</button> -->
                </div>
            </main>
        </section>
    </div>
    <script>
        function del(){
            return confirm("Confirm deletion?");
        }
        function save(){
            return alert("approve book?");
        }

        document.addEventListener('DOMContentLoaded', function() {
            var today = new Date();
            var day = String(today.getDate()).padStart(2, '0');
            var month = String(today.getMonth() + 1).padStart(2, '0');
            var year = today.getFullYear();
            // Format the date as desired (e.g., "MM/DD/YYYY")
            var formattedDate = month + '-' + day + '-' + year;
            // Display the formatted date in the <span> element
            document.getElementById('currentDate').textContent = formattedDate;
        });

        function Menu(e){
            let list = document.getElementById("screen");
            e.name === 'menu' ? (e.name = "close", list.classList.add('top-[90px]')) : (e.name = "menu", list.classList.remove('top-[90px]'))
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>