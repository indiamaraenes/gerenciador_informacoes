<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <?php include('layout/header.php'); ?>
  <main>
    <div class="container">
      <h2>Listar Dados</h2>

      <?php
      // Configurar paginação (ajustar valores de acordo com a sua necessidade)
      $itens_por_pagina = 5; // Número de itens por página
      $pagina_atual = (isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1); // Página atual (se não houver, começa na 1)

      // Conectar ao banco de dados
      $conn = new mysqli("localhost", "root", "", "gerenciador_info");

      // Verificar conexão
      if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
      }

      // Contar o número total de itens
      $sql_total = "SELECT COUNT(*) FROM informacoes";
      $result_total = $conn->query($sql_total);
      $total_itens = $result_total->fetch_row()[0];

      // Calcular o número de páginas
      $numero_paginas = ceil($total_itens / $itens_por_pagina);

      // Consultar dados da página atual
      $offset = ($pagina_atual - 1) * $itens_por_pagina;
      $sql = "SELECT * FROM informacoes LIMIT $itens_por_pagina OFFSET $offset";
      $result = $conn->query($sql);

      // Mostrar links de paginação
      if ($numero_paginas > 1) {
        echo "<div class='paginacao'>";
        for ($i = 1; $i <= $numero_paginas; $i++) {
          $classe_ativa = ($i == $pagina_atual) ? "ativa" : "";
          echo "<a href='?pagina=$i' class='$classe_ativa'>$i</a>";
          echo " ";
        }
        echo "</div>";
      }
      ?>

      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Dado</th>
          </tr>
        </thead>
        <tbody>
          <?php
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
          ?>
        </tbody>
      </table>

      <h6>Total de registros: <?php echo $total_itens; ?></h6>
      <a href="index.php">Voltar para o início</a>
    </div>
 


  </main>
  <?php include('layout/footer.php'); ?>
</body>

</html>