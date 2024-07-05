<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Anggota::get();
        return view('anggota.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Anggota";
        return view('anggota.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Anggota::create([
            'nama_anggota' => $request->nama_anggota,
            'email' => $request->email,
            'no_tlp' => $request->no_tlp,
        ]);
        return redirect()->to('admin/anggota')->with('message', 'Data Berhasil Ditambah');
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
        $edit = Anggota::find($id);
        $title = "Edit Data" . $edit->name;
        return view('anggota.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $edit = Anggota::find($id);
        Anggota::where('id', $id)->update([
            'nama_anggota' => $request->nama_anggota,
            'email' => $request->email,
            'no_tlp' => $request->no_tlp,
        ]);
        Alert::success('Success Title', 'Success Message');
        return redirect()->to('admin/anggota')->with('message', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Anggota::where('id', $id)->delete();
        Alert::success('Success Title', 'Success Message');
        return redirect()->to('admin/anggota')->with('message', 'Data Berhasil Dihapus');
    }
}
