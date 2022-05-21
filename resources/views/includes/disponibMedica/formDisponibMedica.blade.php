<form method="post" action="{{  route('addDisponibilidade') }}">
    @csrf
    <div class="row">
        <input type="text" name="medico_id" class="form-control" value="{{ $medicoId ?? NULL }}" hidden>
        <input type="text" name="medico" class="form-control" value="{{ $medico ?? NULL }}" hidden>
    
        <div class="form-group col-3">
            <label class="text-secondary">Data de disponibilidade de consulta</label>
            <input type="date" class="form-control" name="data_dispon">
            @error('data_dispon')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-3">
            <label class="text-secondary">Hora inicial</label>
            <input type="time" class="form-control" name="hora_inicial">
            @error('hora_inicial')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-3">
            <label class="text-secondary">Hora final</label>
            <input type="time" class="form-control" name="hora_final">
            @error('hora_final')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group col-3">
            <label class="text-secondary">Marcar para especialidades de:</label>
            <select class="form-control" name="especialidade" id="">
                    <option></option>
                @foreach ($especialidades as $p)
                    <option value="{{ $p->nome_especialidade ?? NULL }}">{{ $p->nome_especialidade ?? NULL }}</option>
                @endforeach
            </select>
            @error('especialidade')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-3">
            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Marcar</button>
        </div>
    </div>
</form>