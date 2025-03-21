@extends('welcome')
@section('links')
    <link rel="stylesheet" href="{{ asset('css/updatePassword.css') }}">
@endsection
@section('content')
    <div class="formchangePassword">
        <h2>RESET PASSWORD</h2>
        <form action="{{ route('password.update') }}" method="POST">
            @if($errors->any())
                <div class="errors">
                    <ul style="list-style:none;color:red;margin:0;padding:0;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            <input type="hidden" name="token" value="{{ request()->route('token') }}">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password">
            <input type="submit" value="LET'S ROCK!">
        </form>
    </div>
@endsection


