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
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
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
                    <li><a href="IdeaSubmission.php" class="text-gray-700 hover:text-blue-500">Submit your Ideas</a></li>
                </ul>
            </nav>
            <div> 
                <a href="../backend/logout.php" class="text-black-500 hover:text-blue-500 font-bold mx-2">Logout</a>
</div>
        </div>
        </div>
    </header>
    <main class="container mx-auto my-10 p-6">
        <section class="mb-8">
            <h2 class="text-3xl font-semibold mb-4">Get in Touch</h2>
            <p class="text-gray-600">If you have any questions, comments, or feedback, feel free to reach out to us using the form below or through our contact information.</p>
        </section>

        <section class="flex justify-center mb-8">
            <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-lg">
                <h2 class="text-3xl font-semibold mb-4 text-center">Contact Form</h2>
                <form action="../backend/Contact_backend.php" method="POST" class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text"  name="name" required class="mt-1 block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500" placeholder="Your Name">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email"  name="email" required class="mt-1 block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500" placeholder="Your Email">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea name="message" required class="mt-1 block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500" rows="6" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-700 transition duration-200">Send Message</button>
                </form>
            </div>
        </section>

        <section class="mb-8">
            <h2 class="text-3xl font-semibold mb-4">Contact Information</h2>
            <p class="text-gray-600"><strong>Email:</strong> <a href="mailto:b230033@nitsikkim.ac.in.com" class="text-blue-600 underline">b230033@nitsikkim.ac.in</a></p>
            <p class="text-gray-600"><strong>Phone:</strong> 9800111619</p>
            <p class="text-gray-600"><strong>Address:</strong> Jorethang, Sikkim, India</p>
        </section>

        <section>
            <h2 class="text-3xl font-semibold mb-4">Follow Us</h2>
            <p class="text-gray-600">Stay connected with us on social media:</p>
                <li><a href="" class="text-blue-600 hover:underline">Instagram</a></li>
                <li><a href="" class="text-blue-600 hover:underline">LinkedIn</a></li>
            </ul>
        </section>
    </main>
    <footer class="text-center text-gray-500 mt-6">
        <p>&copy; 2024 Sulav Singhal All rights reserved.</p>
    </footer>