<!DOCTYPE html>
<html>

<head>
    <title>@yield('titulo') </title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<header>
    <nav>
        <div class="nav-wrapper deep-blue">
            <div class="container">
                <a href="#!" class="brand-logo">Loja de produtos</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i
                        class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    @if(Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                    @else
                        <li><a href="{{ route('produtos.index') }}">Produtos</a></li>
                        <li><a href="{{ route('login.sair') }}">Sair</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>

<body>
