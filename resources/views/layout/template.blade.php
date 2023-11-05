<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tiMovie - @yield('title', 'Homepage')</title>
    <link href="/boostrap/bootstrap.min.css" rel="stylesheet">
    <style>
        .div {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            color: black;
            background-color: yellow;
            border-radius: 50%;
            font-weight: bold;
            font-style: italic;
            font-family: 'Times New Roman', Times, serif;
        }
        .fs-3{
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 20px;
            color: black;
            background-color: green;
            border-radius: 10%;
            font-weight: bold;
            font-style: italic;
            font-family: 'Times New Roman', Times, serif;
        }

        .card-title {
            font-weight: bold;
            font-style: italic;
            font-family: 'Times New Roman', Times, serif;
        }

        .navbar {
            /* Melebarkan navbar */
            padding: 20px;
        }

        .navbar img {
            /* Menambahkan gambar di navbar */
            max-width: 50px; /* Ubah ukuran gambar sesuai kebutuhan */
            margin-right: 10px; /* Jarak antara gambar dan teks */
        }

        .carousel {
            background-color: #000;
        }

        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .carousel-item {
            text-align: center;
        }

        .carousel-item img {
            object-fit: cover;
            height: 500px;
        }

        .carousel-control-prev, .carousel-control-next {
            background-color: transparent;
            border: none;
        }

        .carousel-control-prev-icon, .carousel-control-next-icon {
            color: #fff;
            font-size: 30px;
        }

        .carousel-control-prev-icon:hover, .carousel-control-next-icon:hover {
            color: #007bff;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container">
        <!-- Tambahkan gambar di navbar -->
        <a class="navbar-brand" href="/">
            <img src="/images/ti.png" alt="tiMovie Logo">
            Home
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Genre
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Comedy</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Drama</a></li>
                    </ul>
                </li>
            <ul class="navbar-nav ms-auto">
                <!-- Dropdown untuk pilihan bahasa -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Language
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                        <li><a class="dropdown-item" href="#">English</a></li>
                        <li><a class="dropdown-item" href="#">Spanish</a></li>
                        <li><a class="dropdown-item" href="#">French</a></li>
                        <!-- Tambahkan bahasa lainnya sesuai kebutuhan -->
                    </ul>
                </li>
            </ul>
            </ul>
            <form class="d-flex" action="/search" method="GET">
                <input class="form-control me-2" type="search" name="q" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>


<div class="container my-2">
    @yield('content')
</div>

<footer class="bg-primary text-white text-center py-3">
    Copyright &copy; {{ date('Y') }} by Muhammad Fajrin Lubis
</footer>
<script src="/boostrap/bootstrap.bundle.min.js"></script>
</body>
</html>
