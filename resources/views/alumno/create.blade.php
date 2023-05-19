<h1 class="text-center">Nuevo registro de alumnos</h1>

<form action="{{ url('/alumno') }}" method="POST">
    @csrf

    @include('alumno.form')
</form>