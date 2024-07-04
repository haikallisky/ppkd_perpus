<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\detail_Peminjam;
use App\Models\Peminjam;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Peminjam::get();
        // $detail_peminjam = detail_Peminjam::get();
        return view('peminjam.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $anggota = Anggota::get();
        $buku = Buku::get();
        $max = peminjam::get()->max('id');
        $title = "Tambah Peminjam";
        return view('peminjam.create', compact('title', 'anggota', 'buku', 'max'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $peminjam = Peminjam::create([
            'id_anggota' => $request->id_anggota,
            'no_transaksi' => $request->no_transaksi,

        ]);


        detail_Peminjam::created([
            'id_peminjam' => $request->id_peminjam,
            'id_buku' => $request->id_buku,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
        ]);

        return redirect()->to('admin/peminjam')->with('message', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = detail_Peminjam::where('id_peminjam', $id);
        return view('peminjam.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $edit = detail_Peminjam::find($id);

        Peminjam::where('id', $id)->update([
            'nama_anggota' => $request->nama_anggota,
            'email' => $request->email,
            'no_tlp' => $request->no_tlp,
        ]);

        return redirect()->to('admin/peminjam')->with('message', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Peminjam::where('id', $id)->delete();
        return redirect()->to('admin/peminjam')->with('message', 'Data Berhasil Dihapus');
    }
};
