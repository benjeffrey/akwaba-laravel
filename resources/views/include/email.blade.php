        @if(session('success'))
            <div class="flex items-center p-4 text-green-800 rounded-lg bg-green-50 w-10/12 mx-auto my-4" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">{{session('success')}}</div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 " data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                </button>
            </div>
        @endif

    <section class="p-4 md:p-16 xl:p-[100px] md:my-[100px] bg-gray-50">
        <div class="grid md:grid-cols-2  md:items-start flex-col md:flex-row"> 
            <h2 class="text-2xl md:text-5xl lg:text-6xl font-bold text-green-950">Subscribe Newsletter <br> & Get Latest News</h2>
            <form class="w-full md:px-8 py-2" method='POST' action="{{route('email')}}">
                @csrf
                <label for="email-address-icon" class="block mb-2 text-xl font-medium text-gray-900">Your Email</label>
                <div>
                    <input type="text" name="email" id="email-address-icon" class="bg-white p-4 text-lg rounded-md shadow w-full" placeholder="name@example.com">
                </div>
                @error('email')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                @enderror
                <button class="bg-green-900 my-4 py-2 px-12 text-white rounded-md font-medium">send</button>
            </form>
        </div>
    </section>