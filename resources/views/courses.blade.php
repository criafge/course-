@extends('app.app')

@section('content')
    @foreach ($courses as $item)
        <div>{{$item->title}}</div>
    @endforeach
@endsection