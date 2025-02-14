<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    //
    public function index(){
        $buku = Buku::paginate(6);
        return view('admin.index', compact('buku'));

    }
    public function create(){
        return view('admin.create');
    }
    public function store(Request $request){
        // dd($request);
        // return view('admin.store');
        $request->validate([
            'judul_buku'=> 'required',
            'penerbit' => 'required',
            'stok' => 'required',
            'tahun_terbit' => 'required',
            'penulis' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public', $gambar->hashName());
        Buku::create([
            'judul_buku' => $request->judul_buku,
            'penerbit' => $request->penerbit,
            'stok' => $request->stok,
            'tahun_terbit' => $request->tahun_terbit,
            'penulis' => $request->penulis,
            'gambar' => $gambar->hashName()
        ]);

        return redirect()->route('admin.index')->with('success', 'Berhasil menambahkan buku');
    }

    public function edit(Buku $buku) {
        return view('admin.edit', compact('buku'));
    }

    public function update(Request $request, Buku $buku){
        $request->validate([
            'judul_buku' => 'required',
            'penerbit' => 'required',
            'stok' => 'required',
            'tahun_terbit' => 'required',
            'penulis' => 'required',
        ]);

        $buku->judul_buku = $request->judul_buku;
        $buku->penerbit = $request->penerbit;
        $buku->stok = $request->stok;
        $buku->tahun_terbit = $request->tahun_terbit;

        if ($request->file('gambar')) {
            # code...
            if ($buku->gambar !== 'image.jpg') {
                Storage::disk('local')->delete('public/' . $buku->gambar);
            }            $gambar = $request->file('gambar');
            $gambar->storeAs('public',
                $gambar->hashName()
            );
            $buku->gambar = $gambar->hashName();
        }
        $buku->update();
        return redirect()->route('admin.index')->with('success', 'Berhasil mengedit buku');

    }

    public function destroy(Buku $buku){
        if ($buku->gambar !== 'image.jpg'){
            Storage::disk('local')->delete('public/'. $buku->gambar);
        }
        $buku->delete();
        return redirect()->route('admin.index')->with('success', 'Berhasil menghapus buku');

    }
}
