<?php
session_start();
include 'database.php';
if (!isset($_SESSION['user_id'])) {
    error_log("Unauthorized access attempt to ContactBackend.php");
    header("Location: ../frontend/login.php");
    exit;
}
$user_id = $_SESSION['user_id'];
$user_query = "SELECT username, email FROM signup WHERE user_id = '$user_id'";
$user_result = mysqli_query($conn, $user_query);
$user = mysqli_fetch_assoc($user_result);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $message = $_POST['message']; 
    $name = $user['username'];
    $email = $user['email'];
    
    if (empty($name) || empty($email) || empty($message)) {
        echo "All required fields must be filled out.";
        exit;
    }
    $query = "INSERT INTO contact (user_id, name, email, message) 
              VALUES ('$user_id', '$name', '$email', '$message')";
    if (mysqli_query($conn, $query)) {
        echo "form submitted successfully.";
        exit;
    } else {
        error_log("Database error: " . mysqli_error($conn));
        echo "Error submitting form. Please try again.";
    }
}

mysqli_close($conn);
?>
