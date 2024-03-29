<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GESPER-HCR</title>
    <link rel="stylesheet" href="{{ asset('bootstrap5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap5/css/bootstrap.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
          <a class="navbar-brand" style="color:white;"  href="#">GESPER-HCR</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active " style="color:white;"  aria-current="page" href="{{url('/') }}">Accueil</a>
                  </li>
              <li class="nav-item">
                <a class="nav-link active " style="color:white;"  aria-current="page" href="{{route('gestion_personnel.create') }}">Formulaire</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('gestion_personnel.index') }}" style="color:white;" >Liste</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-warning" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>


      @yield('contenu')

      <br>

      <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2022 Copyright GESPER-HCR
        </div>
        <!-- Copyright -->
      </footer>
</body>
</html>
