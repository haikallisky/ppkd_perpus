@extends('layouts.app')
@section('content')
    <h2>Ini Halaman Tambah Data Buku</h2>
    <div class="card">
        <div class="card-header">Buku-Buku</div>
        <div class="card-body">
           <form action="{{route('admin.buku.store')}}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="">Nama Buku</label>
                <input type="text" name="nama_buku" placeholder="Masukan Nama Buku" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Penerbit</label>
                <input type="text" name="penerbit" placeholder="Masukan Nama Penerbit" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Qty</label>
                <input type="number" name="qty" placeholder="Masukan Quantity" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Deskripsi</label>
                <input type="text-area" name="deskripsi" placeholder="Masukan Deskripsi" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Penulis</label>
                <input type="text" name="penulis" placeholder="Masukan Nama Penulis" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Genre</label>
                <input type="text" name="genre" placeholder="Masukan Genre Buku" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Tahun</label>
                <input type="date" name="tahun" placeholder="Masukan Tahun Penerbitan" class="form-control">
            </div>
            <div class="form-group mb-3">
                <input type="submit" class="btn btn-primary" value="Simpan">
                <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
            </div>

           </form>
        </div>
    </div>
@endsection
