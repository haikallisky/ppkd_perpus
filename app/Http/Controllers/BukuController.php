<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Buku::get();
        return view('buku.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Data Buku";
        return view('buku.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Buku::create([
            'nama_buku' => $request->nama_buku,
            'penerbit' => $request->penerbit,
            'qty' => $request->qty,
            'deskripsi' => $request->deskripsi,
            'penulis' => $request->penulis,
            'genre' => $request->genre,
            'tahun' => $request->tahun,
        ]);
        return redirect()->to('admin/buku')->with('message', 'Data Berhasil Ditambah');
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
        $edit = Buku::find($id);
        $title = "Edit Data" . $edit->name;
        return view('buku.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $edit = Buku::find($id);
        Buku::where('id', $id)->update([
            'nama_buku' => $request->nama_buku,
            'penerbit' => $request->penerbit,
            'qty' => $request->qty,
            'deskripsi' => $request->deskripsi,
            'penulis' => $request->penulis,
            'genre' => $request->genre,
            'tahun' => $request->tahun,
        ]);
        return redirect()->to('admin/buku')->with('message', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Buku::where('id', $id)->delete();
        return redirect()->to('admin/buku')->with('message', 'Data Berhasil Dihapus');
    }
}
