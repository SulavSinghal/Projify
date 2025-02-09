<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../frontend/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Confirmation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<header class="bg-white shadow">
    <div class="container mx-auto p-4 flex justify-between items-center">
        <div class="flex items-center">
            <img src="../assets/logo.jpg" alt="Logo" class="h-10">
            <h1 class="text-xl font-bold ml-4">Projify</h1>
        </div>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="IdeaSubmission.php" class="text-gray-700 hover:text-blue-500">Submit Your Ideas</a></li>
                <li><a href="AboutUs.php" class="text-gray-700 hover:text-blue-500">About Us</a></li>
                <li><a href="Contact.php" class="text-gray-700 hover:text-blue-500">Contact Us</a></li>
            </ul>
        </nav>
        <div class="flex items-center space-x-10"> 
            <h2 class="font-semibold">Welcome, <?php echo $_SESSION['name']; ?></h2>
            <a href="logout.php" class="text-black-500 hover:text-blue-500 font-bold mx-2">Logout</a>
        </div>
    </div>
</header>
    <main class="flex justify-center items-center h-screen">
        <div class="bg-white p-10 rounded-lg shadow">
        <h2 class="text-2xl font-semibold mb-4">Submission Successful!</h2>
        <p class="text-gray-600 mb-4">Your project idea has been submitted successfully.</p>
        <a href="IdeaSubmission.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Submit Another Idea</a>
        <a href="LandingPage.php" class="ml-4 bg-gray-300 text-black px-4 py-2 rounded hover:bg-gray-400">Home</a>
    </div>
</main>
</body>
</html>
