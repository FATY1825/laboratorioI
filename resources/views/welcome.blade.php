<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Pagina Principal</title>
    <style>
        header {
            width: 100%;
            height: 100vh;
            background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
        }
    </style>
</head>
<body>
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container px-5">
                <br>
                <h1 class="masthead-heading mb-0 text-white">Bienvenidos</h1><br><br>
               
                <a class="btn btn-dark" href="{{ url('maestro') }}">Ver listado de  maestro</a>
                <a class="btn btn-dark" href="{{ url('alumno') }}">Ver listado de  alumno</a>
            </div>
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script></body>
</html>

