CREATE TABLE dentista (
    dentistaID INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    dataNascimento DATE NOT NULL,
    sexo VARCHAR(1) NOT NULL,  -- 'M', 'F', ou 'O'
    telefone VARCHAR(17) NOT NULL,
    RG VARCHAR(10) NOT NULL,
    CPF VARCHAR(14) NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    CRO VARCHAR(15) NOT NULL
);

CREATE TABLE paciente (
    pacienteID INT PRIMARY KEY AUTO_INCREMENT,
    nomeCompleto VARCHAR(100) NOT NULL,
    dataNascimento DATE NOT NULL,
    sexo VARCHAR(1) NOT NULL,   -- 'M', 'F', ou 'O'
    telefone VARCHAR(17) NOT NULL,
    RG VARCHAR(10) NOT NULL,
    CPF VARCHAR(14) NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    tipoSanguineo CHAR(3) NOT NULL,  -- Exemplos: 'A+', 'O-'
    alergia VARCHAR(100),
    problemaCardiaco BOOLEAN NOT NULL,
    descricaoProblemaCardiaco VARCHAR(255),
    gravidez BOOLEAN NOT NULL,
    problemaCoagulacao BOOLEAN NOT NULL,
    descricaoProblemaCoagulacao VARCHAR(255),
    diabetes BOOLEAN NOT NULL,
    descricaoDiabetes VARCHAR(255),
    problemaPressao BOOLEAN NOT NULL,
    descricaoProblemaPressao VARCHAR(255),
    problemaRenal BOOLEAN NOT NULL,
    descricaoProblemaRenal VARCHAR(255),
    problemaHepatico BOOLEAN NOT NULL,
    descricaoProblemaHepatico VARCHAR(255),
    problemaNervoso BOOLEAN NOT NULL,
    descricaoProblemaNervoso VARCHAR(255),
    problemaReumatico BOOLEAN NOT NULL,
    descricaoProblemaReumatico VARCHAR(255),
    xFioDental INT NOT NULL,
    gengivaSangra BOOLEAN NOT NULL,
    dorEstaloMandibula BOOLEAN NOT NULL,
    historicoDentalFamilia VARCHAR(255) NOT NULL,
    motivoConsulta VARCHAR(255) NOT NULL,
    respiracaoNariz VARCHAR(1) NOT NULL, -- Ruim, Normal, Bom
    outro VARCHAR(255)
);

CREATE TABLE procedimento (
    procedimentoID INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT NOT NULL,
    tempoPrevio TIME NOT NULL,
    valorMedio DECIMAL(10, 2) NOT NULL
);

CREATE TABLE historicoProced (
    historicoProcedID INT PRIMARY KEY AUTO_INCREMENT,
    procedimentoID INT,
    valor DECIMAL(10, 2) NOT NULL,
    data DATETIME NOT NULL,
    FOREIGN KEY (procedimentoID) REFERENCES procedimento(procedimentoID)
);

CREATE TABLE agenda (
    agendaID INT PRIMARY KEY AUTO_INCREMENT,
    idPACIENTE INT NOT NULL,
    idDENTISTA INT NOT NULL,
    dataHora DATETIME NOT NULL,
    formaPagamento VARCHAR(50),
    valorFinal DECIMAL(10, 2),
    FOREIGN KEY(idPACIENTE) REFERENCES paciente(pacienteID),
    FOREIGN KEY(idDENTISTA) REFERENCES dentista(dentistaID)
);

CREATE TABLE agenda_procedimento (
    agenda_procedID INT PRIMARY KEY AUTO_INCREMENT,
    idAGENDA INT,
    idPROCEDIMENTO INT,
    quantidade INT DEFAULT 1,
    observacao TEXT,
    status VARCHAR(50) NOT NULL, -- Pendente, Em andamento, concluído...
    valorFinal DECIMAL(10, 2),
    FOREIGN KEY(idAGENDA) REFERENCES agenda(agendaID),
    FOREIGN KEY(idPROCEDIMENTO) REFERENCES procedimento(procedimentoID)
);

CREATE TABLE usuario (
    usuarioID INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    login VARCHAR(50) UNIQUE,
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE financeiro (
    financeiroID INT PRIMARY KEY AUTO_INCREMENT,
    idAGENDA INT,
    parcela INT,  -- Número da parcela atual
    totalParcelas INT,
    valorParcela DECIMAL(10, 2),
    valorTotal DECIMAL(10, 2),
    dataVencimento DATE,
    dataPagamento DATE,
    statusPagamento VARCHAR(20),  -- Status: Pendente, Pago, Atrasado
    FOREIGN KEY(idAGENDA) REFERENCES agenda(agendaID)
);