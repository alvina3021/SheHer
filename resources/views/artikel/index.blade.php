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

<div class="artikel-index-container">
    <div class="artikel-header">
        <div class="artikel-line"></div>
        <h1 class="artikel-heading">Artikel</h1>
        <p class="artikel-subheading">Check out the latest inspiring stories from around the world.</p>
    </div>
</div>
    <div class="artikel-grid">
        @forelse($artikels as $artikel)
            <a href="{{ route('artikel.show', $artikel->id) }}" class="artikel-card">
                @if($artikel->thumbnail && file_exists(public_path('storage/' . $artikel->thumbnail)))
                    <img src="{{ asset('storage/' . $artikel->thumbnail) }}" alt="Thumbnail" class="artikel-img">
                @else
                    <div class="artikel-img-placeholder">No Image</div>
                @endif

                <div class="artikel-info">
                    <h3 class="artikel-title">{{ $artikel->judul }}</h3>
                    <p class="artikel-preview">{{ Str::limit($artikel->isi, 80) }}</p>
                    <p class="artikel-date">Tanggal: {{ $artikel->tanggal }}</p>
                </div>
            </a>
        @empty
            <p class="artikel-empty">Tidak ada artikel ditemukan.</p>
        @endforelse
    </div>

    <div class="see-more-container">
        <!--<a href="#" class="see-more-button">SEE MORE</a>-->
    </div>
</div>
<footer class="footer-index">
</footer>
@endsection

