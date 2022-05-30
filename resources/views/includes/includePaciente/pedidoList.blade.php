<div class="card">
    <div class="card-header"><i class="fa fa-list"></i> Lista de pedidos</div>
    <div class="card-body">
        <div class="table-responsive">
             <table class="table table-sm table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Nº</th>
                    <th>Pacientes</th>
                  </tr>
                </thead>

                <tbody>

                @foreach($pedidos as $p)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><a href="{{ route('detalhesPedido', $p->paciente) }}">{{ $p->paciente }}</a></td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>