
<?php
include 'db_connect.php'; // Include the database connection file

// Check if the form is submitted
if (isset($_POST["submit"])) {
    $name = $conn->real_escape_string($_POST["name"]);
    $student_id = $conn->real_escape_string($_POST["id"]);
    $email = $conn->real_escape_string($_POST["email"]);

    // Create the table if it doesn't exist
    $sqlCreateTable = "CREATE TABLE IF NOT EXISTS registered (
        name VARCHAR(255) NOT NULL,
        student_id INT,
        email VARCHAR(255) NOT NULL
    )";

    if ($conn->query($sqlCreateTable) === TRUE) {
        echo "<p>Table created successfully or already exists.</p>";
    } else {
        echo "<p>Error creating table: " . $conn->error . "</p>";
    }

    // Use prepared statements to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO registered (name, student_id, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $name, $student_id, $email);

    if ($stmt->execute() === TRUE) {
        echo "<p>Data inserted successfully!</p>";
    } else {
        echo "<p>Error inserting data: " . $stmt->error . "</p>";
    }

    // Close the statement and the connection
    $stmt->close();
    $conn->close();
} else {
    echo "<p>No data submitted</p>";
}
?>
