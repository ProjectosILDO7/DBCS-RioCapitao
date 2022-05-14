<div class="card">
    <div class="card-header"><i class="fa fa-list"></i> Lista dos médicos</div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{ route('addMedico') }}" class="btn btn-sm btn-primary mb-2"><i class="fa fa-plus"></i> Novo médico</a>

            <table class="table table-sm table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Nº</th>
                    <th>Médico</th>
                    <th>Telemóvel</th>
                    <th>Opções</th>
                  </tr>
                </thead>

                <tbody>
                @php
                    $n=1;
                @endphp
                @foreach($med as $medico)
                  <tr>
                    <td>{{ $n++ }}</td>
                    <td>{{ $medico->nome }}</td>
                    <td>{{ $medico->telefone }}</td>
                    <td>
                        <a class="mr-2" href="{{ route('medicoEdit', $medico->id) }}"><i class="fa fa-edit text-success"></i></a>
                        <a class="mr-2" href="{{ route('medicoDelete', $medico->id) }}}"><i class="fa fa-trash text-danger"></i></a>
                        <a class="mr-2" href="{{ route('medicoInfo', $medico->id) }}}"><i class="fa fa-info-circle text-success"></i></a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>