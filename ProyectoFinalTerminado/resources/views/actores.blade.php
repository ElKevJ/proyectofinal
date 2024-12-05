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
                    <a class="nav-link active" aria-current="page" href="/peliculas">Películas</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ordenamiento
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/ordenaract/nom_act">Nombre (asc)</a></li>
                        <li><a class="dropdown-item" href="/ordenaract/pelfa_act">Película famosa (asc)</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <form action="{{ route('filtrarAct') }}" method="get" class="input-group mb-3">
            <input class="form-control me-1" type="search" placeholder="Buscar al actor(a)"
                   value="{{ request('buscar') }}" name="buscar">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
    </div>
</nav>
@endsection

@section('noti')
@include('alertas.mensaje')
@endsection

@section('Cartas')
<div class="container">
    <x-tar_act :arreglo="$actores"/>
</div>
@endsection

</body>
</html>

