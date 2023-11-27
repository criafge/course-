@extends('app.app')
@section('content')
    @foreach ($categories as $item)
        <a>{{$item->title}}</a>
    @endforeach
@endsection