<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $fillable = ['nama_buku', 'penerbit', 'qty', 'deskripsi', 'penulis', 'genre', 'tahun'];
    public function buku()
    {
        return $this->belongsTo(Buku::class,'id');
    }
}
