<!DOCTYPE html>
<html lang="en">
@include('../include.head')
<body>
    <section>
        <div class="p-8 md:p-0">
            <h2 class="text-center font-bold text-xl mb-5 text-red-700 bg-red-200"> <?php if(isset($_GET['error'])) echo 'you need to login first' ?> </h2>
            <form method="POST" action="{{ route('login') }}" class="max-w-sm mx-auto">
                @csrf
                <div>
                    <img class="my-8 w-fit mx-auto" src="../img/Akwaba-Hair-Braiding-LogoWhiteLogo.png" alt="Akwaba-Hair-Braiding-LogoWhiteLogo">
                    <h1 class="text-center font-bold text-3xl mb-5 text-green-900 ">Log in</h1>
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-green-500 focus:border-green-500 block w-full p-2.5" placeholder="name@flowbite.com"  />
                    </div>
                    <div class="mb-5">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Your password</label>
                    <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-green-500 focus:border-green-500 block w-full p-2.5"  />
                </div>
                <h3 class="text-center text-red-500 p-2">
                    @if ($errors->any())
                        {{ implode('', $errors->all(':message')) }}
                    @endif
                    @if (session()->has('error'))
                        {{ session('error') }}
                    @endif
                </h3>
                <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded text-sm w-full px-5 py-2.5 text-center">Submit</button>
            </form>
        </div>
    </section>
</body>
</html>