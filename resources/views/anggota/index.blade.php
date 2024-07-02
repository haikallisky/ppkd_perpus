@extends('layouts.app')
@section('content')
    Halaman Anggota
    <div class="card">
        <div class="card-header">Anggota</div>
        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('admin.anggota.create') }}" class="btn btn-primary">Tambah Anggota</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>NO.</th>
                        <th>NAMA ANGGOTA</th>
                        <th>EMAIL</th>
                        <th>NO. TELPHONE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama_anggota }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->no_tlp }}</td>
                            <td>
                                <a href="{{route('admin.anggota.edit', $data->id)}}" class="btn btn-success btn-sm">Edit</a>
                                |
                                <form method="POST" action="{{route('admin.anggota.destroy', $data->id)}}" class="d-inline">
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
