<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Панель администратора</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body style="font-family: 'Montserrat';">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand">
                        Вы вошли как: {{Auth::user()->email}}
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Выход
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>Управление песнями</h1> <br>
        <table class="table table-bordered table-striped text-center" style="vertical-align: middle;">
            <thead>
              <tr>
                <th>Название</th>
                <th>Аудио</th>
                <th>Обложка</th>
            </tr>
        </thead>
        <tbody>
            @foreach($songs as $song)
            <tr>
                <td>{{$song->name}}</td>
                <td><audio controls class="embed-responsive-item mb-4 col-sm-12"><source src="{{$song->song_path}}"></audio></td>
                    <td><img src="{{$song->image_path}}" style="width: 150px; height: 100px;"></td>
                    <td><a href="home/update/{{$song->id}}">Изменить</a></td>
                    <td><a href="home/delete/{{$song->id}}">Удалить</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
