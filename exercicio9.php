<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exercicio9";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS eventos (
    id_evento INT(6) AUTO_INCREMENT PRIMARY KEY,
    nome_evento VARCHAR(255) NOT NULL,
    data INT(20) NOT NULL
);";

$sql .= "CREATE TABLE IF NOT EXISTS participantes (
    id_participante INT(6),
    id_evento INT,
    nome_participante VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_evento) REFERENCES eventos(id_evento)
);";

if ($conn->multi_query($sql) === TRUE) {
    echo "Tabela 'eventos' e 'participantes' criada com sucesso";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}

?>