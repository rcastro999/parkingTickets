<div class="mb-3">
    <label for="nameCompany" class="form-label">Nombre Empresa:</label>
    <input type="text" class="form-control" name="nameCompany" id="nameCompany" placeholder="Nombre" value="{{ old('nameCompany', $company->nameCompany) }}">
    @error('nameCompany')
        <small class="text-danger">{{ $message }}</small>
    @enderror
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Dirección:</label>
    <input type="text" class="form-control" name="address" id="address" value="{{ old('address', $company->address) }}">
    @error('address')
        <small class="text-danger">{{ $message }}</small>
    @enderror
  </div>