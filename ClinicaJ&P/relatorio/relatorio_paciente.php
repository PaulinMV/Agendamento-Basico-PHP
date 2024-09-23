<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatórios - Clínica Odontológica J&P</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<header>
        <nav>
            <ul>
                <li class="logo">
                <img src="../../icons/logo.png" alt="Imagem Logo">
                <h1>Clínica J&P</h1>
                <li>
                <li><a href="index.html"><img src="../../icons/home.png" alt="Home" class="icon"> Início</a></li>
                <li><a href="cadastrar_agenda.php"><img src="../../icons/agendamento.png" alt="Agenda" class="icon"> Agendamento</a></li>
                <li><a href="/ClinicaJ&P/cadastros/cadastro.html"><img src="../../icons/cadastro.png" alt="Cadastrar" class="icon"> Cadastrar</a></li>
                <li><a href="financeiro.html"><img src="../../icons/financeiro.png" alt="Financeiro" class="icon"> Financeiro</a></li>
                <li><a href="relatorio/relatorio.html"><img src="../../icons/financeiro.png" alt="Relatório" class="icon"> Relatório</a></li>
                <li><a href="config.html"><img src="../../icons/config.png" alt="Configurações" class="icon"> Configurações</a></li>
            </ul>
        </nav>
    </header>


<?php

require '../conexao.php';

$sql = "SELECT * FROM paciente";
$query = mysqli_query($conect, $sql) or die(mysqli_error($conect));

if ($query) {
    echo "<h2>Relatório de Pacientes</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nome Completo</th>
                <th>Data de Nascimento</th>
                <th>Sexo</th>
                <th>Telefone</th>
                <th>RG</th>
                <th>CPF</th>
                <th>Endereço</th>
                <th>Email</th>
                <th>Tipo Sanguíneo</th>
                <th>Alergia</th>
                <th>Problema Cardíaco</th>
                <th>Descrição do Problema Cardíaco</th>
                <th>Gravidez</th>
                <th>Problema de Coagulação</th>
                <th>Descrição do Problema de Coagulação</th>
                <th>Diabetes</th>
                <th>Descrição da Diabetes</th>
                <th>Problema de Pressão</th>
                <th>Descrição do Problema de Pressão</th>
                <th>Problema Renal</th>
                <th>Descrição do Problema Renal</th>
                <th>Problema Hepático</th>
                <th>Descrição do Problema Hepático</th>
                <th>Problema Nervoso</th>
                <th>Descrição do Problema Nervoso</th>
                <th>Problema Reumático</th>
                <th>Descrição do Problema Reumático</th>
                <th>Frequência de Uso do Fio Dental</th>
                <th>Gengiva Sangra</th>
                <th>Dor ou Estalo na Mandíbula</th>
                <th>Histórico Dental Familiar</th>
                <th>Motivo da Consulta</th>
                <th>Respiração Pelo Nariz</th>
                <th>Outro</th>
            </tr>";

    while ($row = $query->fetch_assoc()) {
        echo "<tr>
                <td>{$row['pacienteID']}</td>
                <td>{$row['nomeCompleto']}</td>
                <td>{$row['dataNascimento']}</td>
                <td>{$row['sexo']}</td>
                <td>{$row['telefone']}</td>
                <td>{$row['RG']}</td>
                <td>{$row['CPF']}</td>
                <td>{$row['endereco']}</td>
                <td>{$row['email']}</td>
                <td>{$row['tipoSanguineo']}</td>
                <td>{$row['alergia']}</td>
                <td>{$row['problemaCardiaco']}</td>
                <td>{$row['descricaoProblemaCardiaco']}</td>
                <td>{$row['gravidez']}</td>
                <td>{$row['problemaCoagulacao']}</td>
                <td>{$row['descricaoProblemaCoagulacao']}</td>
                <td>{$row['diabetes']}</td>
                <td>{$row['descricaoDiabetes']}</td>
                <td>{$row['problemaPressao']}</td>
                <td>{$row['descricaoProblemaPressao']}</td>
                <td>{$row['problemaRenal']}</td>
                <td>{$row['descricaoProblemaRenal']}</td>
                <td>{$row['problemaHepatico']}</td>
                <td>{$row['descricaoProblemaHepatico']}</td>
                <td>{$row['problemaNervoso']}</td>
                <td>{$row['descricaoProblemaNervoso']}</td>
                <td>{$row['problemaReumatico']}</td>
                <td>{$row['descricaoProblemaReumatico']}</td>
                <td>{$row['xFioDental']}</td>
                <td>{$row['gengivaSangra']}</td>
                <td>{$row['dorEstaloMandibula']}</td>
                <td>{$row['historicoDentalFamilia']}</td>
                <td>{$row['motivoConsulta']}</td>
                <td>{$row['respiracaoNariz']}</td>
                <td>{$row['outro']}</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "Erro ao gerar o relatório: " . mysqli_error($conect);
}

?>
