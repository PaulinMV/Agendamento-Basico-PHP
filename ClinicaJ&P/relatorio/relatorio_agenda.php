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
            <li><a href="../index.html"><img src="../../icons/home.png" alt="Home" class="icon"> Início</a></li>
            <li><a href="../cadastros/cadastrar_agenda.php"><img src="../../icons/agendamento.png" alt="Agenda" class="icon"> Agendamento</a></li>
            <li><a href="../cadastros/cadastro.html"><img src="../../icons/cadastro.png" alt="Cadastrar" class="icon"> Cadastrar</a></li>
            <li><a href="../financeiro.html"><img src="../../icons/financeiro.png" alt="Financeiro" class="icon"> Financeiro</a></li>
            <li><a href="relatorio.html"><img src="../../icons/relatorio.png" alt="Relatório" class="icon"> Relatório</a></li>
            <li><a href="../config.html"><img src="../../icons/config.png" alt="Configurações" class="icon"> Configurações</a></li>
        </ul>
    </nav>
</header>

<main>
    <section>
        <h2>Relatório de Agendamentos</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>ID do Paciente</th>
                    <th>Nome do Paciente</th>
                    <th>ID do Dentista</th>
                    <th>Nome do Dentista</th>
                    <th>Data e Hora</th>
                    <th>Forma de Pagamento</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require '../conexao.php';

                $sql = "SELECT
                            a.idPACIENTE, p.nomeCompleto AS nomePaciente,
                            a.idDENTISTA, d.nome AS nomeDentista,
                            a.dataHora, a.formaPagamento
                        FROM agenda a
                        JOIN paciente p ON a.idPACIENTE = p.pacienteID
                        JOIN dentista d ON a.idDENTISTA = d.dentistaID";
                $query = mysqli_query($conect, $sql);

                if ($query) {
                    while ($row = mysqli_fetch_assoc($query)) {
                        echo "<tr>
                                <td>{$row['idPACIENTE']}</td>
                                <td>{$row['nomePaciente']}</td>
                                <td>{$row['idDENTISTA']}</td>
                                <td>{$row['nomeDentista']}</td>
                                <td>{$row['dataHora']}</td>
                                <td>{$row['formaPagamento']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Erro ao gerar o relatório: " . mysqli_error($conect) . "</td></tr>";
                }
                mysqli_close($conect);
                ?>
            </tbody>
        </table>
    </section>
</main>

</body>
</html>
