{{-- resources/views/auth/register.blade.php --}}
@extends('layouts.app')

<link href="{{ asset('css/output.css') }}" rel="stylesheet">
@if ($errors->any())
    <div class="alert-error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('content')
<!-- Logo Section -->
<div class="logo-containe" style="text-align: center; margin-top: 40px;">
    <img src="{{ asset('images/Logo.jpg') }}" alt="Logo SheHer" class="logo-img" style="height: 60px;">
</div>

<div class="register-container">
    <form class="register-form" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div class="form-group">
            <label for="email">Alamat Email</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>

        <div class="form-check">
            <input type="checkbox" id="terms" name="terms" required>
            <label for="terms">
                Saya menyetujui <a href="#">Syarat & Ketentuan</a> dan <a href="#">Kebijakan Privasi</a>
            </label>
        </div>

        <button type="submit" class="btn-register">Daftar Sekarang</button>

        <!--<div class="register-divider">atau daftar dengan</div> -->

        <!--<div class="register-socials">
            <button type="button" class="btn-google"> Google</button>
            <button type="button" class="btn-github"> GitHub</button>
        </div> -->
    </form>
</div>
@endsection
