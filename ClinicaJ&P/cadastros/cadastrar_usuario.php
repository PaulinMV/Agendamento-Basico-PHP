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

<div id="cadastro-usuario">
    <div class="section-header">
        <h2>Cadastro de Usuário</h2>
    </div>
    <form action="" method="post">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" maxlength="100" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" maxlength="100" required>
        </div>
        <div class="form-group">
            <label for="login">Login:</label>
            <input type="text" id="login" name="login" maxlength="50" required>
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" minlength="8" required>
        </div>
        <button type="submit">Cadastrar</button>
    </form>
</div>

<?php
require '../conexao.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    $nome = mysqli_real_escape_string($conect, $_POST['nome']);
    $email = mysqli_real_escape_string($conect, $_POST['email']);
    $login = mysqli_real_escape_string($conect, $_POST['login']);
    $senha = mysqli_real_escape_string($conect, $_POST['senha']);

    $verificador = "SELECT * FROM usuario WHERE login = '$login'";
    $result = mysqli_query($conect, $verificador);

    if (mysqli_num_rows($result) > 0) {
        echo "<p>O login já existe!</p>";
    } else {
    
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuario (nome, email, login, senha) 
                VALUES ('$nome', '$email', '$login', '$senha_hash')";

        if (mysqli_query($conect, $sql)) {
            echo "<p>Cadastro realizado com sucesso!</p>";
        } else {
            echo "<p>Erro ao cadastrar: " . mysqli_error($conect) . "</p>";
        }
    }
}
?>
</body>
</html>
