@extends('layouts.app')
@section('content')
    <h2>Tambah Level</h2>
    <div class="card">
        <div class="card-header">Level</div>
        <div class="card-body">
            <form action="{{ route('admin.level.update', $edit->id) }}" method="post">
                @csrf
                @method("put")
                <div class="form-group mb-3">
                    <label for="">Nama Level</label>
                    <input value="{{$edit->name}}" type="text" name="nama_level" placeholder="Masukan Nama Level" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>

            </form>
        </div>
    </div>
@endsection
