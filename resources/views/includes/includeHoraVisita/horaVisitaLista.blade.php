<div class="card">
    <div class="card-header"><i class="fa fa-list"></i> Lista de quartos</div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{ route('addHoraVisita') }}" class="btn btn-sm btn-primary mb-2"><i class="fa fa-plus"></i> Novo quarto</a>

            <table class="table table-sm table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Nº</th>
                    <th>Horas de visita</th>
                    <th>Dia de visita</th>
                    <th>Período</th>
                    <th>Opções</th>
                  </tr>
                </thead>

                <tbody>
                @php
                    $n=1;
                @endphp
                @foreach($horas as $hora)
                  <tr>
                    <td>{{ $n++ }}</td>
                    <td>{{ $hora->hora_visita }}</td>
                    <td>{{ $hora->dia_visita }}</td>
                    <td>{{ $hora->periodo }}</td>
                    <td>
                        <a class="mr-2" href="{{ route('horaVisitaDelete', $hora->id) }}}"><i class="fa fa-trash text-danger"></i></a>
                        <a class="mr-2" href="{{ route('horaVisitaInfo', $hora->id) }}}"><i class="fa fa-info-circle text-secondary"></i></a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>