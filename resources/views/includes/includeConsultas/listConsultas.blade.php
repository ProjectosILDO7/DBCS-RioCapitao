<div class="table-responsive">
    <a href="{{ route('formConsulta') }}" class="btn btn-sm btn-primary mb-2"><i class="fa fa-plus"></i> Marcar consulta</a>

    <table class="table table-sm table-hover table-bordered" id="sampleTable">
        <thead>
          <tr>
            <th>Nº</th>
            <th>Paciente</th>
            <th>Disponibilidade Médica</th>
            <th>Opções</th>
          </tr>
        </thead>

        <tbody>
        @php
            $n=1;
        @endphp
        @foreach($consulta as $cons)
          <tr>
            <td>{{ $n++ }}</td>
            <td>{{ $cons->nome }}</td>
            <td>{{ $cons->data_dispon }}</td>
            <td>
                <a class="mr-2" href="{{ route('dInfo', $cons->id) }}"><i class="fa fa-list text-success"></i></a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>