<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Jade Shop</title>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>

<body class="d-flex h-100 text-center text-white" style="background: no-repeat center/100% url(https://cdn.pixabay.com/photo/2016/04/20/18/38/portugal-1341707_960_720.jpg);">

    <div class="cover-container d-flex w-100 h-100 mx-auto flex-column">
        <header class="mb-auto p-4 bg-success">
            <div>
                <h3 class="float-md-start mb-0">Jade Shopp</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                    <a class="nav-link text-white" href="{{ route('login') }}">Cadastrar</a>
                    <!-- <a class="nav-link text-white" href="{{ route('admin.login')}}">Admin</a> -->
                </nav>
            </div>
        </header>

        <main class="px-3 bg-light text-success border rounded mx-3 p-3 shadow">
            <h1>Bem vindo ao projeto empresarial do Team Jade.</h1>
            <p class="lead">Projeto desenvolvido com Laravel integrado com MySQL e utilizando a Api de <b>Paylivre</b> para efetivação dos pagamentos.</p>
            <p class="lead">O contexto deste projeto é mínimo no que diz respeito a operações de e-commerce e foca na efetivação do pagamento, portanto questões como logística, descontos e afins não serão levados em consideração na descrição e execução do projeto.</p>
            <a href="{{ route('login') }}" class="btn btn-lg btn-success fw-bold border-white">Vamos começar?</a>
            </p>
        </main>

        <footer class="mt-auto text-white-60">
            <p>Projeto desenvolvido no curso <a href="https://www.beacademy.com.br/devstartpaylivre/" class="text-white">Devstart</a>, da <a href="https://www.beacademy.com.br/" class="text-white">Be Academy</a>.</p>
        </footer>
    </div>



</body>

</html>
