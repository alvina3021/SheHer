@extends('layouts.app')

@section('content')
<div class="bg-white min-h-screen flex flex-col justify-between">

    <!-- Header -->
    <header class="bg-black text-white px-8 py-4 flex justify-between items-center">
        <div class="flex items-center gap-2 text-xl font-bold">
            <span class="bg-white text-black px-2 py-1 rounded">She</span><span class="text-pink-500">Her</span>
        </div>
        <nav class="space-x-6 font-semibold">
            <a href="#" class="hover:text-pink-500">Beranda</a>
            <a href="#" class="hover:text-pink-500">Artikel</a>
            <a href="#" class="hover:text-pink-500">Proyek</a>
            <a href="#" class="hover:text-pink-500">Komunitas</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="px-8 py-16 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">
            Bukan Sulap<br><span class="text-pink-500">Bukan SheHer</span>
        </h1>
        <p class="text-gray-700 mb-6">
            Sebuah aksi nyata menuju inklusi perempuan, perlindungan kelompok rentan, dan membongkar yang harusnya dirubuhkan.
        </p>
        <button class="bg-pink-600 text-white px-6 py-3 rounded-full hover:bg-pink-700 transition">
            Bergabung
        </button>
        <div class="mt-12">
            <img src="{{ asset('images/hero-image.png') }}" alt="Hero Image" class="mx-auto w-72 md:w-96">
        </div>
    </section>

    <!-- Info Card -->
    <section class="px-6 md:px-16 py-8">
        <div class="bg-gray-100 p-8 rounded-lg shadow-lg text-center max-w-3xl mx-auto">
            <h2 class="text-lg font-semibold text-pink-600 uppercase mb-2">Deklarasi</h2>
            <p class="text-xl font-bold mb-4">We Are The United Nations Global Solidarity Movement for Gender Equality</p>
            <p class="text-gray-700">
                Ini bukan tentang siapa yang paling kuat. Ini tentang siapa yang berani berubah. Dunia tidak akan berubah sendiri.
                Dibutuhkan solidaritas dan tindakan nyata dari kita semua. Mari bergerak bersama untuk kesetaraan.
            </p>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="text-center px-6 md:px-16 py-8">
        <h2 class="text-2xl font-bold mb-4">Be the Change</h2>
        <p class="text-gray-700 mb-6">
            Perubahan dimulai dari langkah kecil. Jadilah bagian dari gerakan ini dan bawa dampak positif ke sekelilingmu.
        </p>
        <button class="bg-pink-600 text-white px-6 py-3 rounded-full hover:bg-pink-700 transition">
            Dukung!
        </button>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-white px-8 py-6 text-sm flex justify-between items-center">
        <div class="flex items-center gap-2 font-bold">
            <span class="bg-white text-black px-2 py-1 rounded">She</span><span class="text-pink-500">Her</span>
        </div>
        <div>
            © 2025 | Tim SheHer<br>
            Gender Equality Project
        </div>
    </footer>

</div>
@endsection
