@csrf

<div class="d-flex justify-content-center">
  <div class="row">
  <div class="form-group col-3">
    <label class="control-label">Número do quarto</label>
    <input class="form-control" type="text" id="num_quart" name="num_quart" placeholder="Nº do quarto: " value="{{ $quarto->num_quart ?? old('num_quart') }}">
    @error('num_quart')
      <span class="text-danger small">{{ $message }}</span>
    @enderror
  </div>
  
  <div class="form-group col-3">
    <label class="control-label">Número de cama</label>
    <input class="form-control" type="text" id="num_cama" name="num_cama" placeholder="Nº de camas: " value="{{ $quarto->num_cama ?? old('num_cama') }}">
    @error('num_cama')
      <span class="text-danger small">{{ $message }}</span>
    @enderror
  </div>
  
  <div class="form-group col-3">
    <label class="control-label">Piso</label>
    <input class="form-control" type="text" id="piso" name="piso" placeholder="Piso nº: " value="{{ $quarto->piso ?? old('piso') }}">    
    @error('piso')
      <span class="text-danger small">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group">
    <div class="form-group mt-4 text-right">
      <button class="btn btn-bock btn-primary mt-1"><i class="fa fa-save"></i> Salvar</button>
    </div>
  </div>
                  
  
 
</div>

</div>

