<x-layouts.app>
    <header class="text-center">
        <h1 class="text-center text-info">Crear Nuevo Dispositivo POS</h1>
    </header>
    <main class="container-sm bg-white px-4 py-4 border m-10 my-4 rounded">

        <div class="d-flex row">
            <form action="{{ route('terminals.store') }}" method="POST" class="">
                @csrf
                    <div class="row my-4">
                        @include('terminals.form-fields')
                    </div>
                <div class="form-group text-center w-100">
                    <button type="submit" class="btn btn-success w-50">Crear POS</button>
                </div>
            </form>
        </div>
    </main>
</x-layouts.app>