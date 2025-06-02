@extends('layouts.app')

<link href="{{ asset('css/output.css') }}" rel="stylesheet">

@section('content')
<div class="auth-container">
    <form method="POST" action="{{ route('password.update') }}" class="auth-form">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <h2 class="auth-title">Reset Password</h2>

        <label for="email">Alamat Email</label>
        <input type="email" name="email" id="email" required class="auth-input" value="{{ old('email', $email) }}">
        @error('email')
            <div class="auth-error">{{ $message }}</div>
        @enderror

        <label for="password">Password Baru</label>
        <input type="password" name="password" id="password" required class="auth-input">
        @error('password')
            <div class="auth-error">{{ $message }}</div>
        @enderror

        <label for="password_confirmation">Konfirmasi Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required class="auth-input">

        <button type="submit" class="btn-login">Reset Password</button>
    </form>
</div>
@endsection
