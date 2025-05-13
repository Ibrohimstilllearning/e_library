<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white text-2xl font-bold">E-Library</a>
            <ul class="flex space-x-6 text-white">
                <li><a href="/" class="hover:underline">Home</a></li>
                <li><a href="/books" class="hover:underline">Books</a></li>
                <li><a href="/store" class="hover:underline">Store</a></li>
                <li><a href="/contact" class="hover:underline">Contact</a></li>
            </ul>
            <div>
                @auth
                    <a href="/dashboard" class="text-white px-4 py-2 bg-green-500 rounded">Dashboard</a>
                @else
                    <a href="/login" class="text-white px-4 py-2 bg-gray-700 rounded">Login</a>
                    <a href="/register" class="text-white px-4 py-2 bg-yellow-500 rounded">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    {{-- isi halaman store --}}
    <div class="container mx-auto px-6 py-12">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Lokasi Toko Perpustakaan</h1>
        <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-700">Perpustakaan Solo</h2>
            <p class="text-gray-600">Alamat: Jalan Jendral Sudirman, Solo</p>
            <p class="text-gray-600">Telepon: (0274) 1234567</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6 mt-6">
            <h2 class="text-xl font-semibold text-gray-700">Perpustakaan Yogyakarta</h2>
            <p class="text-gray-600">Alamat: Jalan Malioboro, Yogyakarta</p>
            <p class="text-gray-600">Telepon: (0274) 7654321</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6 mt-6">
            <h2 class="text-xl font-semibold text-gray-700">Perpustakaan Jakarta</h2>
            <p class="text-gray-600">Alamat: Jalan Sudirman, Jakarta</p>
            <p class="text-gray-600">Telepon: (021) 9876543</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6 mt-6">
            <h2 class="text-xl font-semibold text-gray-700">Perpustakaan Bandung</h2>
            <p class="text-gray-600">Alamat: Jalan Braga, Bandung</p>
            <p class="text-gray-600">Telepon: (022) 1234567</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6 mt-6">
            <h2 class="text-xl font-semibold text-gray-700">Perpustakaan Surabaya</h2>
            <p class="text-gray-600">Alamat: Jalan Tunjungan, Surabaya</p>
            <p class="text-gray-600">Telepon: (031) 7654321</p>
        </div>
        </div>
    </div>
</body>
</html>