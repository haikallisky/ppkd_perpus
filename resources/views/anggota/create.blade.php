@extends('layouts.app')
@section('content')
    <h2>Halaman Anggota</h2>
    <div class="card">
        <div class="card-header">Keanggotaan</div>
        <div class="card-body">
           <form action="{{route('admin.anggota.store')}}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="">Nama Anggota</label>
                <input type="text" name="nama_anggota" placeholder="Masukan Nama Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">E-mail</label>
                <input type="email" name="email" placeholder="Masukan Email Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">No. Telphone</label>
                <input value="no_telp" type="number" name="no_tlp" placeholder="Masukan No. Telp Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <input type="submit" class="btn btn-primary" value="Simpan">
                <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
            </div>

           </form>
        </div>
    </div>
@endsection
