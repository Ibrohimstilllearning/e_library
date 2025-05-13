<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <body class=" bg-gray-100 text-gray-800 p-6">
        <div class=" max-w-xl mx-auto bg-white shadow-lg rounded-2xl p-8">
            {{-- Judul Buku --}}
            <h1 class=" text-3xl font-bold mb-4 text-center text-blue-700">{{ $books->judulbuku }}</h1>

            {{-- Info Buku --}}
            <div class=" grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <div class="">
                    <p class=" text-sm text-gray-500">Penulis:</p>
                    <p class=" text-lg font-medium">{{ $books->detailmanajemen->penulis  ?? 'Tidak Tersedia'}}</p>
                </div>
                <div>
                    <p class=" text-sm text-gray-500">Penerbit:</p>
                    <p class=" text-lg font-medium">{{ $books->detailmanajemen->penerbit ?? 'Tidak Tersedia' }}</p>
                </div>
                <div>
                    <p class=" text-sm text-gray-500">Tahun Terbit:</p>
                    <p class=" text-lg font-medium">{{ $books->detailmanajemen->tahun_terbit ?? 'Tidak Tersedia' }}</p>
                </div>
            </div>

            {{-- Isi Buku --}}
            <div class=" prose max-w-none text-justify">
                <p class=" text-xl font-semibold mb-2 text-blue-600">Isi Buku:</p>
                <p class="">{{ $books->deskripsi }}</p>
            </div>

            {{-- Tombol kembali --}}
            @if (Auth::user()->usertype === 'admin')
                <a href="{{ route('admin.dashboard')}}" class=" inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow transition duration-300 mt-5">Kembali</a>
            @else
                <a href="{{ route('dashboard')}}" class=" inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow transition duration-300 mt-5">Kembali</a>
            @endif
        </div>
    </body>
</body>
</html>
