<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-6xl text-center text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Book') }}
        </h2>
    </x-slot>

        <div class="flex container items-center justify-center mx-auto py-10">
            <form action="{{ route('manajemen.update', $books->id)  }}" method="post" class="mx-auto" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
                    <input type="text" name="judulbuku" id="title" value="{{ $books->judulbuku }}" class=" w-[50rem] p-2 border border-gray-300 rounded">
                </div>
                <div class="mb-4">
                    <label for="author" class="block text-gray-700 font-bold mb-2">Description:</label>
                    <input type="text" name="deskripsi" id="author" value="{{ $books->deskripsi }}" class="w-[50rem] p-2 border border-gray-300 rounded">
                </div>
                <div class="mb-4">
                    <label for="code" class="block text-gray-700 font-bold mb-2">Code:</label>
                    <input type="text" name="kode" id="code" value="{{ $books->kode }}" class="w-[50rem] p-2 border border-gray-300 rounded">
                </div>
                <div class="mb-4">
                    <label for="writer" class="block text-gray-700 font-bold mb-2">Writer:</label>
                    <input type="text" name="penulis" id="writer" value="{{ $books->penulis }}" class="w-[50rem] p-2 border border-gray-300 rounded">
                </div>
                <div class="mb-4">
                    <label for="publisher" class="block text-gray-700 font-bold mb-2">Publisher:</label>
                    <input type="text" name="penerbit" id="publisher" value="{{ $books->penerbit }}" class="w-[50rem] p-2 border border-gray-300 rounded">
                </div>
                <div class="mb-4">
                    <label for="publishedyear" class="block text-gray-700 font-bold mb-2">Published Year:</label>
                    <input type="text" name="tahun_terbit" id="publishedyear" value="{{ $books->tahun_terbit }}" class="w-[50rem] p-2 border border-gray-300 rounded">
                </div>
                <div class="mb-4">
                    <label for="gambarbuku" class="block text-gray-700 font-bold mb-2">Book's Picture:</label>
                    <input type="file" name="gambarbuku" id="gambarbuku" class="w-[50rem] p-2 border border-gray-300 rounded">
                    <img src="{{ asset('storage/products/'.$books->gambarbuku) }}" alt="">
                </div>
                <div class=" flex gap-5">
                    <button type="submit" class=" w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition">Update</button>
                </div>
            </form>
        </div>
</x-app-layout>