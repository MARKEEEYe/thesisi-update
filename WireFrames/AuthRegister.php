<?php
// Database credentials
$servername = "localhost";
$username = "root"; // default XAMPP MySQL user
$password = ""; // default XAMPP MySQL password
$dbname = "wf_database"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data 
$iduser = $_POST['userid'];
$user = $_POST['username'];
$pass = $_POST['password'];


// Hash the password
$hashed_password = password_hash($pass, PASSWORD_DEFAULT);

// Insert user into the database
$sql = "INSERT INTO users (idnumber ,username, password) VALUES ('$iduser','$user', '$hashed_password')";
if ($conn->query($sql) === TRUE) {
    echo "User Succesfully Registered";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
