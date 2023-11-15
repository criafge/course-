@extends('app.app')
@section('content')
    @if (isset($user))
        <div>{{ $user->name }}</div>
    @endif
@endsection
