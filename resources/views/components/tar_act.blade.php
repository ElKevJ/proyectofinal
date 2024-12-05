<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de los Actores</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('/imagenes/telon.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            margin: 0;
            padding: 20px;
        }

        .contenedor {
            display: flex; 
            flex-wrap: wrap; 
            gap: 20px; 
            justify-content: center; 
        }

        .caja {
            background-color: rgba(51, 1, 1, 0.5);
            border-radius: 10px;
            box-shadow: 0 5px 5px #6b0000d8;
            padding: 20px;
            width: 300px; 
            display: flex;
            flex-direction: column;
            transition: transform 0.2s ease;
        }

        .caja:hover {
            transform: scale(1.05);
        }

        .caja img {
            max-width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
            border: 5px solid #09031d;
        }

        .caja p {
            margin: 10px 0;
            line-height: 1.5;
        }

        .caja strong {
            color: white;
        }

        .no-foto {
            text-align: center;
            color: white;
            font-style: italic;
        }

        button {
            color: white;
            background-color: rgba(102, 46, 0, 0.541);
            padding: 15px 30px;
            font-size: 16px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .lol {
            color: white;
            background-color: rgba(185, 3, 3, 0.541);
            font-style: italic;
            padding: 10px;
            border-radius: 3px;
        }

        .card-body a {
            color: white;
            text-decoration: none;
            padding: 5px;
            transition: color 0.3s ease;
        }

        .card-body a:hover {
            color: #ff0000;
        }
    </style>
</head>

<body>
    <div class="contenedor">
        @foreach ($arreglo as $actor)
        <div class="caja">
            <p>
                <button>Nombre</button>
                <div class="lol">{{ $actor->nom_act }}</div>
            </p>
            <p>
                <strong><button>Película famosa</button></strong>
                <div class="lol">{{ $actor->pelfa_act }}</div>
            </p>
            <p>
                <strong><button>Descripción</button></strong>
                <div class="lol">{{ $actor->desc_act }}</div>
            </p>
            <p class="no-foto">
                <strong><button>Foto</button></strong>
                <div class="lo">
                    <img src="/subidas/{{ $actor->imagen_act }}" alt="Foto de {{ $actor->nom_act }}">
                </div>
            </p>
            <div class="card-body">
                <a href="{{ route('editaractores', $actor) }}" class="card-link">
                    <button  type="submit" class="btn btn-danger">Editar</button>
                </a>
                <form action="{{ route('borraract', $actor) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>


<!--  @foreach ($arreglo as $dato)
<div class="card" data-bs-theme="dark" style="width: 18rem;">
    <img src="/subidas/{{ $dato->imagen_act }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"> {{ $dato->nom_act }}</h5>
      <p class="card-text">{{ $dato->desc_act }}</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ $dato->pelfa_act }}</li>
    </ul>
    <div class="card-body">
      <a href="{{route('editaractores',$dato)}}" class="card-link">Editar</a>

      <form action="{{route('borraract',$dato)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
    </div>
  </div> 
  @endforeach
 -->