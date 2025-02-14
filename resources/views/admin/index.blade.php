<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has('success'))
                <x-alert message="{{ session('success') }}" />
            @endif

            {{-- list --}}
            <div class="flex flex-row justify-between items-center p-3">
                <h1 class="font-bold text-lg">List Buku</h1>
                <a href="{{ route('admin.create') }}"
                    class="px-5 py-2 rounded-md font-bold bg-green-600 text-white">Tambah Buku</a>
            </div>
            <div class="grid grid-cols-3 justify-between items-center my-5 gap-5">
                @foreach ($buku as $bukus)
                    <div class="flex flex-col p-5 border-2 border-solid bg-slate-200 rounded-md">
                        <div class="h-80 w-full overflow-hidden">
                            <img src="{{ asset('storage/' . $bukus->gambar) }}" alt=""
                                class="h-full w-full object-cover">

                        </div>
                        <div class="my-5">
                            <h1 class="font-bold">{{ $bukus->judul_buku }}</h1>
                            <h1 class="font-bold text-gray-400">{{ $bukus->penulis }}</h1>

                        </div>
                        <a href="{{ route('admin.edit', $bukus) }}"
                            class="w-full text-center p-2 rounded-md font-bold text-white bg-green-600">Edit</a>
                    </div>
                @endforeach
            </div>

            <div class="my-5">
                {{ $buku->links() }}
            </div>
        </div>
    </div>
</x-admin-layout>
