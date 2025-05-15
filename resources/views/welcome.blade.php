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
    <nav class="bg-transparent p-10 items-center">
        <div class="container mx-auto flex justify-between items-center bg-gradient-to-r from-fuchsia-500 to-blue-700 p-4 rounded-full">
           
                <a href="/" class="text-white text-2xl font-extrabold items-center ml-5 flex">E-Library</a>
            <ul class="flex space-x-6 text-white font-bold">
                <li><a href="/" class="hover:underline">Home</a></li>
                <li><a href="/books" class="hover:underline">Books</a></li>
                <li><a href="/categories" class="hover:underline">Store</a></li>
                <li><a href="/contact" class="hover:underline">Contact</a></li>
            </ul>
            <div class="justify-center flex animate-goyang">
                <span class="text-sm text-slate-500 mr-2">Light</span>
                <input type="checkbox" name="" id="toggle" class="hidden">
                <label for="toggle">
                    <div class=" w-11 h-6 bg-sky-500 dark:bg-slate-600 rounded-full flex items-center p-1 cursor-pointer ">
                        <div class="w-4 h-4 rounded-full bg-yellow-400 p-1 toggle-circle transition duration-300 dark:bg-white
                        "></div>
                    </div>
                </label>
                
                <span class="text-sm text-slate-500 ml-2">Dark</span>
            </div>
            <div class=" mr-4">
                @auth
                    <a href="/dashboard" class="text-white px-4 py-2 bg-green-500 rounded">Dashboard</a>
                @else
                    <a href="/login" class="text-white px-4 py-2 bg-gray-700 rounded hover:to-blue-600 transition ease-in-out duration-300">Login</a>
                    <a href="/register" class="text-white px-4 py-2 bg-blue-500 rounded">Register</a>
                @endauth
            </div>
        </div>
    </nav>
    
    <!-- Content -->
    <div class="container mx-auto p-6 banner rounded-xl">
        <div class="flex items-center justify-center h-screen max-h-screen ">
            <div class="text-center p-6 bg-white shadow-lg rounded-lg max-w-md max-h-full overflow-auto">
                <h1 class="text-2xl font-bold text-gray-800">Selamat Datang Di Website My E-library</h1>
                <p class="mt-4 text-gray-600">
                    "Buku adalah jendela dunia, dan membaca adalah kunci untuk membukanya. Setiap halaman yang kamu baca adalah langkah kecil menuju impian besar. Jangan biarkan rasa malas menghalangimu untuk terus belajar dan bertumbuh."
                </p>
                <a href="{{ route('login') }}" class="inline-block mt-6 px-6 py-3 text-white bg-blue-600 hover:bg-blue-700 transition hover:shadow-blue-400 hover:shadow-xl duration-300  ease-in-out rounded-lg shadow-md">
                    Baca Sekarang
                </a>
            </div>
        </div>
    </div>
    <script>
        const checkbox = document.querySelector('#toggle');
        const html = document.querySelector('html');

        checkbox.addEventListener('click', function () {
        checkbox.checked ? html.classList.add('dark') : html.classList.remove('dark');
       })
    </script>
</body>
</html>