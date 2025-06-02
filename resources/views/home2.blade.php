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

<!-- Hero Section -->
<section class="hero">
  <div class="hero-container">
    <div class="hero-text">
      <h1 class="hero-title">
        Bukan Sulap<br>
        Bukan <span class="text-she">She</span><span class="text-her">Her</span>
      </h1>
      <p class="hero-subtitle">
        "She Her adalah ruang amal untuk perempuan berbagi pengalaman dan mendorong kebijakan yang setara."
      </p>
    </div>
    <div class="hero-image">
      <img src="{{ asset('images/hero-image.png') }}" alt="Hero Image" class="hero-img">
    </div>
  </div>
</section>

<!-- Info Card -->
<section class="info-card">
    <div class="card">
        <p class="card-subtitle">We Are The United Nations Global Solidarity Movement for Gender Equality</p>
        <p class="card-desc">
            Ini bukan tentang siapa yang paling kuat. Ini tentang siapa yang berani berubah. Dunia tidak akan berubah sendiri.
            Dibutuhkan solidaritas dan tindakan nyata dari kita semua. Mari bergerak bersama untuk kesetaraan.
        </p>
    </div>
</section>

<!-- Call to Action -->
<section class="cta">
    <h2 class="cta-title">Be the Change</h2>
    <p class="cta-text">
        As a global movement, SheHer partners with leaders who make tangible commitments towards
        accelerating gender equality. Known as HeForShe Champions, each partner generates a Proven
        Solution based on their commitment. SheHer also provides impactful resources to supporters
        all over the globe who are doing their part for a more equal world.
    </p>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="footer-logo">
        <div class="footer-box"></div>
            <div class= "footer-text">
                <span class="footer-she">She</span><span class="footer-her">Her</span>
            </div>
    </div>
    <ul class="footer-pilihan">
        <li>About Us</li>
        <li>Get Involved</li>
        <li>Contact Us</li>
    </ul>
</footer>
@endsection
