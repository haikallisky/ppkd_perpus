@extends('layouts.app')
@section('content')
    <h2>Ini Halaman User</h2>
    <div class="card">
        <div class="card-header">User</div>
        <div class="card-body">
            <form action="{{ route('admin.users.update', $edit->id) }}" method="post">
                @csrf
                @method("put")
                <div class="form-group mb-3">
                    <label for="">ID Level</label>
                    <input value="{{$edit->id_level}}" type="text" name="id_level" placeholder="Masukan ID Level Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nama</label>
                    <input value="{{$edit->name}}" type="text" name="name" placeholder="Masukan Nama Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">E-mail</label>
                    <input value="{{$edit->email}}" type="email" name="email" placeholder="Masukan Email Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Password )* Kosongkan Jika Tidak Ingin Mengganti Password</label>
                    <input type="password" name="password" placeholder="Masukan Password Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>

            </form>
        </div>
    </div>
@endsection
