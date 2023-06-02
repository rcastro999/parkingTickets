<x-layouts.app>

    <header class="text-center">
        <h1 class="text-center text-info">Dispositivos POS</h1>
        <a href="{{ route('terminals.create') }}" class="btn btn-success">Crear Nueva Empresa</a>
    </header>
    <main class="bg-white d-flex container px-4 py-4 border my-4 rounded">
        <div class="container-sm">
            <table class="table table-responsive table-sm table-striped table-bordered border-dark">
                <thead>
                    <th class="text-center">ID</th>
                    <th class="text-center">IMEI</th>
                    <th class="text-center">Fecha de Compra</th>
                    <th class="text-center">Empresa</th>
                    <th class="text-center">Acciones</th>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($terminals as $terminal)
                        <tr>
                            <td class="text-center">{{ $terminal->idTerminal }}</td>
                            <td class="text-center"><a href="{{ route('terminals.show', $terminal) }}">{{ $terminal->imei }}</a></td>
                            <td class="text-center">{{ $terminal->datePurchase }}</td>
                            <td class="text-center">{{ $terminal->nameCompany }}</td>
                            <td class="text-center"><a href="#" class="btn btn-warning">Editar</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</x-layouts.app>