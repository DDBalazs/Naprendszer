<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naprendszer</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/mystyle.css')}}">
</head>
<body class="bg-light">
    <header>
        <h1>Naprendszer</h1>
    </header>
    <div class="container-fliud bg-dark">
        <nav class="navbar navbar-expand bg-dark navbar-dark container">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/">Főoldal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/bolygok/3">Bolygók</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/holdak/3">Holdak</a>
            </li>
          </ul>
          <div class="ms-auto">
              <form class="d-flex" action="/search" method="GET">
                <input class="form-control me-sm-2" type="search" placeholder="Search" name="search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </nav>
    </div>
    @yield('content')

    <footer class="container">
        <hr>
        <p>Csőke Balázs Zsolt - 13.A</p>
    </footer>
</body>
</html>
