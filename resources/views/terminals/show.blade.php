<x-layouts.app>
    <h1>Detalles del Dispositivo POS:</h1>
    <div class="card">
        <div class="card-header">
          ID POS: {{ $terminal->idTerminal }}
        </div>
        <div class="card-body">
          <h5 class="card-title">Imei POS: {{ $terminal->imei }}</h5>
          <p class="card-text">Fecha de Compra: {{ $terminal->datePurchase }}</p>
          <p class="card-text">Empresa: {{ $terminal->nameCompany }}</p>
          <a href="{{ route('terminals.index') }}" class="btn btn-primary">Regresar</a>
        </div>
      </div>


    
</x-layouts.app>