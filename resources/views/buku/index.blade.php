@extends('layouts.app')
@section('content')
    Koleksi Buku-Buku
    <div class="card">
        <div class="card-header">Buku-Buku</div>
        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('admin.buku.create') }}" class="btn btn-primary">Tambah Buku</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>NO.</th>
                        <th>NAMA BUKU</th>
                        <th>PENERBIT</th>
                        <th>QTY</th>
                        <th>DESKRIPSI</th>
                        <th>PENULIS</th>
                        <th>GENRE</th>
                        <th>TAHUN</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama_buku }}</td>
                            <td>{{ $data->penerbit }}</td>
                            <td>{{ $data->qty }}</td>
                            <td>{{ $data->deskripsi }}</td>
                            <td>{{ $data->penulis }}</td>
                            <td>{{ $data->genre }}</td>
                            <td>{{ $data->tahun }}</td>
                            <td>
                                <a href="{{route('admin.buku.edit', $data->id)}}" class="btn btn-success btn-sm">Edit</a>
                                |
                                <form method="POST" action="{{route('admin.buku.destroy', $data->id)}}" class="d-inline">
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
