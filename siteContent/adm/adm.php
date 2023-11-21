<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <h2>Welcome to the Admin Page</h2>
    
    <?php
    session_start();
    ?>

    <p>Choose an action:</p>

    <form action="eventos.php" method="post">
        <input type="submit" value="Manage Eventos">
    </form>

    <form action="conhecaMimis.php" method="post">
        <input type="submit" value="Conheça Mimis">
    </form>

    <form action="patrocinadores.php" method="post">
        <input type="submit" value="Manage Patrocinadores">
    </form>

    <form action="colaboradores.php" method="post">
        <input type="submit" value="Manage Colaboradores">
    </form>

    <br>

    <form action="logout.php" method="post">
        <input type="submit" value="Logout">
    </form>
</body>
</html>
