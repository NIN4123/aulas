<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exercicio2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS produtos (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    id_produto INT(100),
    nome_produto VARCHAR(100) NOT NULL,
    preco INT(10) NOT NULL
);";

$sql .= "CREATE TABLE IF NOT EXISTS categorias (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    id_categoria INT(100),
    nome_categoria VARCHAR(100) NOT NULL
);";

if ($conn->multi_query($sql) === TRUE) {
    echo "Tabela 'produtos' e 'categorias' criada com sucesso";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}

?>