<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Formulario de registro</title>
    <style>
        body {
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(90deg, #d53369 0%, #daae51 100%);
        }
    </style>
</head>
<body>
    <div class="container">

        <div class="form-group"> 
            <label  for="MCodigo">Codigo Del Maestro</label>
            <input class="form-control" type="text" name="MCodigo" id="MCodigo" value="{{ isset($maestro)?$maestro->MCodigo:'' }}" required>
        </div>
        <br>

        <div class="form-group">  
            <label for="MNombre">Nombre Del maestro</label>
            <input class="form-control" type="text" name="MNombre" id="MNombre" value="{{ isset($maestro)?$maestro->MNombre:'' }}" required>    
        </div>
        <br>
       
        <div class="form-group"> 
            <label for="MApellido">Apellido Del maestro</label>
            <input class="form-control" type="text" name="MApellido" id="MApellido" value="{{ isset($maestro)?$maestro->MApellido:'' }}" required>
    
        </div>
        <br>
     
        <div class="form-group">  
            <label for="MCorreo">Correo Del maestro</label>
            <input class="form-control" type="text" name="MCorreo" id="MCorreo" value="{{ isset($maestro)?$maestro->MCorreo:'' }}" required>
    
        </div>
        <br>

       
        <div class="form-group">
            <a class="btn btn-secondary" href="{{ url('maestro') }}">Volver</a>
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
       
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>