@extends('layouts.app')

<link href="{{ asset('css/output.css') }}" rel="stylesheet">

@section('content')
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

<div class="create-article-container">
    <h2 class="form-title">Create Artikel</h2>

    <form method="POST" action="{{ route('artikel.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-row">
    <label for="judul">Judul*</label>
    <input type="text" name="judul" class="input-field" required>
</div>

<div class="form-row upload-textarea">
    <div class="upload-box">
        <label for="thumbnail">Thumbnail*</label>
        <div class="upload-area">
            <input type="file" name="thumbnail" id="thumbnail" required onchange="previewImage(event)">
            <p class="upload-text">Drag & Drop your file or <span class="upload-link">Browser</span></p>
            <img id="img-preview" src="#" alt="Preview" style="display:none; max-width: 200px; margin-top: 10px;"/>
        </div>
    </div>

    <div class="textarea-box">
        <label for="isi">Isi Artikel*</label>
        <div class="textarea-area">
            <textarea name="isi" placeholder="Ketikkan Artikel anda di sini !" required class="textarea-input"></textarea>
        </div>
    </div>
</div>


<div class="form-row date-and-buttons">
    <div class="date-column">
        <label for="tanggal">Tanggal*</label>
        <input type="date" name="tanggal" class="input-field" required>
    </div>

    <div class="form-actions">
        <button type="submit" class="btn-simpan">Simpan</button>
        <a href="{{ url()->previous() }}" class="btn-batal">Batal</a>
    </div>
</div>

<script>
function previewImage(event) {
    const input = event.target;
    const preview = document.getElementById('img-preview');
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        }
        reader.readAsDataURL(input.files[0]);
    } else {
        preview.src = '#';
        preview.style.display = 'none';
    }
}
</script>
    </form>
@endsection
