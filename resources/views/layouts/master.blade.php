<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://unpkg.com/jspdf-autotable@3.5.25/dist/jspdf.plugin.autotable.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="{{asset('js/download.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title')
    </title>
</head>

<body class="d-flex flex-column min-vh-100">
    {{-- navbar--}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" class="logo"
                    alt="logo" width="70" height="70"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('questions')}}">F.A.Q.</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('search')}}">Cerca schede</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdown-schede"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Esercizi
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdown-schede">
                                <li><a class="dropdown-item" href="{{route('user.excercisetypes.index',
                                    auth()->user())}}">I miei esercizi</a></li>
                                <li><a class="dropdown-item"
                                        href="{{route('user.excercisetypes.create',auth()->user())}}">Aggiungi
                                        tipo di esercizio</a></li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdown-esercizi"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Schede
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdown-esercizi">
                                <li><a class="dropdown-item" href="{{route('user.templates.index',
                                    auth()->user())}}">Le mie schede</a></li>
                                <li><a class="dropdown-item"
                                        href="{{route('user.templates.create',auth()->user())}}">Aggiungi scheda</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    @endauth
                </ul>

                <ul class="navbar-nav ms-auto d-flex align-items-lg-start align-items-xl-center">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.templates.index',
                        auth()->user())}}">Welcome, {{auth()->user()->username}}</a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{route('login.logout')}}">
                            @csrf
                            <div class="nav-link">
                                <button type="submit" class="btn btn-link" style="color:#ce6324">Logout</button>
                            </div>
                        </form>

                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register.index')}}">Registrati</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login.login')}}">Login</a>
                    </li>

                    @endauth

                </ul>

            </div>
        </div>
    </nav>

    <!-- contenuto della pagina -->
    <div class="container-fluid mt-3 ">
        @yield('content')
    </div>

    {{-- footer --}}
    <footer class="footer mt-auto">
        <div class="container-fluid">
            <hr class="featurette-divider">
            <p>© 2021–2022 La Tana Dello Scoiattolo, Inc. · Webiste logo: Alessia De Rosa, all right reserved.</p>
        </div>
    </footer>

</body>

</html>