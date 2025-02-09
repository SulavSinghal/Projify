<?php
session_start();
include 'database.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: ../frontend/login.php");
    exit;
}
$user_id = $_SESSION['user_id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $project_title = mysqli_real_escape_string($conn, trim($_POST['projectTitle']));
    $project_description = mysqli_real_escape_string($conn, trim($_POST['projectDescription']));
    $skills_required = mysqli_real_escape_string($conn, implode(", ", $_POST['skills'] ?? [])); 
    $additional_comments = mysqli_real_escape_string($conn, trim($_POST['comments']));

    if (empty($project_title) || empty($project_description) || empty($skills_required)) {
        echo "All required fields must be filled out.";
        exit;
    }
    $query = "INSERT INTO project_ideas (user_id, project_title, project_description, skills_required, additional_comments) 
              VALUES ('$user_id', '$project_title', '$project_description', '$skills_required', '$additional_comments')";
    if (mysqli_query($conn, $query)) {
        header("Location: ../frontend/SubmissionConfirmation.php");
        exit;
    } else {
        error_log("Database error: " . mysqli_error($conn));
        echo "Error submitting your idea. Please try again.";
    }
}
mysqli_close($conn);
?>