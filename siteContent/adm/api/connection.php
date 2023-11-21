<?php
$servername = "localhost"; // Change this to your MySQL server name
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "miauderua"; // Change this to your MySQL database name

// Create connection
$conexao = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
} else {
    // Now you can perform database operations using $conn
    // For example: $conn->query("SELECT * FROM your_table");
}

?>
