<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage To-Do-List</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-blue-50 to-purple-100 min-h-screen flex items-center justify-center">

    <div class="text-center px-6">
        <h1 class="text-4xl md:text-6xl font-extrabold text-gray-800 drop-shadow-lg">
            Manage <span class="text-indigo-500">To-Do-List</span>
        </h1>

        <p class="mt-4 text-gray-600 text-lg md:text-xl">
            Simple, fast, and beautifully organized task management.
        </p>

        <div class="mt-8 flex justify-center space-x-4">
            <a href="{{ route('login') }}"
               class="px-6 py-3 bg-indigo-500 text-white rounded-lg shadow-md hover:bg-indigo-600 transition">
                Login
            </a>

            <a href="{{ route('register') }}"
               class="px-6 py-3 bg-white text-indigo-600 border border-indigo-400 rounded-lg shadow-md hover:bg-indigo-50 transition">
                Register
            </a>
        </div>
    </div>

</body>
</html>
