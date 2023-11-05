@extends('layout.template')

@section('title', 'Welcome')

@section('content')

<div class="container-fluid p-0">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/images/yakuza.png" alt="Slide 1" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="/images/top-gun.jpg" alt="Slide 2" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="/images/equalizer.jpg" alt="Slide 3" class="d-block w-100">
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</div>

<div class="container">
    <h1 class="my-4">Film Terbaru</h1>
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-md-3 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="/images/{{ $movie['foto_sampul'] }}" class="card-img-top" alt="{{ $movie['judul'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie['judul'] }}</h5>
                    <p class="div"> &#9733; {{ $movie['rating'] }}</p>
                    <p class="fs-3">HD</p>
                    <p class="card-text">{{ implode(',', $movie['pemain']) }}</p>
                    <a href="/movie/{{ $movie['id'] }}" class="btn btn-primary">Detail</a>
                    <a href="/" class="btn btn-warning">What Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
