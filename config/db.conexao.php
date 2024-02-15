<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "gerenciador_info";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conexão bem-sucedida";

// Fechar conexão
$conn->close();
