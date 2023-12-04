<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exercicio1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);";

$sql = "CREATE TABLE IF NOT EXISTS pedidos (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    id_pedido INT(6),
    produto VARCHAR(100) NOT NULL,
    quantidade INT(6) NOT NULL
)";

if ($conn->multi_query($sql) === TRUE) {
    echo "Tabela 'usuarios' e 'pedidos' criada com sucesso";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}
?>