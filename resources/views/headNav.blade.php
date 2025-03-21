<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/headNav.css') }}">
    @yield('links')
</head>
<body>
    <nav class="cabecera">
        <div class="logo">
            <img src="{{ asset('img/leaf-nature.png') }}" alt="logo">
            <span class="logo">Redondos</span>
        </div>
        <ul class="links hideElement">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Service</a>
            </li>
            <li>Pagos</li>
            <li>Blog</li>
            <li>Contacto</li>
            <li>
                <a href="{{ route('login') }}" class="login">Iniciar Sesion</a>
            </li>
        </ul>
        <img class="menu" src="{{ asset('img/menu.svg') }}" alt="">
    </nav>
    @yield('content')
    <div class="overlay hideOverlay"></div>

    <script src="{{ asset('js/asideNavbar.js') }}"></script>
</body>
</html>




