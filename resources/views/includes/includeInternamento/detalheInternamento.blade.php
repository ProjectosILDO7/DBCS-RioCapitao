
    <div class="form-group text-center">
        <span>O(A) paciente: <b class="text-danger">{{ $paciente->nome }}</b></span>
    </div>

    <table class="table table-sm">
        <tr><td colspan="4" align="center">Dados do Paciente</td></tr>
        <tr class="font-weight-bold">
            <td>Data de nascimento</td>
            <td>Endereço</td>
            <td>Telemóvel</td>
            <td>Gênero</td>
        </tr>

        <tr>
            <td>{{ $paciente->data_nasc }}</td>
            <td>{{ $paciente->endereco }}</td>
            <td>{{ $paciente->telemovel }}</td>
            <td>{{ $paciente->genero }}</td>
        </tr>
    </table>
    <hr>
    <div class="form-group">
        <ul>
            <li>Medico responsável: <span class="text-secondary">{{ $medicoResponsavel }}</span></li>
            <li>Nº do quarto: <span class="text-secondary">{{ $quarto->num_quart }}</span></li>
            <li>Piso nº: <span class="text-secondary">{{ $quarto->piso }}</span></li>
        </ul>
    </div>
