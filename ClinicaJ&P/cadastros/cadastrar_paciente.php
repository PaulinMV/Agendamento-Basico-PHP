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

<div id="cadastro-paciente">
    <div class="section-header">
        <h2>Cadastro Paciente</h2>
    </div>
    <form action="" method="post">
        <label for="nomeCompleto">Nome Completo:</label>
        <input type="text" id="nomeCompleto" name="nomeCompleto" maxlength="100" required><br><br>

        <label for="dataNascimento">Data de Nascimento:</label>
        <input type="date" id="dataNascimento" name="dataNascimento" required><br><br>

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
            <option value="O">Outro</option>
        </select><br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" maxlength="17" required><br><br>

        <label for="rg">RG:</label>
        <input type="text" id="rg" name="rg" maxlength="10" required><br><br>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" maxlength="11" required><br><br>

        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" maxlength="255" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" maxlength="100" required><br><br>

        <label for="tipoSanguineo">Tipo Sanguíneo:</label>
        <select id="tipoSanguineo" name="tipoSanguineo" required>
            <option value="A">A</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="AB">AB</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="B">B</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O">O</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select><br><br>

        <label for="alergia">Alergias:</label>
        <input type="text" id="alergia" name="alergia" maxlength="100"><br><br>

        <label for="problemaCardiaco">Problema Cardíaco:</label>
        <input type="checkbox" id="problemaCardiaco" name="problemaCardiaco" value="true"><br><br>
        <label for="descricaoProblemaCardiacoInput">Descrição do Problema Cardíaco:</label>
        <textarea id="descricaoProblemaCardiacoInput" name="descricaoProblemaCardiaco"></textarea><br><br>

        <label for="gravidez">Está grávida?</label>
        <input type="checkbox" id="gravidez" name="gravidez" value="true"><br><br>

        <label for="problemaCoagulacao">Problema de Coagulação:</label>
        <input type="checkbox" id="problemaCoagulacao" name="problemaCoagulacao" value="true"><br><br>
        <label for="descricaoProblemaCoagulacaoInput">Descrição do Problema de Coagulação:</label>
        <textarea id="descricaoProblemaCoagulacaoInput" name="descricaoProblemaCoagulacao"></textarea><br><br>

        <label for="diabetes">Diabetes:</label>
        <input type="checkbox" id="diabetes" name="diabetes" value="true"><br><br>
        <label for="descricaoDiabetesInput">Descrição da Diabetes:</label>
        <textarea id="descricaoDiabetesInput" name="descricaoDiabetes"></textarea><br><br>

        <label for="problemaPressao">Problema de Pressão:</label>
        <input type="checkbox" id="problemaPressao" name="problemaPressao" value="true"><br><br>
        <label for="descricaoProblemaPressaoInput">Descrição do Problema de Pressão:</label>
        <textarea id="descricaoProblemaPressaoInput" name="descricaoProblemaPressao"></textarea><br><br>

        <label for="problemaRenal">Problema Renal:</label>
        <input type="checkbox" id="problemaRenal" name="problemaRenal" value="true"><br><br>
        <label for="descricaoProblemaRenalInput">Descrição do Problema Renal:</label>
        <textarea id="descricaoProblemaRenalInput" name="descricaoProblemaRenal"></textarea><br><br>

        <label for="problemaHepatico">Problema Hepático:</label>
        <input type="checkbox" id="problemaHepatico" name="problemaHepatico" value="true"><br><br>
        <label for="descricaoProblemaHepaticoInput">Descrição do Problema Hepático:</label>
        <textarea id="descricaoProblemaHepaticoInput" name="descricaoProblemaHepatico"></textarea><br><br>

        <label for="problemaNervoso">Problema Nervoso:</label>
        <input type="checkbox" id="problemaNervoso" name="problemaNervoso" value="true"><br><br>
        <label for="descricaoProblemaNervosoInput">Descrição do Problema Nervoso:</label>
        <textarea id="descricaoProblemaNervosoInput" name="descricaoProblemaNervoso"></textarea><br><br>

        <label for="problemaReumatico">Problema Reumático:</label>
        <input type="checkbox" id="problemaReumatico" name="problemaReumatico" value="true"><br><br>
        <label for="descricaoProblemaReumaticoInput">Descrição do Problema Reumático:</label>
        <textarea id="descricaoProblemaReumaticoInput" name="descricaoProblemaReumatico"></textarea><br><br>

        <label for="xFioDental">Frequência de uso do fio dental:</label>
        <input type="number" id="xFioDental" name="xFioDental" required><br><br>

        <label for="gengivaSangra">Gengiva Sangra:</label>
        <input type="checkbox" id="gengivaSangra" name="gengivaSangra"><br><br>

        <label for="dorEstaloMandibula">Dor ou Estalo na Mandíbula:</label>
        <input type="checkbox" id="dorEstaloMandibula" name="dorEstaloMandibula"><br><br>

        <label for="historicoDentalFamilia">Histórico Dental na Família:</label>
        <input type="text" id="historicoDentalFamilia" name="historicoDentalFamilia" maxlength="255" required><br><br>

        <label for="motivoConsulta">Motivo da Consulta:</label>
        <input type="text" id="motivoConsulta" name="motivoConsulta" maxlength="255" required><br><br>

        <label for="respiracaoNariz">Dificuldade de Respiração pelo Nariz:</label>
        <input type="checkbox" id="respiracaoNariz" name="respiracaoNariz"><br><br>

        <label for="outro">Outras Informações:</label>
        <textarea id="outro" name="outro"></textarea><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</div>

<?php
require '../conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitização dos dados
    $nomeCompleto = mysqli_real_escape_string($conect, $_POST['nomeCompleto']);
    $dataNascimento = mysqli_real_escape_string($conect, $_POST['dataNascimento']);
    $sexo = mysqli_real_escape_string($conect, $_POST['sexo']);
    $telefone = mysqli_real_escape_string($conect, $_POST['telefone']);
    $rg = mysqli_real_escape_string($conect, $_POST['rg']);
    $cpf = mysqli_real_escape_string($conect, $_POST['cpf']);
    $endereco = mysqli_real_escape_string($conect, $_POST['endereco']);
    $email = mysqli_real_escape_string($conect, $_POST['email']);
    $tipoSanguineo = mysqli_real_escape_string($conect, $_POST['tipoSanguineo']);
    $alergia = mysqli_real_escape_string($conect, $_POST['alergia']);
    $gravidez = isset($_POST['gravidez']) ? 'true' : 'false';
    $problemaCardiaco = isset($_POST['problemaCardiaco']) ? 'true' : 'false';
    $descricaoProblemaCardiaco = mysqli_real_escape_string($conect, $_POST['descricaoProblemaCardiaco']);
    $problemaCoagulacao = isset($_POST['problemaCoagulacao']) ? 'true' : 'false';
    $descricaoProblemaCoagulacao = mysqli_real_escape_string($conect, $_POST['descricaoProblemaCoagulacao']);
    $diabetes = isset($_POST['diabetes']) ? 'true' : 'false';
    $descricaoDiabetes = mysqli_real_escape_string($conect, $_POST['descricaoDiabetes']);
    $problemaPressao = isset($_POST['problemaPressao']) ? 'true' : 'false';
    $descricaoProblemaPressao = mysqli_real_escape_string($conect, $_POST['descricaoProblemaPressao']);
    $problemaRenal = isset($_POST['problemaRenal']) ? 'true' : 'false';
    $descricaoProblemaRenal = mysqli_real_escape_string($conect, $_POST['descricaoProblemaRenal']);
    $problemaHepatico = isset($_POST['problemaHepatico']) ? 'true' : 'false';
    $descricaoProblemaHepatico = mysqli_real_escape_string($conect, $_POST['descricaoProblemaHepatico']);
    $problemaNervoso = isset($_POST['problemaNervoso']) ? 'true' : 'false';
    $descricaoProblemaNervoso = mysqli_real_escape_string($conect, $_POST['descricaoProblemaNervoso']);
    $problemaReumatico = isset($_POST['problemaReumatico']) ? 'true' : 'false';
    $descricaoProblemaReumatico = mysqli_real_escape_string($conect, $_POST['descricaoProblemaReumatico']);
    $xFioDental = mysqli_real_escape_string($conect, $_POST['xFioDental']);
    $gengivaSangra = isset($_POST['gengivaSangra']) ? 'true' : 'false';
    $dorEstaloMandibula = isset($_POST['dorEstaloMandibula']) ? 'true' : 'false';
    $historicoDentalFamilia = mysqli_real_escape_string($conect, $_POST['historicoDentalFamilia']);
    $motivoConsulta = mysqli_real_escape_string($conect, $_POST['motivoConsulta']);
    $respiracaoNariz = isset($_POST['respiracaoNariz']) ? 'true' : 'false';
    $outro = mysqli_real_escape_string($conect, $_POST['outro']);

    // Consulta de inserção
    $sql = "INSERT INTO PACIENTE (
        nomeCompleto, dataNascimento, sexo, telefone, rg, cpf, endereco, email, tipoSanguineo, alergia, gravidez,
        problemaCardiaco, descricaoProblemaCardiaco, problemaCoagulacao, descricaoProblemaCoagulacao, diabetes,
        descricaoDiabetes, problemaPressao, descricaoProblemaPressao, problemaRenal, descricaoProblemaRenal,
        problemaHepatico, descricaoProblemaHepatico, problemaNervoso, descricaoProblemaNervoso, problemaReumatico,
        descricaoProblemaReumatico, xFioDental, gengivaSangra, dorEstaloMandibula, historicoDentalFamilia,
        motivoConsulta, respiracaoNariz, outro
    ) VALUES (
        '$nomeCompleto', '$dataNascimento', '$sexo', '$telefone', '$rg', '$cpf', '$endereco', '$email', '$tipoSanguineo',
        '$alergia', '$gravidez', '$problemaCardiaco', '$descricaoProblemaCardiaco', '$problemaCoagulacao',
        '$descricaoProblemaCoagulacao', '$diabetes', '$descricaoDiabetes', '$problemaPressao', '$descricaoProblemaPressao',
        '$problemaRenal', '$descricaoProblemaRenal', '$problemaHepatico', '$descricaoProblemaHepatico',
        '$problemaNervoso', '$descricaoProblemaNervoso', '$problemaReumatico', '$descricaoProblemaReumatico',
        '$xFioDental', '$gengivaSangra', '$dorEstaloMandibula', '$historicoDentalFamilia',
        '$motivoConsulta', '$respiracaoNariz', '$outro'
    )";

    // Executa a query
    $query = mysqli_query($conect, $sql);

    if ($query) {
        echo "<p>Cadastro realizado com sucesso!</p>";
    } else {
        echo "<p>Erro ao cadastrar: " . mysqli_error($conect) . "</p>";
    }
}
?>
</body>
</html>
