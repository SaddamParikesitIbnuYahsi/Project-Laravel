<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center h-screen bg-pink-300">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <form action="#">
            <div class="mb-4">
                <label for="username" class="block text-gray-700 font-semibold mb-2">Username</label>
                <input type="text" id="username" name="username" value="Saddam" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300 focus:border-blue-500" />
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                <input type="password" id="password" name="password" value="*****" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300 focus:border-blue-500" />
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-blue-500 text-white font-semibold py-2 px-6 rounded-md hover:bg-blue-600">LOGIN</button>
            </div>
        </form>
    </div>
</body>
</html>
