<div class="card">
    <div class="card-header"><i class="fa fa-list"></i> Lista de especialidades</div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{ route('user.addEspec') }}" class="btn btn-sm btn-primary mb-2"><i class="fa fa-plus"></i> Nova especialidade</a>

            <table class="table table-sm table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Nº</th>
                    <th>Especialidades</th>
                    <th>Opções</th>
                  </tr>
                </thead>

                <tbody>
                @php
                    $n=1;
                @endphp
                @foreach($esp as $especialidade)
                  <tr>
                    <td>{{ $n++ }}</td>
                    <td>{{ $especialidade->nome_especialidade }}</td>
                    <td>
                        <a class="mr-2" href="{{ route('user.editEspec', $especialidade->id) }}"><i class="fa fa-edit text-success"></i></a>
                        <a class="mr-2" href="{{ route('delete.espec', $especialidade->id) }}}"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>