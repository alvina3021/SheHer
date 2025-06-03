@extends('layouts.app')

<link href="{{ asset('css/output.css') }}" rel="stylesheet">

@section('content')
<!-- Header -->
<header class="header">
    <div class="header-lgo">
            <!-- Logo Section -->
        <div class="lgo-contaner" style="text-align: center; margin-top: 40px;">
            <img src="{{ asset('images/Logo-baru.png') }}" alt="Logo SheHer" class="logo-img" style="height: 60px;">
        </div>
        <div class="logo-text">
            <span class="HeroText-she">She</span><span class="HeroText-her">Her</span>
        </div>
    </div>

    <nav class="nav-links">
        <a href="{{ route('home2') }}" class="nav-link">Beranda</a>
        <a href="{{ route('artikel.index') }}" class="nav-link">Artikel</a>
        <a href="{{ route('artikel.create') }}" class="nav-link">Tambah Artikel</a>
    </nav>
</header>

<div class="artikel-wrapper">
    <div class="artikel-detail-container">
        <a href="{{ route('artikel.index') }}" class="back-link">← Kembali</a>
        <div class="artikel-header">
            <h1 class="artikel-judul">{{ $artikel->judul }}</h1>
            <div class="artikel-tanggal">{{ $artikel->tanggal }}</div>
            <div class="artikel-line"></div>
        </div>
        @if($artikel->thumbnail && file_exists(public_path('storage/' . $artikel->thumbnail)))
            <img src="{{ asset('storage/' . $artikel->thumbnail) }}" alt="Thumbnail" class="artikel-detail-img">
        @else
            <div class="artikel-detail-placeholder">No Image Available</div>
        @endif
        <div class="artikel-isi">
            {!! nl2br(e($artikel->isi)) !!}
        </div>
    </div>
</div>

<footer class="footer-show">
</footer>
@endsection
