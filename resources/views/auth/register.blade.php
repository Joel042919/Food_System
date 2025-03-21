@extends('headNav')

@section('links')
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
@endsection

@section('content')
    <main class="start">
        <div class="registerContainer">
            <div class="cardContainer">
                <h1>Get Started</h1>
                <p>Already have account? <a>Sign in</a></p>
                <form action="" class="register">
                    <div class="registerGroup">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="registerGroup">
                        <label for="lastname">Lastname</label>
                        <input type="text" name="lastname" id="lastname">
                    </div>
                    <div class="registerGroup">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class="registerGroup">
                        <label for="password">Password</label>
                        <input type="text" name="password" id="password">
                    </div>
                    <input type="submit" value="Sign Up">
                    <div class="otherWaysContainer">
                        <span class="otherWays" >Or sing up with</span>
                        <div class="linksSingIn">
                            <a href="{{ url('auth/redirect/google') }}">
                                <img src="{{ asset('img/gmailSignIn.png') }}" alt="">
                            </a>
                            <a href="{{ url('auth/redirect/facebook') }}">
                                <img src="{{ asset('img/facebookSignIn.png') }}" alt="">
                            </a>
                            <a href="">
                                <img src="{{ asset('img/twitterSignIn.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="animacion">
            <div class="skate-container">
                <img src="{{ asset('img/skateboarding.png') }}" alt="skateboard" class="skateboard">
                <img src="{{ asset('img/cactus.png') }}" alt="cactus" class="cactus">
                <span class="circle circle1"></span>
                <span class="circle circle2"></span>
                <span class="circle circle3"></span>
                <span class="circle circle4"></span>
                <span class="circle circle5"></span>
            </div>
        </div>
    </main>
@endsection


