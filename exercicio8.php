<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exercicio8";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS livros (
    id_livro INT(6),
    titulo VARCHAR(255) NOT NULL,
    ano_publicacao INT(4) NOT NULL
);";

$sql .= "CREATE TABLE IF NOT EXISTS autores (
    id_autor INT(6),
    nome_autor VARCHAR(255) NOT NULL
);";

if ($conn->multi_query($sql) === TRUE) {
    echo "Tabela 'livros' e 'autores' criada com sucesso";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}

?>
