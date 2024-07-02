@extends('layouts.app')
@section('content')
    <h2>Halaman Anggota</h2>
    <div class="card">
        <div class="card-header">Keanggotaan</div>
        <div class="card-body">
            <form action="{{ route('admin.anggota.update', $edit->id) }}" method="post">
                @csrf
                @method("put")
                <div class="form-group mb-3">
                    <label for="">Nama Anggota</label>
                    <input value="{{$edit->nama_anggota}}" type="text" name="nama_anggota" placeholder="Masukan Nama Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">E-mail</label>
                    <input value="{{$edit->email}}" type="email" name="email" placeholder="Masukan Email Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">No. Telphone</label>
                    <input value="{{$edit->no_tlp}}" type="number" name="no_tlp" placeholder="Masukan No. Telp Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>

            </form>
        </div>
    </div>
@endsection
