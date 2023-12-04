<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exercicio3";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS clientes (
    id_cliente INT(6) AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email INT(10) NOT NULL
);";

$sql .= "CREATE TABLE IF NOT EXISTS vendas (
    id_venda INT(6),
    id_cliente INT,
    produto_vendido VARCHAR(100) NOT NULL,
    valor INT(10) NOT NULL,
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente)
);";

if ($conn->multi_query($sql) === TRUE) {
    echo "Tabela 'clientes' e 'vendas' criada com sucesso";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}

?>