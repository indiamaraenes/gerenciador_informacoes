
<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar ao banco de dados
    $conn = new mysqli("localhost", "root", "", "gerenciador_info");

    // Verificar conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Limpar a entrada do usuário para evitar injeção de SQL
    $dado = $conn->real_escape_string($_POST['dado']);

    // Inserir os dados no banco de dados
    $sql = "INSERT INTO informacoes (dado) VALUES ('$dado')";
    if ($conn->query($sql) === TRUE) {
        $mensagem = "Dados inseridos com sucesso!";
    } else {
        $mensagem = "Erro ao inserir dados: " . $conn->error;
    }

    // Fechar conexão
    $conn->close();
} else {
    // Se o formulário não foi submetido corretamente, redireciona para a página de inserção com uma mensagem de erro
    header("Location: inserir.php?erro=1");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Informação - Processamento</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h2>Inserir Informação - Processamento</h2>
        <p>
            <?php echo $mensagem; ?>
        </p>
        <br>
        <a href="inserir.php">Voltar para inserir mais dados</a>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>