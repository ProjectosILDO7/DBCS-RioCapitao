<form method="post" action="{{ route('salvar.perfil', auth()->user()->id) }}">
   
    @method('PUT')

    @csrf

      <div class="form-group col-md-8">
        <label>Primeiro nome</label>
        <input class="form-control" name="name" type="text" value="{{ auth()->user()->name ?? null| old('name') }}">
      @error('name')
        <span class="text-danger small">{{ $message }}</span>
      @enderror
      </div>


      <div class="form-group col-md-8">
        <label>E-mail</label>
        <input class="form-control" name="email" type="text" value="{{ auth()->user()->email ?? null| old('email') }}">
        @error('email')
        <span class="text-danger small">{{ $message }}</span>
        @enderror
      </div>
      
      <div class="form-group col-md-8">
        <label>Telemóvel</label>
        <input class="form-control" name="tel" type="text" value="{{ auth()->user()->tel ?? null| old('tel') }}">
        @error('tel')
        <span class="text-danger small">{{ $message }}</span>
        @enderror
      </div>

      
      <div class="form-group col-md-8">
        <label>Redefinir palavra pass</label>
        <input class="form-control" type="password" name="password" type="text">
        @error('password')
        <span class="text-danger small">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group col-md-8">
        <label>Status</label>
        <select name="admin" id="" class="form-control">
             @if(auth()->user()->admin== '1')
                <option value="{{ auth()->user()->admin }}">Admin</option>
             @endif
             @if(auth()->user()->admin== '2')
                <option value="{{ auth()->user()->admin }}">Medico</option>
             @endif
             @if(auth()->user()->admin== '3')
                <option value="{{ auth()->user()->admin }}">Paciente</option>
             @endif
        </select>
        @error('admin')
        <span class="text-danger small">{{ $message }}</span>
        @enderror
      </div>
    </div>


      <div class="form-group col-md-12 ml-3">
        <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i> Salvar</button>
      </div>


  </form>
