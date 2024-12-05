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
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Peliculas</a>
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

@section('formulario')
<form action="{{ route('actualizarpelicula', $pelicula) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    @if ($errors->any())
    <div class="info info-danger">
        <ul>
        @foreach ($errors->all() as $item_error)
            <li>{{ $item_error }}</li>
        @endforeach
        </ul>
    </div>
    @endif
    
    <label class="form-label">
        Nombre de la película:
        <input class="form-control" type="text" name="nom_pel" value="{{ old('nom_pel', $pelicula->nom_pel) }}">
    </label>
    <br><br>
    
    <label class="form-label">
        Sinopsis de la película:
        <input class="form-control" type="text" name="sinop_pel" value="{{ old('sinop_pel', $pelicula->sinop_pel) }}">
    </label>
    <br><br>

    <label class="form-label">
        Duración de la película:
        <input class="form-control" type="text" name="dura_pel" value="{{ old('dura_pel', $pelicula->dura_pel) }}">
    </label>
    <br><br>

    <label for="categoria-pelicula" class="form-label">Categoría de la película:</label>
    <select class="form-select" name="cat_pel">
        <option selected value="{{ old('cat_pel', $pelicula->cat_pel) }}">{{ ucfirst($pelicula->cat_pel) }}</option>
        <option value="accion">Acción</option>
        <option value="aventura">Aventura</option>
        <option value="animacion">Animación</option>
        <option value="comedia">Comedia</option>
        <option value="drama">Drama</option>
        <option value="documental">Documental</option>
        <option value="fantasia">Fantasía</option>
        <option value="historia">Historia</option>
        <option value="horror">Horror</option>
        <option value="musical">Musical</option>
        <option value="misterio">Misterio</option>
        <option value="romance">Romance</option>
        <option value="ciencia_ficcion">Ciencia Ficción</option>
        <option value="thriller">Thriller</option>
        <option value="western">Western</option>
    </select>
    <br><br>

    <label for="clasificacion-pelicula" class="form-label">Clasificación de la película:</label>
    <select class="form-select" name="clas_pel">
        <option selected value="{{ old('clas_pel', $pelicula->clas_pel) }}">{{ $pelicula->clas_pel }}</option>
        <option value="G">G - Apta para todos</option>
        <option value="PG">PG - Guía parental sugerida</option>
        <option value="PG-13">PG-13 - Guía parental estricta</option>
        <option value="R">R - Restringida</option>
        <option value="NC-17">NC-17 - No apta para menores de 17</option>
    </select>
    <br><br>

    <fieldset>
        <legend>Imagen anterior</legend>
        <img src="/subidas/{{ old('imagen_pel', $pelicula->imagen_pel) }}" width="100px" height="100px">
    </fieldset>

    <fieldset>
      <legend>Foto de la película</legend>
      <input class="form-control" type="file" name="imagen_pel"  id="imageInput"  value="{{ old('imagen_pel', $pelicula->imagen_pel) }}">
    </fieldset>
    <br>

    <fieldset>
      <legend>Previsualización de imagen</legend>
      <img id="preview" alt="Previsualización de la imagen">
      <script src="/js/prev.js"></script>
    </fieldset>
    <br>

    <button type="submit" class="btn btn-success">Guardar cambios</button>
</form>
@endsection

@section('Nombres')
<x-nombres/>
@endsection
