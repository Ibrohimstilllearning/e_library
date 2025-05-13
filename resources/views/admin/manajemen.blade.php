<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-6xl text-center text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Book Management') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-10">

       
        <div class="text-3xl font-bold text-center mb-10">
            <h1 class="block my-3 text-white text-center font-bold text-xl">E - Library</h1>
            {{-- Add button --}}
            <div class="mb-10 mt-4 text-center">
                <a href="{{ route('manajemen.create') }}" class="bg-green-500  hover:bg-green-700 transition text-white font-bold py-2 px-4 rounded">
                    Add Data
                </a>
            </div>

            {{-- Book Grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6" id="bookList">
                    @foreach ($books as $book )
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <img src="{{ asset('storage/products/'.$book->gambarbuku) }}" alt="">
                            <h3 class="text-lg font-bold mt-3"> {{ $book->judulbuku }} </h3>
                            <div class="flex justify-between mt-3">
                            <a href="{{ route('manajemen.edit', $book->id) }}" class="bg-blue-500 hover:bg-blue-700 transition text-white font-bold py-2 px-4 rounded">
                                Edit
                            </a>
                            <form action="{{ route('manajemen.destroy', $book->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 transition text-white font-bold py-2 px-4 rounded">
                                    Delete
                                </button>
                            </form>
                        </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if(session('success'))
            Swal.fire({
                title: 'Success!',
                text: '{{ session('
                success ') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        @elseif(session('error'))
            Swal.fire({
                title: 'Error!',
                text: '{{ session('
                error ') }}',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        @endif

    </script>
</x-app-layout>