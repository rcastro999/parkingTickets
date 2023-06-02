<x-layouts.app>

    <header class="text-center">
        <h1 class="text-center text-info">Empresas</h1>
        <a href="{{ route('companies.create') }}" class="btn btn-success">Crear Nueva Empresa</a>
    </header>
    <main class="bg-white d-flex container px-4 py-4 border my-4 rounded">
        <div class="container-sm">
            <table class="table table-responsive table-sm table-striped table-bordered border-dark">
                <thead>
                    <th class="text-center">ID</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Dirección</th>
                    <th class="text-center">Acciones</th>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($companies as $company)
                        <tr>
                            <td class="text-center">{{ $company->idCompany }}</td>
                            <td><a href="{{ route('companies.show', $company) }}">{{ $company->nameCompany }}</a></td>
                            <td>{{ $company->address }}</td>
                            <td class="text-center"><a href="{{ route('companies.edit', $company) }}" class="btn btn-warning">Editar</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</x-layouts.app>