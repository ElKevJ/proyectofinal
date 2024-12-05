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

<form action="/agregarpeli" method="POST" enctype="multipart/form-data">

    @csrf
    <br>
    <label class="form-label">
        Nombre de la pelicula:
        <input class="form-control" type="text" name="nom_pel" value={{old('nom_pel','Uwu')}}>
    </label>
    <br><br>
    

   
    <label class="form-label">
        Sinopsis de la pelicula:
        <br>
        <input class="form-control" type="text" name="sinop_pel" value={{old('sinop_pel','Sinopsis')}}>
    </label>
    <br><br>

    <label class="form-label">
        Duracion de la pelicula:
        <br>
        <input class="form-control" type="text" name="dura_pel" value={{old('dura_pel','1:40')}}>
    </label>
    <br><br>

    <label for="categoria-pelicula">
        Selecciona una categoría de película:
        <select class="form-select" aria-label="Default select example" id="categoria-pelicula" name="cat_pel"> 
        <option selected value="accion">Acción</option> 
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
        </label> 
    <br><br>
    <label for="clasificacion-pelicula">Selecciona una clasificación de película:
    <select id="clasificacion-pelicula" class="form-select" aria-label="Default select example" name="clas_pel"> 
        <option selected value="G">G - Apta para todos</option> 
        <option value="PG">PG - Guía paternal sugerida</option>
         <option value="PG-13">PG-13 - Guía paternal estricta</option>
          <option value="R">R - Restringida</option> 
          <option value="NC-17">NC-17 - No apta para menores de 17</option> 
        </select>
    </label> 

    <fieldset>
        <legend>Foto de la pelicula</legend>
        <div class="mb-3">
            <label for="imageInput" class="form-label">Default file input example</label>
            <input class="form-control" type="file" name="imagen_pel" id="imageInput"  value="/subidas/{{old('imagen_pel')}}">
          </div>
        <br><br>    
    </fieldset>
    <fieldset>
      <legend>Previsualizacion de imagen</legend>
      <img id="preview" alt="Previsualización de la imagen">
      <script src="/js/prev.js"></script>
    </fieldset>
    <button type="submit" class="btn btn-success">Enviar</button>
</form> 
    
@endsection

@section('Nombres')
<x-nombres/>
@endsection
