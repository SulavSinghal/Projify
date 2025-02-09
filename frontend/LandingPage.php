<?php
session_start(); 
if(!isset($_SESSION['user_id'])) {
    header('location: ../frontend/login.php');
    exit;
}
$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="../assets/filterfunction.js" defer></script>
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
            <h2 class="font-semibold">Welcome, <?php echo htmlspecialchars($name); ?></h2>
            <a href="logout.php" class="text-black-500 hover:text-blue-500 font-bold mx-2">Logout</a>
        </div>
    </div>
</header>
<main class="container mx-auto px-4 py-8">
    <div class="bg-white p-6 rounded-lg shadow mb-8">
        <h2 class="text-lg font-semibold mb-4">Search Projects by Skills</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <label class="flex items-center space-x-2">
                <input type="checkbox" >
                <span>JavaScript</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox" >
                <span>PHP</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox">
                <span>HTML</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox">
                <span>CSS</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox">
                <span>Canva</span>
            </label>
            <label class="flex items-center space-x-2">
                <input type="checkbox">
                <span>C</span>
            </label>
        </div>
        <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" onclick="filterProjects()">Search</button>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- project display in landing page -->

        <?php
        $conn = new mysqli("localhost", "root", "", "project");
        $project_query = "SELECT * FROM project_ideas";
        $project_query_run = mysqli_query($conn, $project_query);
        if (mysqli_num_rows($project_query_run) > 0) {
            foreach ($project_query_run as $projectIdeas) {
                ?>
                <div class="bg-white p-6 rounded-lg shadow project-card" data-skills="<?= htmlspecialchars($projectIdeas['skills_required']); ?>">
                    <h3 class="text-xl font-semibold mb-2"><?= htmlspecialchars($projectIdeas['project_title']); ?></h3>
                    <p class="text-gray-600 mb-4"><?= htmlspecialchars($projectIdeas['project_description']); ?></p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-blue-300 px-2 py-1 rounded text-sm"><?= htmlspecialchars($projectIdeas['skills_required']); ?></span>
                    </div>
                    <p class="text-gray-600 mb-4"><?= htmlspecialchars($projectIdeas['additional_comments']); ?></p>
                    
                </div>
                <?php
            }
        } else {
            echo "<div class='col-span-full text-center'>No data available</div>";
        }
        ?>


    </div>
</main>
</body>
</html>