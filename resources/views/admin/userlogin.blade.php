<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Page') }}
        </h2>
    </x-slot>

    <div class="p-6">
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300">
                <thead>
                    <tr class=" bg-gray-200">
                        <th class=" border border-gray-300 px-4 py-2">No</th>
                        <th class=" border border-gray-300 px-4 py-2">Nama</th>
                        <th class=" border border-gray-300 px-4 py-2">Email</th>
                        <th class=" border border-gray-300 px-4 py-2">Password</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($akunuser as $akun )
                    @if($akun->usertype == 'user')
                        <tr class=" hover:bg-gray-100 text-white hover:text-black transition">
                            <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $akun->name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $akun->email }}</td>
                            <td class="border border-gray-300 px-4 py-2"> {{  $akun->password }} </td>
                        </tr>
                    @endif
                    @endforeach
            </table>
        </div>
    </div>
</x-app-layout>
