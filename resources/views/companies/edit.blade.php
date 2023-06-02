<x-layouts.app>
    <h1>Editar detalles de la empresa:</h1>

    <form action="{{ route('companies.update', $company) }}" method="POST">

        @csrf
        @method('PATCH')
        @include('companies.form-fields')

        <button type="submit" class="btn btn-success">Actualizar</button>

    </form>
    <a href="{{ route('companies.index') }}">Regresar</a>

</x-layouts.app>