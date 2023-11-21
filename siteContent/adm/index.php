<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>
    
    <?php
    session_start();
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve user input
        $user = $_POST["username"];
        $pass = $_POST["password"];

        // Your database connection code (assuming you already have a connection)
        include "./api/connection.php"; // Include your database connection file

        // Your authentication logic
        $sql = "SELECT * FROM users WHERE user = '$user'";


        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($pass == $row["pass"]) {
                $_SESSION["user_id"] = $row["id"];

                // Redirect to eventos.php
                header("Location: adm.php");
                exit();
            } else {
                echo "Invalid password. Please try again.";
            }
        } else {
            echo "Invalid username. Please try again.";
        }

        // Close the database conexaoection
        $conexao->close();
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
