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
<form action="{{ route('actualizaractores', $actores) }}" method="POST" enctype="multipart/form-data">
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
            Nombre del actor:
            <input class="form-control" type="text" name="nom_act" value="{{old('nom_act',$actores->nom_act)}}">
        </label>
        <br><br>
        
        <label class="form-label">
            Peliculas famosas:
            <input class="form-control" type="text" name="pelfa_act" value="{{old('pelfa_act',$actores->pelfa_act)}}">
        </label>
        <br><br>
       
        <label class="form-label">
            Descripcion de actor:
            <br>
            <input class="form-control" type="text" name="desc_act" value="{{old('desc_act',$actores->desc_act)}}">
        </label>
        
        <br><br>
        
        <fieldset>
            <legend>Imagen anterior</legend>
                <img src="/subidas/{{old('imagen_act',$actores->imagen_act)}}" width="50px" height="50px">
        </fieldset>
 
        <fieldset>
          <legend>Foto del actor</legend>
          <div class="mb-3">
              <label for="imageInput" class="form-label">Default file input example</label>
              <input class="form-control" type="file" name="imagen_act" id="imageInput"  value="/subidas/{{old('imagen_act',$actores->imagen_act)}}">
            </div>
          <br><br>    
      </fieldset>
      <fieldset>
        <legend>Previsualizacion de imagen</legend>
        <img id="preview" alt="Previsualización de la imagen">
        <script src="/js/prev.js"></script>
      </fieldset>
        <button type="submit" class="btn btn-success">Guardar cambios</button>
    </form> 
@endsection

@section('Nombres')
<x-nombres/>
@endsection


