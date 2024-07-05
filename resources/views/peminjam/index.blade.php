@extends('layouts.app')
@section('content')
@section('cardtitle', 'Data Peminjam')
@include('sweetalert::alert')
<div class="table-responsive">
    <div align="right" class="mb-3">
        <a href="{{route ('admin.peminjam.create')}}" class="btn btn-primary btn-sm"><i
                class="fas fa-plus mr-1"></i><strong>Tambah Peminjam</strong></a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Anggota</th>
                <th>No Transaksi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $key => $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->anggota->nama_anggota }}</td>
                    <td>{{ $d->no_transaksi }}</td>
                    <td>
                        <a href="#" class="btn btn-sm bg-success">
                            <i class="fas fa-edit"></i>Edit
                        </a>
                        |
                        <form action="{{ route('admin.peminjam.destroy', $d->id) }}" method="post" class="d-inline">
                            @csrf
                            <input type="hidden" name="_method" value="Delete">
                            <button class="btn btn-sm btn-danger show_confirm" type="submit">
                                <i class="fas fa-trash"></i>Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
