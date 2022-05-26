<div class="table-responsive">
    <table class="table table-sm table-hover table-bordered" id="sampleTable">
        <thead>
          <tr>
            <th>Nº</th>
            <th>Médicos</th>
            <th>Data disponível</th>
            <th>Hora inicial da consulta</th>
            <th>Hora final da consulta</th>

          </tr>
        </thead>

        <tbody>
          @forelse ($medicos as $med)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $med->medico }}</td>
              <td>{{ $med->data_dispon }}</td>
              <td>{{ $med->hora_inicial }}</td>
              <td>{{ $med->hora_final }}</td>
            </tr>
          @empty
              <tr>
                <td colspan="3"><span class="text-danger">De momento nenhum médico registou sua disponibilidade</span></td>
              </tr>
          @endforelse
        </tbody>
      </table>