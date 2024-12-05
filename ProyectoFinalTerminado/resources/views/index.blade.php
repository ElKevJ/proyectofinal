@extends('layouts.diseño')

@section('Titulo')

<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PapuCine</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/peliculas">Peliculas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/actores">Actores</a>
          </li>
        </ul>
      </div>
      <div class="icons">
        <a href=""><i class="fa-brands fa-x-twitter"></i></a>
        <a href="mailto:serrano22pamhea@cbtis65.edu.mx"><i class="fa-regular fa-envelope"></i></a>
        <a href="https://www.tiktok.com/@fizaack2.0"><i class="fa-brands fa-tiktok"></i></a>
    </div>
    </div>
  </nav>
@endsection

<body class="fondito">
    



@section('Menu')
<div class="container">
    <h1>Selecciona </h1>
    <p> <i>Ingresa a nuestro sistema de gestion de formularios sobre el mundo de la cinematografia</i> </p>
    <div class="buttons">
        <a href="/formact"><button class="btn btn-outline-success">Agregar actores</button></a>
        <a href="/formpeli"><button class="btn btn-outline-info">Agregar peliculas</button></a>
        <br>
        <br>
        <br>
    </div>
</div>
@endsection

@section('Nombres')
<x-nombres/>
@endsection
</body>