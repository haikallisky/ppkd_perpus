@extends('layouts.app')
@section('content')
    <h2>Add User View</h2>
    <div class="card">
        <div class="card-header">User</div>
        <div class="card-body">
           <form action="{{route('admin.level.store')}}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="">Nama Level</label>
                <input type="text" name="nama_level" placeholder="Masukan Nama Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <input type="submit" class="btn btn-primary" value="Simpan">
                <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
            </div>

           </form>
        </div>
    </div>
@endsection
