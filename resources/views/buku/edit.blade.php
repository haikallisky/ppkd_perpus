@extends('layouts.app')
@section('content')
    <h2>Halaman Edit Buku</h2>
    <div class="card">
        <div class="card-header">Buku-Buku</div>
        <div class="card-body">
            <form action="{{ route('admin.buku.update', $edit->id) }}" method="post">
                @csrf
                @method("put")
                <div class="form-group mb-3">
                    <label for="">Nama Buku</label>
                    <input value="{{$edit->nama_buku}}" type="text" name="nama_buku" placeholder="Masukan Nama Buku" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Penerbit</label>
                    <input value="{{$edit->penerbit}}" type="text" name="penerbit" placeholder="Masukan Nama Penerbit" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Qty</label>
                    <input value="{{$edit->qty}}" type="number" name="qty" placeholder="Masukan Quantity" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Deskripsi</label>
                    <input value="{{$edit->deskripsi}}" type="text-area" name="deskripsi" placeholder="Masukan Deskripsi" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Penulis</label>
                    <input value="{{$edit->penulis}}" type="text" name="penulis" placeholder="Masukan Nama Penulis" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Genre</label>
                    <input value="{{$edit->genre}}" type="text" name="genre" placeholder="Masukan Genre Buku" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tahun</label>
                    <input value="{{$edit->tahun}}" type="date" name="tahun" placeholder="Masukan Tahun Penerbit" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>

            </form>
        </div>
    </div>
@endsection
