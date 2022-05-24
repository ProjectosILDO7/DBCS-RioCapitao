<div class="table-responsive">
    <a href="{{ route('formConsulta') }}" class="btn btn-sm btn-primary mb-2"><i class="fa fa-plus"></i> Marcar consulta</a>

    <table class="table table-sm table-hover table-bordered" id="sampleTable">
        <thead>
          <tr>
            <th>Nº</th>
            <th>Pacientes</th>
            <th>Status da consulta</th>
          </tr>
        </thead>

        <tbody>
          @forelse ($consultas as $cons)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $cons->paciente }}</td>
              <td>
                  <a class="mr-2" href="{{ route('statusConsulta', [$cons->disponib_medica_id, $cons->paciente]) }}"><i class="fa fa-list text-success"></i></a>
              </td>
            </tr>
          @empty
              <tr>
                <td colspan="3"><span class="text-danger">De momento não tem consultas maracadas</span></td>
              </tr>
          @endforelse
        </tbody>
      </table>