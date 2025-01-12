<?php
// Database credentials
$host = "localhost";
$username = "root";
$password = "";
$database = "reviews_db";

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $review = $conn->real_escape_string($_POST['review']);

    // Insert data into the database
    $sql = "INSERT INTO reviews (name, email, review) VALUES ('$name', '$email', '$review')";

    if ($conn->query($sql) === TRUE) {
        echo "Review submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
