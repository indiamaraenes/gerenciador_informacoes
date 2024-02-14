/**
 * This file represents the main page of the information management system.
 * It includes the header and footer files and displays a menu with options to insert, 
 * consult, delete, and list information.
 */
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <main>
        <div class="container">
            <h2>Menu</h2>
            <ul>
                <li><a href="inserir.php">Inserir Informação</a></li>
                <li><a href="consultar.php">Consultar Informações</a></li>
                <li><a href="apagar.php">Apagar Informação</a></li>
                <li><a href="listar.php">Listar Informações</a></li>
            </ul>
        </div>
    </main>

    <?php include 'footer.php'; ?>
</body>

</html>