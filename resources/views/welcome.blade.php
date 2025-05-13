<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Library</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white text-2xl font-bold">E-Library</a>
            <ul class="flex space-x-6 text-white">
                <li><a href="/" class="hover:underline">Home</a></li>
                <li><a href="/books" class="hover:underline">Books</a></li>
                <li><a href="/categories" class="hover:underline">Store</a></li>
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
    
    <!-- Content -->
    <div class="container mx-auto p-6 banner">
        <img src="{{ asset('assets/banner-elibrary.jpg') }}" alt="">
        <div class="flex items-center justify-center h-screen max-h-screen ">
            <div class="text-center p-6 bg-white shadow-lg rounded-lg max-w-md max-h-full overflow-auto">
                <h1 class="text-2xl font-bold text-gray-800">Selamat Datang Di Website My E-library</h1>
                <p class="mt-4 text-gray-600">
                    "Buku adalah jendela dunia, dan membaca adalah kunci untuk membukanya. Setiap halaman yang kamu baca adalah langkah kecil menuju impian besar. Jangan biarkan rasa malas menghalangimu untuk terus belajar dan bertumbuh."
                </p>
                <a href="{{ route('login') }}" class="inline-block mt-6 px-6 py-3 text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow-md">
                    Baca Sekarang
                </a>
            </div>
        </div>
    </div>
</body>
</html>