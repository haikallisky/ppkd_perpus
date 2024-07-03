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
        $detail_peminjam = detail_Peminjam::get();
        return view('transaksi.index', compact('datas', 'detail_peminjam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $anggota = Anggota::get();
        $buku = Buku::get();
        $title = "Tambah Peminjam";
        return view('transaksi.create', compact('title', 'anggota', 'buku'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Peminjam::create([
            'id_anggota' => $request->id_anggota,
            'no_transaksi' => $request->no_transaksi,
            'nama_anggota' => $request->nama_anggota,
            'nama_buku' => $request->nama_buku,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
        ]);
        return redirect()->to('admin/transaksi')->with('message', 'Data Berhasil Ditambah');
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
        return view('transaksi.edit', compact('edit'));
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
        return redirect()->to('admin/transaksi')->with('message', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Peminjam::where('id', $id)->delete();
        return redirect()->to('admin/transaksi')->with('message', 'Data Berhasil Dihapus');
    }

    //

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
