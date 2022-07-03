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
        <p class="alinharAcima"><b>DIAGNÓSTICO MÉDICO</b> - Centro de saúde : "Rio Capitão"</p>
        <hr class="chegarAoTopo"> 

        <table width="50%" border="1" class="linhasAlternadas">
            <tr>
                <td><b>O Paciente: </b> {{ $detalhesPrescricao->paciente }}</td>
            </tr>
            <tr>
                <td><b>Contácto: </b> {{ $detalhesPrescricao->telemovel }}</td>
            </tr>
            <tr>
                <td><b>Gênero: </b> {{ $detalhesPrescricao->genero }}</td>
            </tr>
            <tr>
                <td><b>Endereço: </b> {{ $detalhesPrescricao->endereco }}</td>
            </tr>

        </table>
<br>
        <table width="100%" border="1" width="100%" class="linhasAlternadas">
            <tr>
                <td align="center"><b>Diagnóstico Médico</b></td>
            </tr>
            <tr>
                <td>{{ $detalhesPrescricao->presc_medica }}</td>
            </tr>
        </table>

<br><br>

        <table align="right" width="30%" border="1" class="linhasAlternadas">
            <tr>
                <td><b>Data da Prescrição</b></td>
            </tr>
            <tr>
                <td>{{ $dataDaPrescricao }}</td>
            </tr>
        </table>




      <htmlpagefooter name="page-footer" class="tamanhoTopoRodape">
        <p class="tamanhoRodape">
            Sistema integrado de gestão hospitalar - Rio Capitão
        </p>
      </htmlpagefooter>

</body>
</html>