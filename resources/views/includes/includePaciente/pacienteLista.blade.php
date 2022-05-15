<div class="card">
    <div class="card-header"><i class="fa fa-list"></i> Lista de pacientes</div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{ route('addPaciente') }}" class="btn btn-sm btn-primary mb-2"><i class="fa fa-plus"></i> Novo paciente</a>

            <table class="table table-sm table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Nº</th>
                    <th>Pacientes</th>
                    <th>Telemóvel</th>
                    <th>Opções</th>
                  </tr>
                </thead>

                <tbody>
                @php
                    $n=1;
                @endphp
                @foreach($pac as $pc)
                  <tr>
                    <td>{{ $n++ }}</td>
                    <td>{{ $pc->nome }}</td>
                    <td>{{ $pc->telemovel }}</td>
                    <td>
                        <a class="mr-2" href="{{ route('pacienteEdit', $pc->id) }}"><i class="fa fa-edit text-success"></i></a>
                        <a class="mr-2" href="{{ route('pacienteDelete', $pc->id) }}}"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>