<x-layouts.app>
    <h1>Detalles de la empresa:</h1>
    <h2>{{ $company->nameCompany }}</h2>
    <small>{{ $company->address }}</small>

    <a href="{{ route('companies.index') }}">Regresar</a>
</x-layouts.app>