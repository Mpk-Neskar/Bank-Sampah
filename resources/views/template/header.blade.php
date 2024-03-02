@yield('header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ywEgyeR9tv/nZIiHZAIPIQTTdRhvSc6/PmluBX9Gzs8QvJh1VME6LzBtCCJdVDEh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Bank Sampah - Neskar</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bank Sampah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kelas.index') }}">Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('penanggung-jawab.index') }}">Penanggung Jawab</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('arsip.index') }}">Arsip Dokumentasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
