<h1 class="text-center">Editar Registro de Maestro</h1>

<form action="{{ url('/maestro/'.$maestro->id) }}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    @include('maestro.form')
</form>