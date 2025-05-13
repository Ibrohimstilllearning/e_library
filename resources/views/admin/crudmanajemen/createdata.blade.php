<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Book</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-6xl font-bold mb-6 text-center"> Add Book </h2>

        <form action="{{ route("manajemen.store") }}" method="post" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div class="">
                <label for="" class="block font-medium">Book Title</label>
                <input type="text" name="judulbuku" class=" w-full border p-2 rounded" id="" >
                @error('judulbuku')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="">
                <label for="" class="block font-medium">Description</label>
                <textarea name="deskripsi" class=" w-full border p-2 rounded" id="" cols="30" rows="10"></textarea>
                @error('deskripsi')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="">
                <label for="" class="block font-medium">Code</label>
                <input type="text" name="kode" class=" w-full border p-2 rounded" id="" >
                @error('kode')  
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="">
                <label for="" class="block font-medium">Writer</label>
                <input type="text" name="penulis" class=" w-full border p-2 rounded" id="" >
                @error('penulis')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="">
                <label for="" class="block font-medium">Publisher</label>
                <input type="text" name="penerbit" class=" w-full border p-2 rounded" id="" >
                @error('penerbit')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="">
                <label for="" class="block font-medium">Published Year</label>
                <input type="text" name="tahun_terbit" class=" w-full border p-2 rounded" id="" >
                @error('tahun_terbit')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="">
                <label for="" class="block font-medium">Book's Picture</label>
                <input type="file" name="gambarbuku" class=" w-full border p-2 rounded" id="" >
                @error('gambarbuku')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class=" w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition">Add</button>
            <a href="{{ route("manajemen.index") }}" class=" w-full bg-gray-500 text-white py-2 rounded hover:bg-gray-600 transition"></a>
            
        </form>
    </div>
    
</body>
</html>