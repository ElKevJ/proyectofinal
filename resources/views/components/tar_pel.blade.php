<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Películas</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('/imagenes/cine.jpg');
            color: #fff; 
            margin: 0;
            padding: 20px;
        }

        .contenedor {
            display: flex;
            justify-content: center;
            gap: 20px;
            align-items: center;
        }

        .card {
            width: 300px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            background-color: rgba(0, 0, 0, 0.85); 
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 30px;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .card img:hover {
            transform: scale(1.1);
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #1e2a47; 
        }

        .card-text {
            color: #b0b0b0; 
            margin-bottom: 15px;
            font-size: 1rem;
        }

        .list-group-item {
            font-size: 0.9rem;
            color: #ddd; 
            border: none;
            background-color: rgba(0, 0, 0, 0.7); 
        }

        .list-group-item:nth-child(even) {
            background-color: rgba(0, 0, 0, 0.6); 
        }

        .list-group-item:first-child {
            font-weight: bold;
        }

        .card-body a {
            color: #007bff; 
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .card-body a:hover {
            color: #0056b3; 
        }

        .btn-danger {
            background-color: #003366; 
            border: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #002244;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        @foreach ($arreglo as $pelicula)
        <div class="card">
            <img src="/subidas/{{ $pelicula->imagen_pel }}" class="card-img-top" alt="Imagen de {{ $pelicula->nom_pel }}">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Título: {{ $pelicula->nom_pel }}</li>
                <li class="list-group-item">Sinopsis: {{ $pelicula->sinop_pel }}</li>
                <li class="list-group-item">Duración: {{ $pelicula->dura_pel }}</li>
                <li class="list-group-item">Categoría: {{ ucfirst($pelicula->cat_pel) }}</li>
                <li class="list-group-item">Clasificación: {{ $pelicula->clas_pel }}</li>
            </ul>
            <div class="card-body">
                <a href="{{ route('editarpelicula', $pelicula) }}" type="submit" class="btn btn-danger">Editar</a>
                <form action="{{ route('borrarpelicula', $pelicula) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
