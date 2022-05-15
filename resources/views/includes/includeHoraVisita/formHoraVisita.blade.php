@csrf

<div class="d-flex justify-content-center">
  <div class="row">
  <div class="form-group col-3">
    <label class="control-label">horas para visitas</label>
    <input class="form-control" type="time" id="hora_visita" name="hora_visita" placeholder="Horas para visita: " value="{{ $hora->hora_visita ?? old('hora_visita') }}">
    @error('hora_visita')
      <span class="text-danger small">{{ $message }}</span>
    @enderror
  </div>
  
  <div class="form-group col-3">
    <label class="control-label">Dia de visita</label>
    <select class="form-control" type="date" id="dia_visita" name="dia_visita">
        <option value="Domingo">Domingo</option>
        <option value="Segunda-feira">Segunda-feira</option>
        <option value="Terça-feira">Terça-feira</option>
        <option value="Quarta-feira">Quarta-feira</option>
        <option value="Quinta-feira">Quinta-feira</option>
        <option value="Sexta-feira">Sexta-feira</option>
        <option value="Sábado">Sábado</option>
    </select>
    @error('dia_visita')
      <span class="text-danger small">{{ $message }}</span>
    @enderror
  </div>
  
  <div class="form-group col-3">
    <label class="control-label">Período para visita</label>
    <input class="form-control" type="text" id="periodo" name="periodo" placeholder="Período: " value="{{ $hora->periodo ?? old('periodo') }}">    
    @error('periodo')
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

