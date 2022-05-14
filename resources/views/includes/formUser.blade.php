<form method="post" action="{{ route('salvar.perfil', auth()->user()->id) }}">
   
    @method('PUT')

    @csrf

    <div class="row mb-4 mb-0">
      <div class="col-md-8 mb-4">
        <label>Primeiro nome</label>
        <input class="form-control" name="name" type="text" value="{{ $name ?? null| old('name') }}">
      @error('name')
        <span class="text-danger small">{{ $message }}</span>
      @enderror
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 mb-4">
        <label>E-mail</label>
        <input class="form-control" name="email" type="text" value="{{ $email ?? null| old('email') }}">
        @error('email')
        <span class="text-danger small">{{ $message }}</span>
        @enderror
      </div>
      <div class="clearfix"></div>
      <div class="col-md-8 mb-4">
        <label>Telemóvel</label>
        <input class="form-control" name="tel" type="text" value="{{ $tel ?? null| old('tel') }}">
        @error('tel')
        <span class="text-danger small">{{ $message }}</span>
        @enderror
      </div>

      <div class="clearfix"></div>
      <div class="col-md-8 mb-4">
        <label>Defnir uma palavra pass</label>
        <input class="form-control" type="password" name="password" type="text">
        @error('password')
        <span class="text-danger small">{{ $message }}</span>
        @enderror
      </div>

      <div class="clearfix"></div>
      <div class="col-md-8 mb-4">
        <label>Repetir senha</label>
        <input class="form-control" type="password" name="senha2" type="text">
        @error('senha2')
        <span class="text-danger small">{{ $message }}</span>
        @enderror
      </div>

      <div class="clearfix hiden"></div>
      <div class="col-md-8 mb-4">
        <label>Status</label>
        <select name="admin" id="" class="form-control">
             @if(auth()->user()->admin== '1')
                <option value="{{ auth()->user()->admin }}">Admin</option>
             @endif
             <option value="0"></option>
             <option value="2">Médico</option>
             <option value="2">Paciente</option>
        </select>
        @error('admin')
        <span class="text-danger small">{{ $message }}</span>
        @enderror
      </div>
    </div>

    <div class="row mb-10">
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i> Salvar</button>
      </div>
    </div>

  </form>