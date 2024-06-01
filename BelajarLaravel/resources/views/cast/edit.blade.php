@extends('layout.master')

@section('title')
Halaman Edit Cast
@endsection

@section('content')
<form method="POST" action="/cast/{{$cast->id}}">
    {{--validation--}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{--Form Input--}}
    @csrf
    @method("put")
    <div class="form-group">
      <label for="exampleInputEmail1">Cast Name</label>
      <input type="text" value="{{$cast->nama}}" class="form-control" name="nama">
    </div>
    <div class="form-group">
      <label>Cast Age</label>
      <input type="text" value="{{$cast->Umur}}" class="form-control" name="Umur">
    </div>
    <div class="form-group">
        <label>Cast Bio</label>
        <textarea name="Bio" class="form-control" cols="30" rows="10">{{$cast->Bio}}</textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection