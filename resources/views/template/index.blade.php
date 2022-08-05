<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- ========= BOOTSTRAP ========= -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

    <!-- ========= CSS ========= -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">

    <title>@yield('title')</title>
</head>

<body>

    @if(Auth::user())
    <li>
        <div class="dropdown">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                @php
                $firstName = explode(" ", Auth::user()->name)
                @endphp

                {{ $firstName[0] }}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li>
                    <form class="ms-3" method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit();">Sair</a>

                    </form>
                </li>
            </ul>
    </li>

    @endif

    @if(Auth::user() && Auth::user()->is_admin == 1)
    <div class="mt-5 pt-3">
        <div class="container">
            <div class="container mt-5 d-flex justify-content-center">
                <a class="btn btn-primary me-3 px-4" href="/admin/users">Listar usuários</a>
                <a class="btn btn-primary me-3 px-4" href="/admin/products">Listar produtos</a>
            </div>
        </div>
    </div>
    @endif




    <div class="d-flex justify-content-center align-items-center" style="background-color: #fefefe;">
        @yield('body')
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
