<form method="post" action="{{  route('registarConsulta') }}">
    @csrf
    <div class="row">
      <div class="form-group col-3">
            <label for="" class="text-secondary">O Paciente</label>
            <select class="form-control" id="pacienteSelect" name="paciente">
                <optgroup label="Selcione o paciente">
                   <option></option>
                    @foreach ($pacientes as $p)
                         <option value="{{ $p->nome }}">{{ $p->nome }}</option>
                    @endforeach 
                </optgroup>
            
            </select>
            @error('paciente_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6">
          <label for="" class="text-secondary">O Médico</label>
          <select class="form-control" id="medicoSelect" name="disponib_medica_id">
              <optgroup label="Selcione o médico">
                <option value=""></option>
                @foreach ($medicos as $m)
                    <option value="{{ $m->id }}">{{ $m->medico }} ( {{ $m->data_dispon }} - {{ $m->hora_inicial }} )</option>
                @endforeach 
              </optgroup>
          
          </select>
          @error('disponib_medico_consulta_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
      </div>

        <div class="form-group col-3 mt-4">
            <button type="submit" class="btn btn-primary mt-1"><i class="fa fa-check"></i> Marcar</button>
        </div>
    </div>
</form>