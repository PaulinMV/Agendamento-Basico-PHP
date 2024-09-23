<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros - Clínica Odontológica J&P</title>
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

    <div id="cadastro-procedimento">
        <div class="section-header">
            <h2>Cadastro Procedimento</h2>
        </div>
        <form action="" method="post">
            <div class="form-group">
                <label for="nome">Nome do Procedimento:</label>
                <input type="text" id="nome" name="nome" maxlength="100" required>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea id="descricao" name="descricao" maxlength="200"></textarea>
            </div>

            <div class="form-group">
                <label for="tempoPrevio">Tempo Prévio:</label>
                <input type="time" id="tempoPrevio" name="tempoPrevio">
            </div>

            <div class="form-group">
                <label for="valorMedio">Valor (R$):</label>
                <input type="number" step="0.01" min="0" id="valorMedio" name="valorMedio" required>
            </div>

            <button type="submit">Cadastrar</button>
        </form>
    </div>

    <?php
    require '../conexao.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     
        $nome = mysqli_real_escape_string($conect, $_POST['nome']);
        $descricao = mysqli_real_escape_string($conect, $_POST['descricao']);
        $tempoPrevio = mysqli_real_escape_string($conect, $_POST['tempoPrevio']);
        $valorMedio = mysqli_real_escape_string($conect, $_POST['valorMedio']);

        $sql = "INSERT INTO procedimento (nome, descricao, tempoPrevio, valorMedio) 
                VALUES ('$nome', '$descricao', '$tempoPrevio', '$valorMedio')";

        if (mysqli_query($conect, $sql)) {
            echo "<p>Cadastro realizado com sucesso!</p>";
        } else {
            echo "<p>Erro ao cadastrar: " . mysqli_error($conect) . "</p>";
        }
    }
    ?>
</body>
</html>
