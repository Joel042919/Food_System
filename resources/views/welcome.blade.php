<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/authServices.css') }}">
    @yield('links')
</head>
<body>
    <div class="body">
        <div class="container">
            <nav>
                <img src="{{ asset('img/leaf-nature.png') }}" alt="logo">
                <h1>Redondos</h1>
            </nav>
            <div class="formContainer">
                @yield('content')
            </div>
        </div>
    </div>
    @yield('scripts')
</body>
</html>