@extends('app.app')
@section('content')
    @foreach ($categories as $item)
        <p>{{$item->title}}</p>
    @endforeach
@endsection