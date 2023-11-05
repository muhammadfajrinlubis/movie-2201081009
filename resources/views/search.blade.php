@extends('layout.template')

@section('title', 'Search Results')

@section('content')
<h1>Search Results</h1>
@if (count($movies) > 0)
<div class="container">
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-md-3 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="/images/{{ $movie['foto_sampul'] }}" class="card-img-top" alt="{{ $movie['judul'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie['judul'] }}</h5>
                    <p class="div"> &#9733; {{ $movie['rating'] }}</p>
                    <p class="card-text">{{ implode(',', $movie['pemain']) }}</p>
                    <a href="/movie/{{ $movie['id'] }}" class="btn btn-primary">Detail</a>
                    <a href="/" class="btn btn-warning">What Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@else
<div class="alert alert-danger" role="alert">
    <p>tidak ada data</p>
</div>
@endif
<a href="/" class="btn btn-primary">Kembali</a>

@endsection
