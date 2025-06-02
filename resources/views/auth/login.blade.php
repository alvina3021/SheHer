@extends('layouts.app')

<link href="{{ asset('css/output.css') }}" rel="stylesheet">

@if (session('status'))
    <div class="alert-success">
        {{ session('status') }}
    </div>
@endif

{{-- resources/views/auth/login.blade.php --}}
@section('content')
<body class="login-body">
<div class="login-container">
    <form class="login-form" method="POST" action="{{ route('login') }}">
        @csrf
        <h2 class="login-title">Masuk</h2>

        <label for="email">Alamat Email</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <div class="login-options">
            <div class="remember-me">
                <input type="checkbox" name="remember" id="remember" class="checkbox">
                <label for="remember" class="checkbox-label">Ingat saya</label>
            </div>
            <a href="{{ route('password.request') }}" class="login-forgot">Lupa password?</a>
        </div>

        <button type="submit" class="btn-login">Masuk</button>

        <div class="login-divider">atau</div>

        <a href="{{ route('register') }}" class="btn-secondary text-center block">Buat Akun Baru</a>

    </form>
</div>
</body>
@endsection
