<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Informação</title>
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
<?php include('layout/header.php');?>
<main>
    <div class="container">
        <h2>Inserir Informação</h2>
        <form action="inserir_processar.php" method="post">
            <label for="dado">Escreva sua informação</label><br>
            <input type="text" id="dado" name="dado" required>
            <br>
            <button type="submit" name="submit">Inserir</button>
        </form>
    </div>
</main>
    <?php include('layout/footer.php');?>
</body>

</html>