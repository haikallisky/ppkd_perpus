<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['id_anggota', 'no_transaksi', 'id_peminjam', 'id_buku', 'tanggal_pinjam', 'tanggal_pengembalian', 'keterangan'];
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class,'id');
    }
}
