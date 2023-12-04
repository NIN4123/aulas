<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exercicio4";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS funcionarios (
    id_funcionario INT(6),
    nome VARCHAR(100) NOT NULL,
    cargo VARCHAR(100) NOT NULL
);";

$sql .= "CREATE TABLE IF NOT EXISTS departamentos (
    id_departamento INT(6),
    nome_departamento VARCHAR(100) NOT NULL
);";

if ($conn->multi_query($sql) === TRUE) {
    echo "Tabela 'funcionarios' e 'departamentos' criada com sucesso";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}

?>