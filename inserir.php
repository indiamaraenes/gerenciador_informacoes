<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Informação</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h2>Inserir Informação</h2>
        <form action="inserir_processar.php" method="post">
            <label for="dado">Dado:</label><br>
            <input type="text" id="dado" name="dado" required>
            <br> 
            <input type="submit" value="Inserir">
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>
