<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailPeminjam extends Model
{
    use HasFactory;
  
    protected $fillable = ['id_peminjam', 'id_buku', 'tanggal_pinjam', 'tanggal_pengembalian', 'keterangan'];
    // public function peminjam()
    // {
    //     return $this->belongsTo(Peminjam::class,'id');
    // }
    // public function buku()
    // {
    //     return $this->belongsTo(Buku::class,'id');
    // }
}
