<?php
// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Connect to MySQL database
$servername = "127.0.0.1";
$username = "root";
$password = "Poopoo7563!!";
$dbname = "testserver";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute SQL statement to insert user information
$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $hashedPassword);

if ($stmt->execute()) {
    // Signup successful, redirect to login page
    header("Location: login.html");
    exit();
} else {
    // Error handling
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
