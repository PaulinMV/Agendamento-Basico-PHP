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
                <li class="logo"></>
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
    
    <div id="cadastro-dentista">
        <div class="section-header">
            <h2>Cadastro Dentista</h2>
        </div>
        <form action="" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" maxlength="100" required>
            </div>
            <div class="form-group">
                <label for="dataNascimento">Data de Nascimento:</label>
                <input type="date" id="dataNascimento" name="dataNascimento" required>
            </div>
            <div class="form-group">
                <label for="sexo">Sexo:</label>
                <select id="sexo" name="sexo" required>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                    <option value="O">Outro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" maxlength="17" required>
            </div>
            <div class="form-group">
                <label for="rg">RG:</label>
                <input type="text" id="rg" name="rg" maxlength="10" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" maxlength="11" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" maxlength="255" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" maxlength="100" required>
            </div>
            <div class="form-group">
                <label for="cro">CRO:</label>
                <input type="text" id="cro" name="cro" maxlength="15" required>
            </div>
            <button type="submit">Cadastrar</button>
        </form>
    </div>

    <?php
    require '../conexao.php';

    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $nome = $_POST['nome'] ?? '';
        $dataNascimento = $_POST['dataNascimento'] ?? '';
        $sexo = $_POST['sexo'] ?? '';
        $telefone = $_POST['telefone'] ?? '';
        $rg = $_POST['rg'] ?? '';
        $cpf = $_POST['cpf'] ?? '';
        $endereco = $_POST['endereco'] ?? '';
        $email = $_POST['email'] ?? '';
        $cro = $_POST['cro'] ?? '';

        
        $sql = "INSERT INTO dentista (nome, dataNascimento, sexo, telefone, rg, cpf, endereco, email, cro) 
                VALUES ('$nome', '$dataNascimento', '$sexo', '$telefone', '$rg', '$cpf', '$endereco', '$email', '$cro')";

        if (mysqli_query($conect, $sql)) {
            echo "<p>Cadastro realizado com sucesso!</p>";
        } else {
            echo "<p>Erro ao cadastrar: " . mysqli_error($conect) . "</p>";
        }

        mysqli_close($conect);
    }
    ?>
</body>
</html>
