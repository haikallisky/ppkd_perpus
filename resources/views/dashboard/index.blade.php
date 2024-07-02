@extends('layouts.app')
@section('content')
Hello
@if (Auth::user()->level->nama_level == 'admin')
Admin
@endif

@endsection
