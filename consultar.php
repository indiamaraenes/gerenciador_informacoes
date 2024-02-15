<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php include('layout/header.php'); ?>
    <div class="container">
        <h2>Consulta de Dados</h2>
        <p>Insira o ID do dado que deseja consultar</p>
        <form method="GET" action="">
            <label for="id">ID:</label>
            <input type="text" name="id" id="id" required>
            <button type="submit" name="submit">Consultar</button>
        </form>
        <?php
        // Verifica se o formulário foi submetido
        if (isset($_GET['submit'])) {
            // Conectar ao banco de dados
            $conn = new mysqli("localhost", "root", "", "gerenciador_info");

            // Verificar conexão
            if ($conn->connect_error) {
                die("Conexão falhou: " . $conn->connect_error);
            }

            // Limpa a entrada do usuário para evitar injeção de SQL
            $id = $conn->real_escape_string($_GET['id']);

            // Consultar dados do banco de dados
            $sql = "SELECT * FROM informacoes WHERE id = '$id'"; // Adiciona aspas simples em torno do valor de $id
            $result = $conn->query($sql);

            // Exibir os dados em uma tabela
            if ($result) {
                if ($result->num_rows > 0) {
                    echo "<table>";
                    echo "<thead><tr><th>ID</th><th>Dado</th></tr></thead>";
                    echo "<tbody>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["dado"] . "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody></table>";

                    // Adicionar botão de exportação para Excel
                    echo "<form action='exportar_excel.php' method='post'>";
                    echo "<input type='hidden' name='id' value='$id'>";
                    echo "<button type='submit' name='exportar_csv'>Exportar CSV</button>";
                    echo "</form>";
                } else {
                    echo "Nenhum resultado encontrado.";
                }
            } else {
                echo "Erro ao executar a consulta: " . $conn->error;
            }


            // Fechar conexão
            $conn->close();
        }
        ?>
    </div>
    <?php include('layout/footer.php'); ?>
</body>

</html>