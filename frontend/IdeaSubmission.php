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
    <title>Idea Submission</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<header class="bg-white shadow">
        <div class="container mx-auto p-4 flex justify-between items-center">
            <div class="flex items-center">
                <img src="../assets/logo.jpg" alt="Logo" class="h-10">
                <h1 class="text-xl font-bold ml-4">Projify</h1>
            </div>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="LandingPage.php" class=" text-gray-700 hover:text-blue-500">Home</a></li>
                    <li><a href="AboutUs.php" class=" text-gray-700 hover:text-blue-500">About Us</a></li>
                    <li><a href="Contact.php" class="text-gray-700 hover:text-blue-500">Contact Us</a></li>
                </ul>
            </nav>
            <div> 
                <a href="../backend/logout.php" class="text-black-500 hover:text-blue-500 font-bold mx-2">Logout</a>
</div>
        </div>
        </div>
    </header>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8 text-center">Submit Your Project Idea</h1>
        
        <form action = "../backend/IdeaSubmissionBackend.php" method = "POST" class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
            <div class="mb-6">
                <label for="projectTitle" class="block text-gray-700 font-medium mb-2">Project Title</label>
                <input type="text" id="projectTitle" name="projectTitle" 
                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500" 
                       placeholder="Enter project title" required>
            </div>
            <div class="mb-6">
                <label for="projectDescription" class="block text-gray-700 font-medium mb-2">Project Description</label>
                <textarea id="projectDescription" name="projectDescription" rows="4"
                          class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500"
                          placeholder="Describe your project idea" required></textarea>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-2">Skills Required</label>
                <div class="grid grid-cols-2 gap-4">
                    <label class="flex items-center">
                        <input type="checkbox" name="skills[]" value="HTML" class="mr-2">
                        HTML
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="skills[]" value="CSS" class="mr-2">
                        CSS
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="skills[]" value="JavaScript" class="mr-2">
                        JavaScript
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="skills[]" value="PHP" class="mr-2">
                        PHP
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="skills[]" value="Canva" class="mr-2">
                        Canva
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="skills[]" value="C" class="mr-2">
                        C
                    </label>
                </div>
            </div>
            <div class="mb-6">
                <label for="comments" class="block text-gray-700 font-medium mb-2">Additional Comments</label>
                <textarea id="comments" name="comments" rows="3"
                          class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500"
                          placeholder="Any additional information or comments"></textarea>
</div>
            <div class="text-center">
                <button type="submit" 
                        class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                        Submit Idea
                </button>
            </div>
        </form>
    </div>
</body>
</html>
