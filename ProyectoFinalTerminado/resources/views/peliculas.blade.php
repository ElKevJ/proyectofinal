@extends('layouts.diseño')

@section('Titulo')
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">PapuCine</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ordenamiento
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/ordenarpel/nom_pel">Titulo(asc)</a></li>
              <li><a class="dropdown-item" href="/ordenarpel/cat_pel">Categoria(asc)</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/actores">Actores</a>
          </li>
        </ul>
      </div>

      <form action="{{ route('filtrarpel') }}" method="get" class="input-group mb-3">
        <input class="form-control me-1" type="search" placeholder="Buscar Pelicula"
               value="{{ request('buscar') }}" name="buscar">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </nav>
@endsection

@section('Cartas')

<x-tar_pel class="posi" :arreglo="$peliculas"/>
  
@endsection