@extends('layout.template')

@section('title', 'welcome')

@section('content')
<h1>Popular Movies</h1>
<div class="row">
    @foreach ($movies as $movie)
    <div class="col-lg-3">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-12 col-md-20">
                    <img src="/images/{{ $movie['foto_sampul'] }}" class="img-fluid img-large">
                <div class="col-12 col-md-20">
                    <div class="card-body text-center"> <!-- Menambahkan class text-center untuk teks (judul) berada di bawah gambar -->
                        <p class="card-title">{{ $movie['judul'] }}</p> <!-- Mengganti <h5 class="card"> menjadi <h5 class="card-title"> -->
                        <p class="card-text">{{ $movie['tahun'] }}</p>
                        <p class="card-text">{{ implode(',', $movie['pemain']) }}</p>
                        <a href="/movie/{{ $movie['id'] }}" class="btn btn-primary">Lihat Selengkapnya</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
