<x-layouts.app>
    <h2>Creando nueva empresa:</h2>
    <form action="{{ route('companies.store') }}" method="POST">
        @csrf
        @include('companies.form-fields')
        <button type="submit" class="btn btn-success">Crear</button>
    </form>
    <a href="{{ route('companies.index') }}">Regresar</a>
</x-layouts.app>