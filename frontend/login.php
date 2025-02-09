<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <header class="text-black py-6">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">Login</h1>
            <p class="mt-4 pt-4 text-lg">Welcome back! Please log in to your account.</p>
        </div>
    </header>

    <main class="container mx-auto my-10 p-6">
        <section class="flex justify-center">
            <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-lg">
                <h2 class="text-3xl font-semibold mb-4 text-center">Login</h2>
                
                <form action="../backend/loginbackend.php" method="POST" class="space-y-6">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" required class="mt-1 block w-full p-3 border border-gray-300 rounded-md" placeholder="Your Email">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" required class="mt-1 block w-full p-3 border border-gray-300 rounded-md" placeholder="Your Password">
                    </div>

                    <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-700 transition duration-200">Log In</button>
                </form>

                <p class="mt-4 text-center text-gray-600">
                    Don't have an account? 
                    <a href="signup.php" class="text-blue-600 hover:underline">Sign up here</a>
                </p>
            </div>
        </section>
    </main>

    <footer class=" text-black py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Sulav Singhal. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>