@csrf
<div class="form-group">
  <label class="control-label">Nome</label>
  <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome: " value="{{ $medico->nome ?? old('nome') }}">
  @error('nome')
    <span class="text-danger small">{{ $message }}</span>
  @enderror
</div>

<div class="form-group">
  <label class="control-label">Telemóvel</label>
  <input class="form-control" type="text" id="telefone" name="telefone" placeholder="Telemóvel: " value="{{ $medico->telefone ?? old('telefone') }}">
  @error('telefone')
    <span class="text-danger small">{{ $message }}</span>
  @enderror
</div>

<div class="form-group">
  <label class="control-label">Especialidade</label>
  <select class="form-control" name="especialidade[]" multiple>
    @foreach ($esp as $e)
        <option value="{{ $e->id }}"
          @if (old('especialidade'))
              {{ is_array($e->id, old('especialidade')) ? 'selected' : '' }}
          @else
              @isset($medico)
              {{ $medico->especialidades->contains($medico->id) ? 'selected': '' }}
              @endisset
          @endif
          
          >{{ $e->nome_especialidade }}</option>
    @endforeach
  </select>
  @error('especialidade')
    <span class="text-danger small">{{ $message }}</span>
  @enderror
</div>

<div class="form-group">
  <label class="control-label">E-mail</label>
  <input class="form-control" type="text" id="email" name="email" placeholder="E-mail: " value="{{ $medico->email ?? old('email') }}">
  @error('email')
    <span class="text-danger small">{{ $message }}</span>
  @enderror
</div>

<div class="form-group">
  <label class="control-label">Código de acesso gerado</label>
  <input class="form-control" type="text" id="password" name="password" placeholder="Senha: " value="{{ $key ?? old('email') }}">
  @error('password')
    <span class="text-danger small">{{ $message }}</span>
  @enderror
</div>
                
<div class="form-group mt-2">
  <button class="btn btn-sm btn-primary mt-2"><i class="fa fa-save"></i> Salvar</button>
</div>