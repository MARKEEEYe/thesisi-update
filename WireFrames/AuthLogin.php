<?php
session_start(); // Start the session

include 'db_connect.php'; // Include the database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("SELECT user_id, password, role FROM Users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // Check if the user exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $hashed_password, $role);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, set session variables
            $_SESSION['user_id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $role;

            // Redirect to the dashboard or another page
            header("Location: dashboard.php");
            exit();
        } else {
            // Invalid password
            $_SESSION['error_message'] = "Invalid username or password.";
            header("Location: login.php");
            exit();
         
            
        }
    } else {
        // User not found
        $_SESSION['error_message'] = "Invalid username or password.";
            header("Location: login.php");
            exit();
    }

 
}
$stmt->close();
$conn->close();
?>