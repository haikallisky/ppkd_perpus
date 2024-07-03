@extends('layouts.app')
@section('content')
    <h2>Tambah Peminjaman</h2>
    <div class="card">
        <div class="card-header">Data Peminjaman</div>
        <div class="card-body">
           <form action="{{route('admin.transaksi.store')}}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="">Nama Anggota</label>
                <select name="id_anggota" id="" class="form-control">
                    <option selected hidden>Pilih Anggota</option>
                    @foreach ($anggota as $anggota)
                    <option value="{{$anggota->id}}">{{$anggota->nama_anggota}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="">Nama Buku</label>
                <select name="id_buku" id="" class="form-control">
                    <option selected hidden>Pilih Buku</option>
                    @foreach ($buku as $buku)
                    <option value="{{$buku->id}}">{{$buku->nama_buku}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="">No. Transaksi</label>
                <input value="<?php echo $kode_transaksi ?>" type="text" name="no_transaksi" placeholder="Masukan No. Transaksi" class="form-control">
            </div>
            <br>
            <div class="table-transaction">
                <div align="right" class="mb-3">
                    <button type="button" class="btn btn-primary btn-sm btn-add">Tambah</button>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="">Tanggal Pinjam</label>
                <input type="date" name="tanggal_pinjam" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Tanggal Pengembalian</label>
                <input type="date" name="tanggal_pengembalian" class="form-control">
            </div>
            <div class="form-group mb-3">
                <input type="submit" class="btn btn-primary" value="Simpan">
                <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
            </div>

           </form>
        </div>
    </div>
@endsection
