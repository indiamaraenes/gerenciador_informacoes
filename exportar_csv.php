<?php
// Conectar ao banco de dados
$conn = new mysqli("localhost", "root", "", "gerenciador_info");

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Limpar a entrada do usuário para evitar injeção de SQL
$id = $conn->real_escape_string($_POST['id']);

// Consultar dados do banco de dados
$sql = "SELECT * FROM informacoes WHERE id = '$id'";
$result = $conn->query($sql);

// Configurar cabeçalhos para download do arquivo CSV
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="dados_' . date('Ymd_His') . '.csv"');

// Abrir o arquivo CSV para escrita
$output = fopen('php://output', 'w');

// Escrever cabeçalhos das colunas
fputcsv($output, array('ID', 'Dado'));

// Preencher os dados do banco de dados no arquivo CSV
while ($row_data = $result->fetch_assoc()) {
    fputcsv($output, $row_data);
}

// Fechar conexão
$conn->close();
