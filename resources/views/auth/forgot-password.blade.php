@extends('layouts.app')

<link href="{{ asset('css/output.css') }}" rel="stylesheet">

@section('content')
<!-- Logo Section -->
<div class="log-conten" style="text-align: center; margin-top: 50px;">
    <img src="{{ asset('images/Logo.jpg') }}" alt="Logo SheHer" class="logo-img" style="height: 60px;">
</div>
<div class="auth-container">
    <form method="POST" action="{{ route('password.email') }}" class="auth-form">
        @csrf
        <h2 class="auth-title">Lupa Password</h2>

        @if (session('status'))
            <div class="auth-success">
                {{ session('status') }}
            </div>
        @endif

        <label for="email">Alamat Email</label>
        <input type="email" name="email" id="email" required class="auth-input" value="{{ old('email') }}">

        @error('email')
            <div class="auth-error">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn-login">Kirim Link Reset</button>

        <div class="auth-back">
            <a href="{{ route('login') }}" class="auth-link">Kembali ke Login</a>
        </div>
    </form>
</div>
@endsection
