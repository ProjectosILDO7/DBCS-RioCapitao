<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório</title>

    {{-- <link rel="stylesheet" type="text/css" href="css/main.css"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="font-awesome/css/all.css"> --}}
    <link rel="stylesheet" href="css/meuEstilo.css">

</head>
<body>
    
      <htmlpageheader name="page-header">
        <p class="tamanhoTopoRodape">
            Centro de saúde - Rio Capitão
        </p>
      </htmlpageheader>
      <img class="app-sidebar__user-avatar" src="{{ asset('img/CoraçãoSaúde.png') }}" alt="User Image" width="10%" height="10%">
        <p class="alinharAcima"><b>RELATÓRIO</b> - Centro de saúde : "Rio Capitão"</p>
        <hr class="chegarAoTopo"> 

        {{-- medicos
contaMedico
contaPaciente
contaConsultas
contaInternamento
userCount
quartoIntern --}}

        <p><b>Detalhes gerais</b></p>
        <table border="1" width="100%" class="linhasAlternadas">
            <tr>
                <td width="20%">Médicos</td>
                <td><b>{{ $contaMedico }}</b></td>
            </tr>
            <tr>
                <td width="20%">Infermeiros</td>
                <td><b>Indesponível</b></td>
            </tr>
            <tr>
                <td width="20%">Pacientes</td>
                <td><b>{{ $contaPaciente }}</b></td>
            </tr>

            <tr>
                <td width="20%">Administrativos</td>
                <td><b>{{ $userCount }}</b></td>
            </tr>

        </table>

        <p><b>Consultas</b></p>
        <table border="1" width="40%" class="linhasAlternadas">
            <tr>
                <td>pacientes</td>
                <td align="center"><b>{{ $contaConsultas }}</b></td>
            </tr>
        </table>

        <p><b>Tratamentos intensivos</b></p>
        <table border="1" width="40%" class="linhasAlternadas">
            <tr>
                <td>pacientes</td>
                <td align="center"><b>{{ $contaInternamento }}</b></td>
            </tr>
        </table>

        <p><b>Quadro de médicos<b></p>
        <table border="1" width="100%" class="linhasAlternadas">
            <tr style="color: black">
                <td><b>Nº</b></td>
                <td><b>Nome</b></td>
                <td><b>Telemove</b></td>
                <td><b>E-mail</b></td>
            </tr>
            @foreach ($medicos as $med)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $med->nome }}</td>
                    <td>{{ $med->telefone }}</td>
                    <td>{{ $med->email }}</td>
                </tr>
            @endforeach
        </table>

        <p><b>Quadro de especialidade</b></p>
        <table border="1" width="100%" class="linhasAlternadas">
            <tr style="color: black">
                <td><b>Nº</b></td>
                <td><b>Especialidade</b></td>
            </tr>
            @foreach ($especialidades as $esp)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $esp->nome_especialidade }}</td>
                </tr>
            @endforeach
            
        </table>

        <p><b>Quadro de quartos para o internamento</b></p>
        <table border="1" width="100%" class="linhasAlternadas">
            <tr style="color: black">
                <td><b>Nº</b></td>
                <td align="center"><b>Nº do quarto</b></td>
                <td align="center"><b>Total de camas existente por quarto</b></td>
                <td align="center"><b>Piso</b></td>
            </tr>

            @foreach ($quartoIntern as $quarto)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td align="center">{{ $quarto->num_quart }}</td>
                    <td align="center">{{ $quarto->num_cama }}</td>
                    <td align="center">{{ $quarto->piso }}</td>
                </tr> 
            @endforeach
            
        </table>

      <htmlpagefooter name="page-footer" class="tamanhoTopoRodape">
        <p class="tamanhoRodape">
            Sistema integrado de gestão hospitalar - Rio Capitão
        </p>
      </htmlpagefooter>

</body>
</html>