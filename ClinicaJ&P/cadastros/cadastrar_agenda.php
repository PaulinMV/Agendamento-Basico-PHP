<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento e Procedimento</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <header>
        <nav>
            <ul>
                <li class="logo">
                    <img src="../../icons/logo.png" alt="Imagem da Logo Clínica J&P">
                    <h1>Clínica J&P</h1>
                </li>
                <li><a href="../index.html"><img src="../../icons/home.png" alt="Home" class="icon"> Início</a></li>
                <li><a href="../cadastros/cadastrar_agenda.php"><img src="../../icons/agendamento.png" alt="Agendamento" class="icon"> Agendamento</a></li>
                <li><a href="../cadastros/cadastro.html"><img src="../../icons/cadastro.png" alt="Cadastrar" class="icon"> Cadastrar</a></li>
                <li><a href="../financeiro.html"><img src="../../icons/financeiro.png" alt="Financeiro" class="icon"> Financeiro</a></li>
                <li><a href="../relatorio/relatorio.html"><img src="../../icons/relatorio.png" alt="Relatório" class="icon"> Relatório</a></li>
                <li><a href="../config.html"><img src="../../icons/config.png" alt="Configurações" class="icon"> Configurações</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Agendar Consulta</h2>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="paciente">Paciente:</label>
                    <select id="paciente" name="paciente" required>
                        <option value="">Selecione um paciente</option>
                        <?php
                        require '../conexao.php';

                        $sql = "SELECT pacienteID, nomeCompleto FROM paciente";
                        $query = mysqli_query($conect, $sql);

                        while ($row = mysqli_fetch_assoc($query)) {
                            echo "<option value=\"{$row['pacienteID']}\">{$row['nomeCompleto']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="dentista">Dentista:</label>
                    <select id="dentista" name="dentista" required>
                        <option value="">Selecione um dentista</option>
                        <?php
                        $sql = "SELECT dentistaID, nome FROM dentista";
                        $query = mysqli_query($conect, $sql);

                        while ($row = mysqli_fetch_assoc($query)) {
                            echo "<option value=\"{$row['dentistaID']}\">{$row['nome']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="dataHora">Data e Hora:</label>
                    <input type="datetime-local" id="dataHora" name="dataHora" required>
                </div>
                <div class="form-group">
                    <label for="formaPagamento">Forma de Pagamento:</label>
                    <select id="formaPagamento" name="formaPagamento" required>
                        <option value="">Selecione uma forma de pagamento</option>
                        <option value="dinheiro">Dinheiro</option>
                        <option value="cartao">Cartão</option>
                        <option value="transferencia">Transferência</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="procedimentos">Procedimentos:</label>
                    <div id="procedimentos">
                        <?php
                        $sql = "SELECT procedimentoID, nome FROM procedimento";
                        $query = mysqli_query($conect, $sql);

                        while ($row = mysqli_fetch_assoc($query)) {
                            echo "<label><input type='checkbox' class='procedimento' name='procedimentos[]' value='{$row['procedimentoID']}'> {$row['nome']}</label><br>";
                        }
                        ?>
                    </div>
                </div>
                <div class="form-group" id="quantidadeContainer" style="display: none;">
                    <label for="quantidade">Quantidade de Dentes:</label>
                    <input type="number" id="quantidade" name="quantidade" min="1">
                </div>
                <button type="submit">Agendar</button>
            </form>
        </section>
    </main>

    <script>
        const procedimentos = document.querySelectorAll('.procedimento');
        procedimentos.forEach(procedimento => {
            procedimento.addEventListener('change', function() {
                const quantidadeContainer = document.getElementById('quantidadeContainer');
                const isRootCanalChecked = Array.from(procedimentos).some(checkbox => checkbox.checked && checkbox.value === 'root_canal');
                quantidadeContainer.style.display = isRootCanalChecked ? 'block' : 'none';
            });
        });
    </script>
</body>
</html>

<?php
require '../conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idPACIENTE = $_POST['paciente'];
    $idDENTISTA = $_POST['dentista'];
    $dataHora = $_POST['dataHora'];
    $formaPagamento = $_POST['formaPagamento'];
    $procedimentos = $_POST['procedimentos'];

    // Calcular valor total
    $valorTotal = 0;
    foreach ($procedimentos as $procedimentoID) {
        $sql_valor = "SELECT valorMedio FROM procedimento WHERE procedimentoID = '$procedimentoID'";
        $resultado_valor = mysqli_query($conect, $sql_valor);
        if ($row = mysqli_fetch_assoc($resultado_valor)) {
            $valorTotal += $row['valorMedio'];
        }
    }

    $sql = "INSERT INTO AGENDA (idPACIENTE, idDENTISTA, dataHora, formaPagamento)
            VALUES ('$idPACIENTE', '$idDENTISTA', '$dataHora', '$formaPagamento')";

    if (mysqli_query($conect, $sql)) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conect);
    }

    mysqli_close($conect);
}
?>
