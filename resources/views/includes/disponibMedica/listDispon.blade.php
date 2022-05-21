<div class="table-responsive">
    <a href="{{ route('formDisponibilidade') }}" class="btn btn-sm btn-primary mb-2"><i class="fa fa-plus"></i> Marcar disponibilidade</a>

    <table class="table table-sm table-hover table-bordered" id="sampleTable">
        <thead>
          <tr>
            <th>Nº</th>
            <th>Data Marcada</th>
            <th>Hora inicial</th>
            <th>Hora final</th>
            <th>Especialidade</th>
            <th>Opções</th>
          </tr>
        </thead>

        <tbody>
        @php
            $n=1;
        @endphp
        @foreach($dispo as $d)
          <tr>
            <td>{{ $n++ }}</td>
            <td>{{ $d->data_dispon }}</td>
            <td>{{ $d->hora_inicial }}</td>
            <td>{{ $d->hora_final }}</td>
            <td>{{ $d->especialidade }}</td>
            <td>
                <a class="mr-2" href="{{ route('dDeleteConfirm', $d->id) }}"><i class="fa fa-trash text-danger"></i></a>
                <a class="mr-2" href="{{ route('dInfo', $d->id) }}"><i class="fa fa-list text-success"></i></a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>