<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exercicio6";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS alunos (
    id_aluno INT(6),
    nome VARCHAR(100) NOT NULL,
    turma INT(100) NOT NULL
);";

$sql .= "CREATE TABLE IF NOT EXISTS cursos (
    id_curso INT(6),
    nome_curso VARCHAR(100) NOT NULL,
    instrutor INT(100) NOT NULL
);";

if ($conn->multi_query($sql) === TRUE) {
    echo "Tabela 'alunos' e 'cursos' criada com sucesso";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}

?>