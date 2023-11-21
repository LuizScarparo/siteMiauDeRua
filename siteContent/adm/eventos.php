<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>

<body>
    <h2>Admin Panel</h2>
    <form method="post" action="eventos.php">
        Título: <input type="text" name="tituloEvento"><br>
        Conteudo do texto: <input type="text" name="descricaoEvento"><br>
        Imagem: <input type="text" name="imagem"><br>
        <input type="submit" value="Adicionar">
    </form>

    <?php
include "./api/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the required fields are set in the $_POST array
    if (isset($_POST['tituloEvento'], $_POST['descricaoEvento'], $_POST['imagem'])) {
        $titulo = $_POST['tituloEvento'];
        $descricao = $_POST['descricaoEvento'];
        $imagem = $_POST['imagem'];

        // Use a single INSERT query to insert all data at once
        $insertQuery = "INSERT INTO eventos (tituloEvento, descricaoEvento, imagem) VALUES ('$titulo', '$descricao', '$imagem')";

        if ($conexao->query($insertQuery) === TRUE) {
            echo "Deu certo";
        } else {
            echo "Erro: " . $conexao->error;
        }
    } else {
        echo "Erro: Campos obrigatórios não foram preenchidos.";
    }
}

$conexao->close();
?>
