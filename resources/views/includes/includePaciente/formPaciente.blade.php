@csrf

<div class="d-flex justify-content-center">
  <div class="row">
  <div class="form-group col-6">
    <label class="control-label">Nome</label>
    <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome: " value="{{ $paciente->nome ?? old('nome') }}">
    @error('nome')
      <span class="text-danger small">{{ $message }}</span>
    @enderror
  </div>
  
  <div class="form-group col-6">
    <label class="control-label">Data de nascimento</label>
    <input class="form-control" type="date" id="data_nasc" name="data_nasc" placeholder="Data nasc: " value="{{ $paciente->data_nasc ?? old('data_nasc') }}">
    @error('data_nasc')
      <span class="text-danger small">{{ $message }}</span>
    @enderror
  </div>
  
  <div class="form-group col-6">
    <label class="control-label">Gênero</label>
    <select class="form-control" type="text" id="genero" name="genero">
      <option></option>
      <option value="M">Masculino</option>
      <option value="F">Femenino</option>
    </select>
    @error('genero')
      <span class="text-danger small">{{ $message }}</span>
    @enderror
  </div>
  
  <div class="form-group col-6">
    <label class="control-label">Endereço</label>
    <input class="form-control" type="text" id="endereco" name="endereco" placeholder="Endereço: " value="{{ $paciente->endereco ?? old('endereco') }}">
    @error('endereco')
      <span class="text-danger small">{{ $message }}</span>
    @enderror
  </div>
  
  <div class="form-group col-6">
    <label class="control-label">Telemóve</label>
    <input class="form-control" type="text" id="telemovel" name="telemovel" placeholder="Telemóvel: " value="{{ $paciente->telemovel ?? old('telemovel') }}">
    @error('telemovel')
      <span class="text-danger small">{{ $message }}</span>
    @enderror
  </div>
  
  <div class="form-group col-6">
    <label class="control-label">E-mail</label>
    <input class="form-control" type="text" id="email" name="email" placeholder="E-mail: " value="{{ $paciente->email ?? old('email') }}">
    @error('email')
      <span class="text-danger small">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group col-6">
    <label class="control-label">Código de acesso</label>
    <input class="form-control" type="text" id="email" name="password" placeholder="Senha: " value="{{ $key ?? old('password') }}">
    @error('password')
      <span class="text-danger small">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group col-6">
    <div class="form-group mt-4 text-right">
      <button class="btn btn-sm btn-primary mt-2"><i class="fa fa-save"></i> Salvar</button>
    </div>
  </div>
                  
  
 
</div>

</div>

