<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreshFruits</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-green-500">
    <!-- Navbar -->
    <nav class="flex justify-between items-center p-6">
        <div class="text-white font-bold text-2xl">FreshFruits</div>
        <ul class="flex space-x-6 text-white">
            <li><a href="#" class="hover:text-gray-300">Home</a></li>
            <li><a href="#" class="hover:text-gray-300">About</a></li>
            <li><a href="#" class="hover:text-gray-300">Products</a></li>
            <li><a href="#" class="hover:text-gray-300">Contact</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="flex flex-col items-center justify-center h-screen text-center text-white">
        <h1 class="text-5xl font-bold mb-4">Fresh and Organic Fruits</h1>
        <p class="text-xl mb-6">Delivering fresh fruits straight from the farm to your door!</p>
        <a href="#" class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-8 rounded-md">Shop Now</a>
    </section>

    <!-- About Section -->
    <section class="bg-white py-12">
        <div class="text-center">
            <h2 class="text-3xl font-semibold mb-4">About Us</h2>
            <p class="text-gray-700">Berisi Buah buahan segar yang baru saja diambil dari Kebun.</p>
        </div>
    </section>
</body>
</html>
