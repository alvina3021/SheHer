@extends('layouts.app')

<link href="{{ asset('css/output.css') }}" rel="stylesheet">

@section('content')
<!-- Header -->
<header class="header">
    <div class="header-logo">
        <div class="logo-box"></div>
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

<div class="artikel-detail-container">

    <a href="{{ route('artikel.index') }}" class="back-link">← Kembali</a>

    <h1 class="artikel-judul">{{ $artikel->judul }}</h1>
    <p class="artikel-tanggal">Tanggal: {{ $artikel->tanggal }}</p>

    @if($artikel->thumbnail && file_exists(public_path('storage/' . $artikel->thumbnail)))
        <img src="{{ asset('storage/' . $artikel->thumbnail) }}" alt="Thumbnail" class="artikel-detail-img">
    @else
        <div class="artikel-detail-placeholder">No Image Available</div>
    @endif

    <div class="artikel-isi">
        {!! nl2br(e($artikel->isi)) !!}
    </div>
</div>
@endsection
