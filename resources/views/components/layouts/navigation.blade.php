<nav class="navbar navbar-expand-lg bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand text-light fw-lighter" href="#">Parking Agrosalva</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link fw-lighter {{ request()->routeIs('tickets.index') ? 'text-info bg-dark shadow-lg rounded' : 'text-light' }}" href="{{ route('tickets.index') }}">Ver Tickets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-lighter {{ request()->routeIs('companies.index') ? 'text-info bg-dark shadow-lg rounded' : 'text-light' }}" href="{{ route('companies.index') }}">Empresas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-lighter {{ request()->routeIs('terminals.index') ? 'text-info bg-dark shadow-lg rounded' : 'text-light' }}" href="{{ route('terminals.index') }}">POS</a>
          </li>
      </div>
    </div>
  </nav>