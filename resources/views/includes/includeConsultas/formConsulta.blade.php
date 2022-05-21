<form method="post" action="{{  route('registarConsulta') }}">
    @csrf
    <div class="row">
      <div class="form-group col-3">
            <label for="" class="text-secondary">Paciente</label>
            <select class="form-control" id="pacienteSelect" multiple="">
                <optgroup label="Selcione o paciente">
                    @foreach ($pacientes as $p)
                         <option value="{{ $p->id }}">{{ $p->nome }}</option>
                    @endforeach 
                </optgroup>
            
            </select>

        </div>

        <div class="form-group col-6">
          <label for="" class="text-secondary">O Médico</label>
          <select class="form-control" id="medicoSelect" multiple="">
              <optgroup label="Selcione o médico">
                @foreach ($medicos as $m)
                    <option value="{{ $m->id }}">{{ $m->medico }} ( {{ $m->data_dispon }} - {{ $m->hora_inicial }} )</option>
                @endforeach 
              </optgroup>
          
          </select>
          
      </div>

        <div class="form-group col-3 mt-4">
            <button type="submit" class="btn btn-primary mt-1"><i class="fa fa-check"></i> Marcar</button>
        </div>
    </div>
</form>