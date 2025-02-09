<?php
session_start();
include 'database.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ 
    $email = $_POST['email'];
    $name = $_POST['username'];
    $password = $_POST["password"];
    if (empty($name) || empty($password) || empty($email)) {
        die("Name, password, and email are required.");
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO signup (username, email, password) VALUES ('$name', '$email', '$password')";
    if (mysqli_query($conn, $sql)) 
    {
        $user_id = mysqli_insert_id($conn);
        $_SESSION['user_id'] = $user_id;
        header("Location: ../frontend/HomePage.php");
    } 
    else 
    {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
