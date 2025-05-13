

        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-6xl text-center text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Special Book') }}
                </h2>
            </x-slot>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <script src="https://cdn.tailwindcss.com"></script>
                <title>Special Book</title>
            </head>
            <body>
                <div class="container mx-auto py-10">
                    {{-- Section 1 --}}
                    <section class="mb-8">
                        <h2 class="text-2xl font-bold mb-4 text-white">Programming</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 justify-center">
                            <div class="bg-white p-6 rounded-lg shadow-md w-80 mx-auto">
                                <img src="{{ asset('storage/image/Screenshot 2025-03-21 140419.png') }}" alt="">
                                <h3 class="text-xl font-semibold mt-4 text-center">Big Book Matematika</h3>
                                <a class="w-full block text-center bg-blue-500 text-white px-4 py-2 mt-4 rounded-lg hover:bg-blue-600 transition" href="https://drive.google.com/file/d/1V6Xpwmk6X0vmC6ag3S2ydViYZd53C3iX/view?usp=sharing" target="_blank">Baca</a>
                            </div>
                            <div class="bg-white shadow-md rounded-lg p-4 w-80 mx-auto">
                                <img src="{{ asset('storage\image\Screenshot 2025-04-16 100750.png') }}" alt="">
                                <h3 class="text-xl font-semibold mt-4 text-center">Big Book Matematika SMP</h3>
                                <a class="w-full block text-center bg-blue-500 text-white px-4 py-2 mt-4 rounded-lg hover:bg-blue-600 transition" href="https://drive.google.com/file/d/1mNj6r11BTaHElvYGjbPG-dgRn53lAzxJ/view?usp=drive_link" target="_blank">Baca</a>
                            </div>
                        </div>
                    </section>
                    {{-- Section 2 --}}
                    <section class="mb-8">
                        <h2 class="text-2xl font-bold mb-4 text-white">Sejarah</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 justify-center">
                            <div class="bg-white p-6 rounded-lg shadow-md w-80 mx-auto">
                                <img src="{{ asset('storage\image\Screenshot 2025-04-16 101609.png') }}" alt="">
                                <h3 class="text-xl font-semibold mt-4 text-center">Sejarah Jerusalem</h3>
                                <a class="w-full block text-center bg-blue-500 text-white px-4 py-2 mt-4 rounded-lg hover:bg-blue-600 transition" href="https://drive.google.com/file/d/1xLPM3kNbnsfBdjnzzpFqLN9T-K_QcIQw/view?usp=drive_link" target="_blank">Baca</a>
                            </div>
                            <div class="bg-white shadow-md rounded-lg p-4 w-80 mx-auto">
                                <img src="{{ asset('storage\image\Screenshot 2025-04-16 102044.png') }}" alt="">
                                <h3 class="text-xl font-semibold mt-4 text-center">Jaringan gelap freemason</h3>
                                <a class="w-full block text-center bg-blue-500 text-white px-4 py-2 mt-4 rounded-lg hover:bg-blue-600 transition" href="https://drive.google.com/file/d/1tBghJaWSgoIL5fVCvhG27zIt-E3rpmb0/view?usp=drive_link" target="_blank">Baca</a>
                            </div>
                        </div>
                    </section>
                    {{-- Section 3 --}}
                    <section class="mb-8">
                        <h2 class="text-2xl font-bold mb-4 text-white">Novel</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 justify-center">
                            <div class="bg-white p-6 rounded-lg shadow-md w-80 mx-auto">
                                <img src="{{ asset('storage\image\Screenshot 2025-04-16 102533.png') }}" alt="">
                                <h3 class="text-xl font-semibold mt-4 text-center">Negeri Para bedebah</h3>
                                <a class="w-full block text-center bg-blue-500 text-white px-4 py-2 mt-4 rounded-lg hover:bg-blue-600 transition" href="https://drive.google.com/file/d/15zSzB5SnID1ko72BD8VijOfj93MbU_vu/view?usp=drive_link" target="_blank">Baca</a>
                            </div>
                            <div class="bg-white shadow-md rounded-lg p-6 w-80 mx-auto">
                                <img src="{{ asset('storage\image\Screenshot 2025-04-16 102558.png') }}" alt="">
                                <h3 class="text-xl font-semibold mt-4 text-center">Pergi</h3>
                                <a class="w-full block text-center bg-blue-500 text-white px-4 py-2 mt-4 rounded-lg hover:bg-blue-600 transition" href="https://drive.google.com/file/d/1PjyInI5gYyGp5X5yekwhAe66SVP_RWeq/view?usp=drive_link" target="_blank">Baca</a>
                            </div>
                        </div>
                    </section>
                </div>
            </body>
            </html>
        </x-app-layout>
