<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Web</title>
    <link rel="stylesheet" href="/estilos/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/76773d901e.js" crossorigin="anonymous"></script>
</head>
 <body>
    <div>
        @yield('Titulo')
    </div>
    <div>

        @yield('noti')

    </div>
    <div>
        @yield('rota')
    </div>
    <div class="fondo">
        @yield('Menu')
    </div>
    <div class="card-container">
        @yield('Cartas')
    </div>
    <div id="formula">
        @yield('formulario')
    </div>
    <div>
        @yield('Nombres')
    </div>

</body>
</html>