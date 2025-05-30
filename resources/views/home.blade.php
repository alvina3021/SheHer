<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SheHer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body { font-family: sans-serif; }
        .hero { background-color: #fff; padding: 60px 0; }
        .cta-btn { background-color: #C026D3; color: #fff; }
        .cta-btn:hover { background-color: #a01aa9; }
        footer { background-color: #111; color: white; padding: 40px 0; }
    </style>
</head>
<body>

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-black px-5">
    <a class="navbar-brand text-white fw-bold" href="#">She<span style="color:#C026D3;">Her</span></a>
    <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Artikel</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Diskusi</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Kebijakan</a></li>
    </ul>
</nav>

<!-- Hero Section -->
<section class="hero text-center container">
    <h1 class="fw-bold">Bukan Sulap <br>Bukan <span style="color:#C026D3;">SheHer</span></h1>
    <p class="mt-3">"She Her adalah ruang aman untuk perempuan berbagi pengalaman dan mendorong kebijakan yang setara."</p>
    <a href="{{ route('register') }}" class="btn cta-btn mt-3">Bergabung</a>
    <div class="mt-4">
        <img src="/images/hero-illustration.png" alt="Illustration" class="img-fluid" style="max-width:400px;">
    </div>
</section>

<!-- Middle Section -->
<section class="text-center py-5">
    <div class="container bg-light p-4 rounded shadow">
        <h5>We Are The United Nations Global Solidarity Movement For Gender Equality</h5>
        <p class="text-muted mt-2">SheHer is an initiative to recruit men and people of all genders to stand in solidarity with women to create a bold, visible and united force for gender equality.</p>
    </div>
</section>

<!-- Call to Action -->
<section class="text-center py-4">
    <h4>Be the Change</h4>
    <p class="text-muted">Jadi agen perubahan. Gender equality adalah tujuan untuk semua orang! Kampanye ini mengajak semua orang, tanpa memandang gender, untuk ikut memperjuangkan kesetaraan di rumah, tempat kerja, dan masyarakat.</p>
    <a href="{{ route('login') }}" class="btn cta-btn">Diskusi</a>
</section>

<!-- Footer -->
<footer class="text-center">
    <div class="container">
        <h5>She<span style="color:#C026D3;">Her</span></h5>
        <ul class="list-unstyled">
            <li><a href="#" class="text-white">About Us</a></li>
            <li><a href="#" class="text-white">Get Involved</a></li>
            <li><a href="#" class="text-white">Contact Us</a></li>
        </ul>
    </div>
</footer>

</body>
</html>
