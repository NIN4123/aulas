<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exercicio5";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS projetos (
    id_projeto INT(6),
    nome_projeto VARCHAR(100) NOT NULL,
    descricao VARCHAR(255) NOT NULL
);";

$sql .= "CREATE TABLE IF NOT EXISTS atribuicoes (
    id_atribuicao INT(6),
    id_projeto INT(100) NOT NULL,
    id_funcionario INT(100) NOT NULL
);";

if ($conn->multi_query($sql) === TRUE) {
    echo "Tabela 'projetos' e 'atribuicoes' criada com sucesso";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}

?>