<h1 class="text-center">Editar Registro de alumno</h1>

<form action="{{ url('/alumno/'.$alumno->id) }}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    @include('alumno.form')
</form>