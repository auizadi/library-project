<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-row justify-between items-center ">
                <h1 class="font-bold text-lg">Edit Buku</h1>
                @include('admin.partials.delete')
            </div>

            <div class="my-5" x-data="{ imageUrl: '/storage/{{ $buku->gambar }}' }">
                <form method="POST" enctype="multipart/form-data" action="{{ route('admin.edit', $buku) }}"
                    class="flex items-center justify-center gap-8">
                    @csrf
                    @method('PUT')
                    <div class="w-1/2">

                        <img :src="imageUrl" alt="" class="w-full rounded-md ">
                    </div>
                    <div class="w-1/2">
                        <div class="my-3">
                            <x-input-label for="gambar" :value="__('Gambar')" />
                            <x-text-input accept="image/*" id="gambar" class="block mt-1 w-full" type="file"
                                name="gambar" :value="$buku->gambar" autofocus autocomplete="gambar"
                                @change="imageUrl = URL.createObjectURL($event.target.files[0])" />
                            <x-input-error :messages="$errors->get('gambar')" class="mt-2" />
                        </div>
                        <div class="my-3">
                            <x-input-label for="judul_buku" :value="__('Judul Buku')" />
                            <x-text-input id="judul_buku" class="block mt-1 w-full" type="text" name="judul_buku"
                                :value="$buku->judul_buku" required autofocus autocomplete="judul_buku" />
                            <x-input-error :messages="$errors->get('judul_buku')" class="mt-2" />
                        </div>
                        <div class="my-3">
                            <x-input-label for="penerbit" :value="__('Penerbit')" />
                            <x-text-input id="penerbit" class="block mt-1 w-full" type="text" name="penerbit"
                                :value="$buku->penerbit" required autofocus autocomplete="penerbit" />
                            <x-input-error :messages="$errors->get('penerbit')" class="mt-2" />
                        </div>
                        <div class="my-3">
                            <x-input-label for="penulis" :value="__('Penulis')" />
                            <x-text-input id="penulis" class="block mt-1 w-full" type="text" name="penulis"
                                :value="$buku->penulis" required autofocus autocomplete="penulis" />
                            <x-input-error :messages="$errors->get('penulis')" class="mt-2" />
                        </div>
                        <div class="my-3">
                            <x-input-label for="tahun_terbit" :value="__('Tahun Terbit')" />
                            <x-text-input id="tahun_terbit" class="block mt-1 w-full" type="date" name="tahun_terbit"
                                :value="$buku->tahun_terbit" required autofocus autocomplete="tahun_terbit" />
                            <x-input-error :messages="$errors->get('tahun_terbit')" class="mt-2" />
                        </div>
                        <div class="my-3">
                            <x-input-label for="stok" :value="__('Stok')" />
                            <x-text-input id="stok" class="block mt-1 w-full" type="number" name="stok"
                                :value="$buku->stok" required autofocus autocomplete="stok" />
                            <x-input-error :messages="$errors->get('stok')" class="mt-2" />
                        </div>
                        <div class="my-3">
                            <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                            <x-text-area id="deskripsi" class="block mt-1 w-full" type="text"
                                name="deskripsi">{{ $buku->deskripsi }}</x-text-area>
                            <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                        </div>
                        {{-- tombol --}}
                        <x-primary-button class="justify-center w-full mt-4">
                            {{ __('Submit') }}
                        </x-primary-button>
                    </div>




                </form>
            </div>
        </div>

    </div>
</x-admin-layout>
