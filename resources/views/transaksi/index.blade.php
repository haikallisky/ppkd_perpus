@extends('layouts.app')
@section('content')
    Halaman Peminjaman
    <div class="card">
        <div class="card-header">Data Peminjaman</div>
        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('admin.transaksi.create') }}" class="btn btn-primary">Tambah Peminjaman</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>NO.</th>
                        <th>NO. TRANSAKSI</th>
                        <th>NAMA ANGGOTA</th>
                        <th>NAMA BUKU</th>
                        <th>TANGGAL PINJAM</th>
                        <th>TANGGAL PENGEMBALIAN</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->no_transaksi }}</td>
                            <td>{{ $data->anggota->nama_anggota }}</td>
                            <td>{{ $data->buku->nama_buku }}</td>
                            <td>{{ $data->tanggal_pinjam }}</td>
                            <td>{{ $data->tanggal_pengembalian }}</td>
                            <td>
                                <a href="{{route('admin.transaksi.edit', $data->id)}}" class="btn btn-primary btn-sm">View</a>
                                |
                                <form method="POST" action="{{route('admin.transaksi.destroy', $data->id)}}" class="d-inline">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
