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


    <div class="p-6 bg-gray-100 min-h-screen">
        <div class="overflow-x-auto bg-white rounded-2xl shadow-md">
            <table class="min-w-full text-sm text-left text-gray-700">
                <thead class=" bg-indigo-600 text-white">
                    <tr>
                        <th scope="col" class="px-6 py-4">No</th>
                        <th scope="col" class="px-6 py-4">Gambar</th>
                        <th scope="col" class="px-6 py-4">Judul Buku</th>
                    </tr>
                </thead>
                <tbody class=" divide-y divide-gray-200">
                    @foreach ($books as $book )
                        <tr class="hover:bg-indigo-50 transition">
                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4">
                                <img src="{{ asset('storage/products/'.$book->gambarbuku) }}" width="150" alt="" srcset="" class="w-12 h-16 object-cover rounded-md">
                            </td>
                            <td class="px-6 py-4">{{ $book->judulbuku }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>