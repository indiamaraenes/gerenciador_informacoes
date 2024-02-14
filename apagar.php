<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar informação</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'header.php'; ?> 
    <div class="container">
        <h2>Apagar Informação</h2>
        <form action="apagar.php" method="get">
            <label for="id">ID:</label><br>
            <input type="text" id="id" name="id"><br>
            <input type="submit" value="Apagar">
            <button onclick="window.location.href='index.php'">voltar</button>
        </form>


        <?php
        // Verificar se foi enviado um ID a ser apagado
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            // Conectar ao banco de dados
            $conn = new mysqli("localhost", "root", "", "gerenciador_info");

            // Verificar conexão
            if ($conn->connect_error) {
                die("Conexão falhou: " . $conn->connect_error);
            }

            $id = $_GET['id'];

            // Preparar e executar a consulta SQL
            $sql = "DELETE FROM informacoes WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $id);
            if ($stmt->execute()) {
                if ($stmt->affected_rows > 0) {
                    echo "Informação com o ID $id foi apagada com sucesso";
                } else {
                    echo "Não existe informação com o ID $id";
                }
            } else {
                echo "Erro ao apagar informação: " . $conn->error;
            }
            $stmt->close();

            // Fechar conexão
            $conn->close();
        }
        ?>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>