<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include('layout/header.php'); ?>
    <div class="container">
        <h2>Listar Dados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Dado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Conectar ao banco de dados
                $conn = new mysqli("localhost", "root", "", "gerenciador_info");

                // Verificar conexão
                if ($conn->connect_error) {
                    die("Conexão falhou: " . $conn->connect_error);
                }

                // Consultar dados do banco de dados
                $sql = "SELECT * FROM informacoes";
                $result = $conn->query($sql);

                // Exibir os dados em uma tabela
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["dado"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>0 resultados</td></tr>";
                }

                // Fechar conexão
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>