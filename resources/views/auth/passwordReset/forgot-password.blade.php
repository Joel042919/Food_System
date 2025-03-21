@extends('welcome')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/passwordReset.css')}}">
@endsection

@section('content')
    <div class="formPasswordContainer">
        <h2>PASSWORD RESET</h2>
        <span>Enter your e-mail and we will send a link to change your password</span>
        @if($errors->any())
            <div class="errors">
                <ul style="list-style:none;color:red;margin:0;padding:0;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('message'))
            <div style="color:green;">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <input name="email" type="email" placeholder="Email">
            <input type="submit" value="SEND">
        </form>
        
    </div>
@endsection