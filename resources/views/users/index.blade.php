@extends('layouts.app')
@section('content')
    Ini Halaman User
    <div class="card">
        <div class="card-header">User</div>
        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Tambah User</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>NO.</th>
                        <th>ID Level</th>
                        <th>NAMA</th>
                        <th>EMAIL</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->id_level }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>
                                <a href="{{route('admin.users.edit', $data->id)}}" class="btn btn-success btn-sm">Edit</a>
                                |
                                <form method="POST" action="{{route('admin.users.destroy', $data->id)}}" class="d-inline">
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
