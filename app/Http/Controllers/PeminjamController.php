<?php

namespace App\Http\Controllers;

use App\Models\Peminjam;
use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    public function peminjam()
    {

    }

    public function tambah_peminjaman()
    {
        $kode_transaksi = Peminjam::orderBy('id', 'desc')->first();
        $huruf = "TR";
        $urutan = $kode_transaksi->id;
        $urutan++;

        $kode_transaksi = $huruf . date("dmY") . sprintf("%03s", $urutan);

        return $kode_transaksi;
    }

    public function show_peminjaman($id)
    {

    }

    public function delete_peminjaman($id)
    {

    }

    public function detail_peminjam()
    {

    }
}
