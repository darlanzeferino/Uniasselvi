<?php

// Configuração da conexão
$servername = "localhost"; // nome do servidor
$username = "root"; // nome de usuário do banco de dados
$password = ""; // senha do banco de dados
$dbname = "papper_web"; // nome do banco de dados

// Criar uma conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar a conexão
if (!$conn) {
    die("Não foi possível conectar ao banco de dados. Erro: " . mysqli_connect_error());
} else {

  
}

mysqli_set_charset($conn,"utf8");
