@csrf
<div class="form-group">
  <label class="control-label">Especialidade</label>
  <input class="form-control" type="text" id="nome_especialidade" name="nome_especialidade" placeholder="Especialidade: " value="{{ $modelo->nome_especialidade ?? old('nome_especialidade') }}">
  @error('nome_especialidade')
    <span class="text-danger small">{{ $message }}</span>
  @enderror
</div> 
                
<div class="form-group mt-2">
  <button class="btn btn-sm btn-primary mt-2"><i class="fa fa-save"></i> Salvar</button>
</div>