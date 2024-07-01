@extends('layouts.app')
@section('content')
Hello this is dahsboard view
@if (Auth::user()->level->nama_level == 'admin')
ini admin
@endif

@endsection
