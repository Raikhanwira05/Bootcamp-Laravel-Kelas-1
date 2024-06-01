@extends('layout.master')

@section('title')
Halaman Detail Cast
@endsection

@section('content')

<h1>{{$cast->nama}}</h1>
<h3>{{$cast->Umur}}</h3>
<p>{{$cast->Bio}}</p>

<a href="/cast" class="btn btn-secondary btn-sm">Kembali</a>

@endsection