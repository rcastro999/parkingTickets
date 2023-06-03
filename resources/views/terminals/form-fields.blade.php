    <div class="col-4">
        <label for="imei" class="form-label">Imei:</label>
        <input type="text" name="imei" class="form-control" id="imei" value="{{ old('imei', $terminal->imei) }}">
        @error('imei')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-4">
        <label for="datePurchase" class="form-label">Fecha de Compra:</label>
        <input type="date" name="datePurchase" class="form-control" id="datePurchase" value="{{ old('datePurchase', $terminal->datePurchase) }}">
        @error('datePurchase')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-4">
        <label for="idCompany" class="form-label">Empresa:</label>
        <select name="idCompany" class="form-select" id="idCompany">
            <option value="0 {{ old('idCompany') == 0 ? 'selected' : '' }}">Seleccione una empresa</option>
            @foreach ($companies as $company)
            <option value="{{ $company->idCompany}}" {{ old('idCompany') == $company->idCompany ? 'selected' : '' }}>{{ $company->nameCompany }}</option>
            @endforeach
        </select>
        @error('idCompany')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
