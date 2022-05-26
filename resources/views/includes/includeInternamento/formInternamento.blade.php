@csrf

<div class="justify-content-center">

  <div class="row">

        <div class="form-group col-4">
            <label for="" class="text-secondary">O Paciente</label>
            <select class="form-control" id="pacienteSelect" name="paciente_id">
                <optgroup label="Selcione o paciente">
                <option></option>
                    @foreach ($pacientes as $p)
                        <option value="{{ $p->id }}">{{ $p->nome }}</option>
                    @endforeach 
                </optgroup>
            
            </select>
            @error('paciente_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
  
        <div class="form-group col-4">
            <label for="" class="text-secondary">O nº do quarto</label>
            <select class="form-control" id="quartoSelect" name="quarto_de_internamentos_id">
                <optgroup label="Selcione o quarto">
                <option></option>
                    @foreach ($quartos as $q)
                        <option value="{{ $q->id }}">{{ $q->num_quart }}</option>
                    @endforeach 
                </optgroup>
            
            </select>
            @error('quarto_de_internamentos_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
  
        <div class="form-group col-4">
            <label for="" class="text-secondary">O médico responsável</label>
            <select class="form-control" id="medicoSelect" name="medico_respons">
                <optgroup label="Selcione o médico">
                <option></option>
                    @foreach ($medicos as $p)
                        <option value="{{ $p->nome }}">{{ $p->nome }}</option>
                    @endforeach 
                </optgroup>
            
            </select>
            @error('medico_respons')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group ml-3">
            <div class="form-group text-right">
            <button class="btn btn-bock btn-primary mt-1"><i class="fa fa-check"></i> Internar</button>
            </div>
        </div>
                  
  
 
    </div>

</div>

