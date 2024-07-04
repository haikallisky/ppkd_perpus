@extends('layouts.app')
@section('title', 'Add Peminjam')
{{-- @section('titlecate', 'Peminjam') --}}
@section('content')
    <form action="{{ route('admin.peminjam.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="">Name Peminjam</label>
            <div class="row">
                <div class="col-md-7">
                    <select required class="form-control" name="id_anggota">
                        <option disable hidden value="">Select Anggota</option>
                        @foreach ($anggota as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_anggota }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.anggota.create') }}" type="button">
                        <i class="fas fa-plus"></i>Tambah Anggota Baru
                    </a>
                </div>
            </div>
        </div>
        <div class="form-group mb-3 col-2">
            <label for="">No. Transaksi</label>
            <input type="text" readonly value="TR-{{ date("dmY$max") }}" class="form-control" name="no_transaksi">
        </div>
        <br>
        <div class="table-transaction">
            <div class="mb-3" align="right">
                <button type="button" class="btn btn-primary btn-sm btn-add"><i class="fas fa-plus"></i>Tambah Data</button>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select name="id_buku" id="">
                                <option value="">Pilih Buku</option>
                                @foreach ($buku as $buku)
                                    <option value="{{ $buku->id }}">{{ $buku->nama_buku }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input type="date" name="tanggal_pinjam" class="form-control">
                        </td>
                        <td>
                            <input type="date" name="tanggal_pengembalian" class="form-control">
                        </td>
                        <td>
                            <input type="text" name="keterangan" class="form-control">
                        </td>
                        <td>
                            Hapus
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Save">
            <input type="reset" class="btn btn-danger" value="Cancel">
            <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>
        </div>
    </form>


@endsection