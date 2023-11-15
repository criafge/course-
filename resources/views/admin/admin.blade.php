<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<style>
    a>img{
        width: 25px;
    }
</style>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
            <a class="navbar-brand" href="/">Курсы.Ру</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/admin">Панель администратора</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Выход</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>
    <main>
        <section>
            <div class="container">
                <h2 class="m-3">Список заявок</h2>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Курс</th>
                        <th scope="col">Дата заявки</th>
                        <th scope="col">Статус</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($all_applications as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->email}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->course_id}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->is_confirm == 0 ? 'Не подтверждена' : 'Подтверждена'}}</td>
                                @if($item->is_confirm == 0)
                                    <td><a href="/application/{{$item->id}}/confirm"><img src="storage/image/3b1fa9d8-5671-486a-aa0c-17fe1cc31063.png" alt="Принять"></a></td>
                                @else
                                    <td></td>
                                @endif
                                
                            </tr>
                        @endforeach          
                    </tbody>
                  </table>
            </div>
        </section>
        <section>
            <div class="container">
                <h2 class="m-3">Добавить новый курс</h2>
                <form method="post" action="/course/create" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Название курса</label>
                        <input name="title" type="text" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Описание курса</label>
                        <textarea name="description" class="form-control" id="description" rows="2"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="cost" class="form-label">Стоимость курса</label>
                        <input name="cost" type="text" class="form-control" id="cost">
                    </div>
                    <div class="mb-3">
                        <label for="duration" class="form-label">Длительность курса (в неделях)</label>
                        <input name="duration" type="number" class="form-control" id="duration">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Изображение курса</label>
                        <input name="image" class="form-control" type="file" id="image">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Категория курса</label>
                        <select name="category" class="form-select">
                            <option value="">Выберите категорию</option>
                            @foreach($categories as $item)
                                <option value="{{$item->id}}">{{$item->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </section>
        <section>
            <div class="container">
                <h2 class="m-3">Добавить новую категорию</h2>
                <form method="post" action="/category/create" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Название Категории</label>
                        <input name="title" type="text" class="form-control" id="title">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </section>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>