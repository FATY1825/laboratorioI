<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Registros Alumnos</title>
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
        <h1 class="text-center">Listado de alumnos</h1>
        <table class="table  table-ligth table-striped table-hover ">
          <thead class="text-center">
            <th>ID</th>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
          
            
          </thead>
          <tbody class="text-center">
             @foreach($alumnos as $alumno)
              <tr>
                <td>{{ $alumno->id}}</td>
                <td>{{ $alumno->Codigo }}</td>
                <td>{{ $alumno->Nombre }}</td>
                <td>{{ $alumno->Apellido }}</td>
                <td>{{ $alumno->Correo }}</td>
                <td>
                    <form action="{{ url('/alumno/'.$alumno->id) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE') }} 
                            <a class="btn btn-success" href="{{ route('alumno.edit', $alumno->id) }}">Editar</a>
                            <input class="btn btn-danger" type="submit" value="Eliminar" onclick="return confirm('Desea eliminar el registro ?')">
                    </form>
                </td>   
             </tr>
            @endforeach
          </tbody>
      </table>
      <a class="btn btn-secondary" href="{{ url('/') }}">Volver </a>
     <a class="btn btn-primary" href="{{ url('alumno/create') }}">Nuevo alumno</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

