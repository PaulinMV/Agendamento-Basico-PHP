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
                </li>
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


$sql = "SELECT * FROM procedimento";
$query = mysqli_query($conect, $sql) or die(mysqli_error($conect));

if ($query) {
    echo "<h2>Relatório de Procedimentos</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Tempo Médio</th>
                <th>Valor Médio</th>
            </tr>";

    
    while ($row = $query->fetch_assoc()) {
        echo "<tr>
                <td>{$row['procedimentoID']}</td>
                <td>{$row['nome']}</td>
                <td>{$row['descricao']}</td>
                <td>{$row['tempoPrevio']}</td>
                <td>{$row['valorMedio']}</td>
            </tr>";
    }

    echo "</table>";
} else {
    
    echo "Erro ao gerar o relatório: " . mysqli_error($conect);
}

?>
