<x-guest-layout>
   <div class="flex justify-center items-center bg bg-white">
    <form action="{{ route('login') }}" method="post" class="w-full max-w-lg p-10 rounded-xl space-y-4 ">
        @csrf

        <div class="text-center text-3xl font-semibold text-gray-800">
            <h2>Silahkan Login</h2>
        </div>

        {{-- Email --}}
        <div class="space-y-4">
            <div>
                <label for="email" class="block font-medium text-lg text-gray-700">{{ __('Email Address') }}</label>
                <input id="email" type="email" name="email" :value="{{ old('email') }}" required autofocus class="block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-500" placeholder="Masukkan Email Anda">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Password --}}
            <div>
                <label for="password" class="block font-medium text-lg text-gray-700">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" class="block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-500" placeholder="Masukkan Password Anda">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex gap-4 justify-start items-center">
                {{-- Remember Me --}}
                <div class="flex items-center right-1 justify-start"></div>
                    <input id="remember_me" type="checkbox" name="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="remember_me" class="ml-2 text-sm text-gray-800">{{ __('Remember me') }}</label>
                </div>

                {{-- Forgot Password --}}
                <div class="flex items-center justify-between">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-blue-600 hover:underline" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </div>
            {{-- Login Button --}}
            <div class="flex items-center justify-end mt-4"></div>
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow transition duration-300">
                    {{ __('Log in') }}
                </button>
            </div>

            {{-- Register Link --}}
            <div class="text-center mt-4">
                <p class="text-sm text-gray-600">Belum punya akun? <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Daftar Sekarang</a></p>  
            </div>
        </div>
    </form>
   </div>
</x-guest-layout>