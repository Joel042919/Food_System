<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="contenedor">
        <div class="wave">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M77.31,-16.23 C17.49,46.74 124.15,91.03 60.95,176.67 L-0.00,149.60 L-2.25,-4.43 Z" style="stroke: none; fill: #DDDDDD;"></path>
            </svg>
        </div>
        <div class="part1">
            <span class="shape1"></span>
            <img src="{{ asset('img/foodLogin.png') }}" alt="">
        </div>
        <div class="waveVer waveTop">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.85 C150.00,149.60 271.37,-49.85 500.00,49.85 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #DDDDDD;"></path>
            </svg>
        </div>
        <div class="part2"> 
            <div class="access">
                <div class="login">
                    <span>Login</span>
                    <form method="POST" action="/login/verify">
                        @csrf
                        <p>
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" placeholder="Enter you username" value="{{ old('username') }}">
                            @error('username')
                                <span class="errorMessage">{{ $message }}</span>
                            @enderror
                        </p>
                        <p>
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Enter you password">
                            @error('password')
                                <span class="errorMessage">{{ $message }}</span>
                            @enderror
                        </p>
                        @error('login_error')
                            <span class="errorMessage">{{ $message }}</span>
                        @enderror
                        <a href="{{route('passwordForgotForm')}}">Forgot Password</a>
                        <input type="submit" value="Login to Redondos">
                    </form>
                </div>
                <div class="more">
                    <div class="register">
                        <p>Don't have an account</p>
                        <a href="{{ route('register.index') }}">Register Now</a>
                    </div>
                    <a href="#">Terms and Services</a>
                </div>
            </div>
        </div>
        <div class="waveVer waveBottom">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.85 C150.00,149.60 349.20,-49.85 500.00,49.85 L500.00,149.60 L0.00,149.60 Z" style="stroke: none; fill: #DDDDDD;"></path>
            </svg>
        </div>

    </div>
    
</body>
</html>