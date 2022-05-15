<div class="card">
    <div class="card-header"><i class="fa fa-list"></i> Lista de quartos</div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{ route('addQuarto') }}" class="btn btn-sm btn-primary mb-2"><i class="fa fa-plus"></i> Novo quarto</a>

            <table class="table table-sm table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Nº</th>
                    <th>Nº de quarto</th>
                    <th>Nº de camas</th>
                    <th>Opções</th>
                  </tr>
                </thead>

                <tbody>
                @php
                    $n=1;
                @endphp
                @foreach($quartos as $quarto)
                  <tr>
                    <td>{{ $n++ }}</td>
                    <td>{{ $quarto->num_quart }}</td>
                    <td>{{ $quarto->num_cama }}</td>
                    <td>
                        <a class="mr-2" href="{{ route('quartoEdit', $quarto->id) }}"><i class="fa fa-edit text-success"></i></a>
                        <a class="mr-2" href="{{ route('quartoDelete', $quarto->id) }}}"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>