<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exercicio10";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS exames (
    id_resultado INT(6) AUTO_INCREMENT PRIMARY KEY,
    tipo_exame VARCHAR(100) NOT NULL,
    resultado VARCHAR(255) NOT NULL
);";

$sql .= "CREATE TABLE IF NOT EXISTS pacientes (
    id_paciente INT(6) AUTO_INCREMENT PRIMARY KEY,
    nome_paciente VARCHAR(100) NOT NULL,
    data_nascimento INT(8) NOT NULL
);";

if ($conn->multi_query($sql) === TRUE) {
    echo "Tabela 'exames' e 'pacientes' criada com sucesso";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}


?>