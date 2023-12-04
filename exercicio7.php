<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exercicio7";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS fornecedores (
    id_fornecedor INT(6) AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    contato VARCHAR(255) NOT NULL
);";

$sql .= "CREATE TABLE IF NOT EXISTS compras (
    id_compra INT(6),
    id_fornecedor INT,
    produto_comprado VARCHAR(255) NOT NULL,
    quantidade INT(10) NOT NULL
    FOREIGN KEY (id_fornecedor) REFERENCES fornecedores(id_fornecedor)
);";

if ($conn->multi_query($sql) === TRUE) {
    echo "Tabela 'fornecedores' e 'compras' criada com sucesso";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}

?>