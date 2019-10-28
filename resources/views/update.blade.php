<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Редактирование песни</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
<body style="font-family: 'Montserrat';">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{Auth::user()->email}}
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <!-- Right Side Of Navbar -->
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
        <h1>Редактирование песни</h1> <br>
        @foreach($songs as $song)
        <form action="{{url('/home/update/new/'.$song->id)}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="email">Название</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$song->name}}">
            </div>
            <div class="form-group">
                <label for="pwd">Ссылка на песню</label>
                <input type="text" class="form-control" name="spath" id="spath" value="{{$song->song_path}}">
            </div>
            <div class="form-group">
                <label for="pwd">Ссылка на обложку</label>
                <input type="text" class="form-control" name="ipath" id="ipath" value="{{$song->image_path}}">
            </div>
            <br>
            <button class="btn btn-default" type="submit" style="background-color:#F5D43C; border-color:#F5D43C;">Изменить</button>
        </form>
        @endforeach
    </div>
</body>
</html>
