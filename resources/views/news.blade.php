@extends('layouts.app')

@section('title', $news->title)

@section('meta')
    @php
        // Decode the images in case they are stored as a JSON array
        $imageArray = json_decode($news->images, true);
        $firstImage = !empty($imageArray) && is_array($imageArray) ? $imageArray[0] : $news->images;
    @endphp

    <meta property="og:title" content="{{ $news->title }}">
    <meta property="og:description" content="{{ $news->caption }}">
    <meta property="og:image" content="{{ asset('uploads/news/' . $firstImage) }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="article">
@endsection

@section('content')
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-body">
                <h1 class="fw-bold text-center display-4">{{ $news->title }}</h1> <!-- Bigger & Bolder Title -->

                <div class="text-center">
                    @if($firstImage && file_exists(public_path('uploads/news/' . $firstImage)))
                        <img src="{{ asset('uploads/news/' . $firstImage) }}"
                             alt="{{ $news->title }}"
                             class="img-fluid rounded my-3"
                             style="max-height: 400px;">
                    @else
                        <p class="text-muted">No image available</p>
                    @endif
                </div>

                <p class="card-text text-muted">{{ $news->caption }}</p>

                <div class="text-center mt-4">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                        target="_blank"
                        class="btn btn-primary btn-sm">
                         <i class="bi bi-facebook me-1"></i> Share <!-- Adds space between icon and text -->
                     </a>
                </div>
            </div>
        </div>
    </div>
@endsection
