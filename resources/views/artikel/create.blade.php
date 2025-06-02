@extends('layouts.app')

<link href="{{ asset('css/output.css') }}" rel="stylesheet">

@section('content')

<header class="header">
    <div class="header-logo">
        <div class="logo-box"></div>
        <div class="logo-text">
            <span class="HeroText-she">She</span><span class="HeroText-her">Her</span>
        </div>
    </div>

    <nav class="nav-links">
        <a href="#" class="nav-link">Beranda</a>
        <a href="#" class="nav-link">Artikel</a>
        <a href="#" class="nav-link">Diskusi</a>
        <a href="#" class="nav-link">Tambah Artikel</a>
    </nav>
</header>

<div class="create-article-container">
    <h2 class="form-title">Create Artikel</h2>

    <form method="POST" action="{{ route('artikel.store') }}" enctype="multipart/form-data" class="create-article-form">
        @csrf

        <div class="form-row">
            <input type="text" name="judul" placeholder="Judul*" required class="input-field">
            <input type="text" name="kategori" placeholder="Kategori*" required class="input-field">
        </div>

        <div class="form-row">
            <div class="upload-box">
                <label for="thumbnail">Thumbnail*</label>
                <input type="file" name="thumbnail" id="thumbnail" class="file-input" required>
                <p class="upload-text">Drag & Drop your file or <span class="upload-link">Browser</span></p>
            </div>

            <div class="textarea-box">
                <label for="isi">Isi Artikel*</label>
                <textarea name="isi" placeholder="Ketikkan Artikel anda di sini !" required class="textarea-input"></textarea>
            </div>
        </div>

        <div class="form-row">
            <input type="date" name="tanggal" required class="input-field">
            <div class="upload-box">
                <label for="foto">Foto*</label>
                <input type="file" name="foto" id="foto" class="file-input" required>
                <p class="upload-text">Drag & Drop your file or <span class="upload-link">Browser</span></p>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-simpan">Simpan</button>
            <a href="{{ url()->previous() }}" class="btn-batal">Batal</a>
        </div>
    </form>
</div>
@endsection
