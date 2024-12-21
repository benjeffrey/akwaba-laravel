@include('include.head')

@include('include.header')

<section class="m-4 mt-10 md:m-16 xl:m-[100px]">
        <div>
            <h2 class="text-3xl md:text-5xl font-bold text-green-950 text-center">Explore Our Hair Gallery</h2> <br>
            <p class="text-xl md:text-2xl xl:w-8/12 mx-auto text-center">Welcome to our hair gallery, where we showcase our latest and most creative hairstyles crafted by our talented stylists. Browse through our collection of images to get inspired for your next hairstyle.</p> <br>
        </div>
        <!-- <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-8"> -->

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @if($total > 0)
                @foreach($chunks as $chunk)
                    <div class="grid gap-4">
                    @foreach($chunk as $p)
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src= "{{ asset('uploads/'.$p['name']) }}" alt="">
                            <!-- <form method="POST" action="{{ route('picture_delete', ['id' => $p['id']]) }}" class="inline" onsubmit="return confirm('Are you sure you want to delete this email?');">
                                @csrf
                                <button type="submit" class="font-medium text-red-600 hover:underline">
                                    Delete
                                </button>
                            </form> -->
                        </div>
                        @endforeach
                    </div>
                @endforeach
                @else
                <div class="col-span-2 md:col-span-4 flex flex-col items-center justify-center p-4">
                    <div class="w-full flex justify-center">
                        <img src="{{ asset('img/notfound.svg') }}" alt="No photos found" class="w-full max-w-xs mx-auto h-auto">
                    </div>
                    <p class="mt-4 text-xl text-gray-700 text-center">No Photos In Gallery For Now...</p>
                </div>
                @endif
            </div>

        <div class="w-fit mx-auto my-8"> 
            <button class="bg-green-900 text-white p-2 px-16 text-xl font-bold rounded-lg hover:bg-green-800">More</button>
        </div>

    </section>

    <!-- open time -->
    @include('include/open')
    <!-- end open time -->

@include('include.footer')