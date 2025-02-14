<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Buku extends Model
{
    //
    use HasFactory, Searchable;
    protected $fillable = [
        'judul_buku',
        'penerbit',
        'penulis',
        'tahun_terbit',
        'deskripsi',
        'gambar',
        'stok',
    ];

    public function toSearchableArray()
    {
        return [
            'judul_buku'=>$this->judul_buku,
            'penulis'=>$this->penulis,
            'penulis'=>$this->penulis,

        ];
    }
}
