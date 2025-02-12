<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/998802c292.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Perpustakaan</title>
</head>

<body>
    {{-- Hero --}}
    <div class="min-h-screen bg-[#5a56e9] rounded-b-xl p-4 " style="border-radius: 0 0 100px 100px">
        <div class="navbar flex flex-row justify-between items-center p-3">
            <div class="logo text-white flex flex-col justify-center items-center">
                <img src="{{ asset('open-book.png') }}" alt="book" class="w-8 h-8">
                <h1 class="text-md font-bold">Perpustakaan</h1>
            </div>
            <div class="menu flex flex-row gap-10 text-white font-medium">
                <a href="/">Home</a>
                <a href="/">About us</a>
                <a href="/">Contact</a>

            </div>
            <div class="">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ route('dashboard') }}" class="text-white me-5 font-semibold">Dashboard</a>
                    @endauth
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="rounded-md px-5 py-2 border-2 border-white border-solid font-medium text-white">Register</a>
                    @endif

                @endif
            </div>
        </div>

        <div class="flex flex-col justify-center items-center gap-5 mt-20">
            <h1 class="text-6xl  text-white font-bold text-center">Expand your mind reading a <br>reading a book</h1>
            <p class="text-xl text-center font-light text-white">"The more that you read, the more things you will know.
                The more that <br>you learn, the more place you'll go.</p>
            <div class="flex flex-row justify-center items-center gap-3">
                <a href="{{ route('login') }}"
                    class="rounded-md px-5 py-2 bg-white border-2 border-white text-[#0057ff] font-medium">Login</a>
                <a href=""
                    class="rounded-md px-5 py-2  border-2 border-white border-solid text-white font-medium">Borrow
                    Book</a>

            </div>
        </div>

    </div>
    {{-- about us --}}
    <div class="max-h-screen  flex flex-row justify-center items-center gap-10 mt-10 p-10">
        <div class="">
            <h1 class="text-5xl font-bold">What People Say <br>About The <span class="text-[#5a56e9]">Book
                    <br>Inspiration Library</span> </h1>
            <p class="my-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit velit explicabo
                voluptas, eveniet atque similique, sint soluta perspiciatis,br ut maxime et earum repellendus! <br> Fuga
                perspiciatis cum voluptates beatae ex sequi, autem voluptate veniam et! Beatae sed ab officia
                necessitatibus temporibus quas. Hic quisquam consequuntur<br> doloremque qui veritatis adipisci esse
                magnam!</p>
            <a href="/"
                class="border-2 border-[#5a56e9] rounded-md font-normal border-solid text-[#5a56e9] px-5 py-2">Read
                More</a>
        </div>
        <div>
            <img src="{{ asset('undraw_bibliophile_sbt0.png') }}" alt="book" class="">
        </div>

    </div>

    {{-- footer --}}
    <div class="bg-[#5a56e9] px-10 pt-10  mt-10 ">
        <div class="flex flex-row justify-between items-start  gap-5 mb-10">
            <div class="flex flex-col gap-4">
                <h1 class="font-bold text-white">Book Inspirations</h1>
                <h1 class="text-white ">Newsletters Sign Up</h1>
                <p class="text-white">Sign Up For Least News & Offers</p>
                <input type="email" placeholder="Your Email Address" class="rounded-md px-3 py-2">
            </div>
            <div class="flex flex-col gap-4">
                <h1 class="font-bold text-white">Services</h1>
                <a href="" class="text-white">New Arrivals</a>
                <a href="" class="text-white">About Us</a>
                <a href="" class="text-white">Client's Reviews</a>
            </div>
            <div class="flex flex-col gap-4">
                <h1 class="font-bold text-white">About Us</h1>
                <a href="" class="text-white">Client's Reviews</a>
                <a href="" class="text-white">Team Members</a>
            </div>
            <div class="flex flex-col gap-4">
                <h1 class="text-white font-bold">Contact Us</h1>
                <a href="" class="text-white ">+92332233992</a>
                <a href="" class="text-white">library@mail.com</a>

            </div>
        </div>
        <hr class="text-white">
        <p class="text-center p-2 text-white">Copyright library All right reserved.</p>

    </div>

</body>

</html>
