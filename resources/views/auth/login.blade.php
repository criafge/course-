@extends('app.app')

@section('content')
@if (session('error'))
    {{session('error')}}
@endif
    <form action="{{route('auth')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Адрес электронной почты</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('email')<div class="alert alert-danger" role="alert">
                {{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            @error('password')<div class="alert alert-danger" role="alert">
                {{$message}}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
@endsection