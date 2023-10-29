@extends('layout.template')

@section('title', 'Search Results')

@section('content')
<h1>Search Results</h1>
@if (count($movies) > 0)
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-lg-6">
            <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="/images/{{ $movie['foto_sampul'] }}"class="img-fluid rounded-start">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{ $movie['judul'] }}</h5>
                      <p class="card-text">{{ $movie['sinopsis'] }}</p>
                      <a href="/" class="btn btn-success">Lihat Selengkapnya</a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        @endforeach
    </div>
@else
    <p>No movies found for your search query.</p>
@endif
@endsection
