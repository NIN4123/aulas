<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ExerciciosBD";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $sql = "CREATE TABLE IF NOT EXISTS pessoas (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(255) NOT NULL,
        idade INT(3) NOT NULL,
        sexo VARCHAR(1)
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Tabela 'pessoas' criada com sucesso";
    } else {
        echo "Erro ao criar tabela: " . $conn->error;
    }

    $sql = "INSERT INTO pessoas (nome, idade, sexo) VALUES
   ('João', 25, 'M'),
   ('Maria', 20, 'F')";

    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso";
    } else {
        echo "Erro ao inserir dados: " . $conn->error;
    }

    function getAllPessoas($conn) {
        $sql = "SELECT * FROM pessoas";
        $result = $conn->query($sql);
     
        if ($result->num_rows > 0) {
             return $result->fetch_all(MYSQLI_ASSOC);
        } else {
             return "Nenhum resultado encontrado";
        }
     }

    $data = getAllPessoas($conn);
    print_r($data);

    $conn->close();
?>