@extends('app.app')
@section('content')
    
    <main>
        <section class="hero">
            <h1>Курсы</h1>
        </section>
        <section id="about">
            <div class="container">
                <h2 class="m-3">О нас</h2>
                <div class="row mb-3">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Преимущества 1</h5>
                                <p class="card-text">Преимущество 1</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Преимущество 2</h5>
                                <p class="card-text">Преимущество 2</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Преимущество 3</h5>
                                <p class="card-text">Преимущество 3</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Преимущество 4</h5>
                                <p class="card-text">Преимущество 4</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="courses">
            <div class="container">
                <h2>Наши курсы</h2>
                <div class="d-flex" style="">
                    @foreach ($courses as $item)
                        <div class="card" style="width: 18rem;">
                            <img src="storage/image/{{ $item->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
                                <p class="card-text">{{ $item->duration }} нед.</p>
                                <p class="card-text">{{ $item->price }} руб.</p>
                                <a href="#" class="btn btn-primary">Подробнее</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $courses->withQueryString()->links('pagination::bootstrap-5') }}
            </div>
        </section>
        <section id="enroll">
            <div class="container">
                <h2>Записаться</h2>
                <form action="/enroll" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Ваш email</label>
                        <input required name="email" type="text" class="form-control" id="email"
                            placeholder="Напишите email">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Ваше имя</label>
                        <input required name="name" type="text" class="form-control" id="name"
                            placeholder="Напишите имя">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Выберите курс</label>
                        <select name="course" class="form-select">
                            <option selected>Список курсов</option>
                            @foreach ($courses as $el)
                                <option value="{{ $el->id }}">{{ $el->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Записаться</button>
                </form>
            </div>
        </section>
    </main>
    <footer>

    </footer>
@endsection
