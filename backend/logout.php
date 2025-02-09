<?php
include 'database.php';
session_start();
session_unset();
session_destroy();
header('Location: ../frontend/HomePage.php');
exit();
?>