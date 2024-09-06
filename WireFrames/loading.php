<?php

$servername = "localhost";
$username = "root"; // default XAMPP MySQL user
$password = ""; // default XAMPP MySQL password
$dbname = "wfdb"; // Your database name

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}




	
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];  

    $password_hashed = password_hash($password, PASSWORD_BCRYPT);
   
        // Insert the first admin user
        $stmt = $db->prepare("INSERT INTO Users (username, password, email, role, created_at) VALUES (?, ?, ?, 'admin', NOW())");
        $stmt->bind_param("sss", $username, $password_hashed, $email);
        $stmt->execute();
     sleep(5);
        header('Location: login.php');
        exit();

    






?>