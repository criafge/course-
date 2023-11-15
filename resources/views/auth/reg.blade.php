@extends('app.app')

@section('content')
    <form action="{{route('registration')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Введите свое имя</label>
            <input type="text" name="name" class="form-control">
            @error('name')<div class="alert alert-danger" role="alert">
                {{$message}}</div>
            @enderror
        </div>
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
        <div class="mb-3">
            <label for="confirm" class="form-label">Пароль</label>
            <input type="password" name="confirm" class="form-control" id="exampleInputPassword1">
            @error('confirm')<div class="alert alert-danger" role="alert">
                {{$message}}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
@endsection
