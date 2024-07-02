@extends('layouts.app')
@section('content')
    Ini Halaman Level
    <div class="card">
        <div class="card-header">Level</div>
        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('admin.level.create') }}" class="btn btn-primary">Tambah Level</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>NO.</th>
                        <th>NAMA LEVEL</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama_level }}</td>
                            <td>
                                <a href="{{route('admin.level.edit', $data->id)}}" class="btn btn-success btn-sm">Edit</a>
                                |
                                <form method="POST" action="{{route('admin.level.destroy', $data->id)}}" class="d-inline">
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
