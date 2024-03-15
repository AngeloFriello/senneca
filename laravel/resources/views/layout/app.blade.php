<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">
    <title>Document</title>
    @vite(['resources/js/app.js'])  
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <ul>
                        <li><a href="{{route('users.index')}}">Lista utenti</a></li>
                        <li><a href="{{route('users.create')}}">Crea un nuovo utente</a></li>
                    </ul>
                </div>
            </div>
        </div>
       
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>