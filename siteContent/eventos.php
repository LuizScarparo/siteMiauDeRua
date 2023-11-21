<?php 
include 'includes/header.php';
?>
<h2 class="secondTitle">Nossos eventos</h2>
    <div class="container text-center text-bg-light p-3">
    <?php
    // Your database connection code (assuming you already have a connection)
    include "./adm/api/connection.php"; // Include your database connection file

    // Retrieve content from the database (adjust the query based on your database structure)
    $sql = "SELECT * FROM eventos"; // Assuming 'eventos' is your table name
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="row">
                    <div class="col">
                        <img src="' . $row['image_path'] . '" alt="' . $row['event_name'] . '" class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    </div>
                    <div class="col">
                        <h5 class="eventTitle">' . $row['event_name'] . '</h5>
                        <p class="row">' . $row['event_description'] . '</p>
                    </div>
                  </div>';
        }
    } else {
        echo "No events found.";
    }

    // Close the database connection
    $conn->close();
    ?>
</div>
    </div>
<?php 
include 'includes/footer.php';
?>
</body>

</html>