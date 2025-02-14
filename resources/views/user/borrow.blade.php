<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Borrow</title>
</head>

<body class="bg-[#726eeb]">
    <div class="navbar  bg-[#5a56e9] sticky top-0">
        <div class="navbar flex flex-row justify-between mx-5 items-center p-3">
            <div class="logo text-white flex flex-col justify-center items-center">
                <img src="{{ asset('open-book.png') }}" alt="book" class="w-8 h-8">
                <h1 class="text-md font-bold">Perpustakaan</h1>
            </div>
            <div class="menu flex flex-row gap-10 text-white font-medium">
                <a href="{{ route('landing') }}">Home</a>
            </div>

        </div>
    </div>
    <div class="feature-search flex justify-end gap-5 items-center m-10">
        <form action="" method="GET">
            <input type="text" name="keyword" id="keyword" class="bg-white rounded-md p-2" placeholder="Cari buku...">
            <input type="submit" name="submit" value="search" id="submit" class="bg-gray-400 rounded-md text-white p-2">
        </form>
    </div>
    <div class="grid grid-cols-5 justify-center items-center m-10 gap-5">

        @foreach ($bukus as $buku)
            <div class="flex flex-col p-5  bg-slate-200 rounded-md">
                <div class=" h-40 w-40 overflow-hidden">
                    <img src="{{ asset('storage/' . $buku->gambar) }}" alt=""
                        class="h-40 w-40 object-cover flex justify-center items-center">

                </div>
                <div class="my-5">
                    <h1 class="font-bold">{{ $buku->judul_buku }}</h1>
                    <h1 class="font-bold text-gray-400">{{ $buku->penulis }}</h1>

                </div>
                <a href="" class="w-full text-center p-2 rounded-md font-bold text-white bg-green-600">Pinjam</a>
            </div>
        @endforeach
    </div>
</body>

</html>
