@extends('layouts.app')
@section('content')
    <h2>Ini Halaman User</h2>
    <div class="card">
        <div class="card-header">User</div>
        <div class="card-body">
           <form action="{{route('admin.users.store')}}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="">ID Level</label>
                <input type="text" name="id_level" placeholder="Masukan ID Level Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Nama</label>
                <input type="text" name="name" placeholder="Masukan Nama Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">E-mail</label>
                <input type="email" name="email" placeholder="Masukan Email Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Masukan Password Anda" class="form-control">
            </div>
            <div class="form-group mb-3">
                <input type="submit" class="btn btn-primary" value="Simpan">
                <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
            </div>

           </form>
        </div>
    </div>
@endsection
