@extends('layouts.app')

<link href="{{ asset('css/output.css') }}" rel="stylesheet">

{{-- resources/views/auth/login.blade.php --}}
@section('content')
<div class="login-container">
    <form class="login-form" method="POST" action="{{ route('login') }}">
        @csrf
        <h2 class="login-title">Masuk</h2>

        <label for="email">Alamat Email</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <div class="login-options">
            <label>
                <input type="checkbox" name="remember"> Ingat saya
            </label>
            <a href="{{ route('password.request') }}" class="login-forgot">Lupa password?</a>
        </div>

        <button type="submit" class="btn-login">Masuk</button>

        <div class="login-divider">atau</div>

        <button type="button" class="btn-secondary">Email Satu Kali</button>

        <div class="login-socials">
            <button type="button" class="btn-google">🔴 Google</button>
            <button type="button" class="btn-github">⚫ GitHub</button>
        </div>
    </form>
</div>
@endsection