<h1 class="text-center">Nuevo registro de Maestro</h1>

<form action="{{ url('/maestro') }}" method="POST">
    @csrf

    @include('maestro.form')
</form>