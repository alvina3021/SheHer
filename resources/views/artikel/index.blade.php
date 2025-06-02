@extends('layouts.app')

<link href="{{ asset('css/output.css') }}" rel="stylesheet">

@section('content')
<div class="artikel-index-container">
    <div class="artikel-header">
        <div class="artikel-line"></div>
        <h2 class="artikel-title">Artikel</h2>
        <p class="artikel-subtitle">Check out the latest inspiring stories from around the world.</p>
    </div>

    <div class="artikel-grid">
        @for ($i = 0; $i < 3; $i++)
            <div class="artikel-card">
                <div class="artikel-image-placeholder"></div>
            </div>
        @endfor
    </div>

    <div class="artikel-button-wrapper">
        <a href="#" class="btn-see-more">SEE MORE</a>
    </div>
</div>
@endsection
