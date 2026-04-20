<x-guest-layout>
    <div class="mb-8 text-center">
        <h2 class="text-2xl font-extrabold text-blue-900">Masuk ke Akun</h2>
        <p class="text-sm text-gray-500 mt-2">Cari event seru dan kelola tiketmu</p>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" class="font-bold text-gray-700" />
            <x-text-input id="email" class="block mt-1 w-full border-gray-200 focus:border-blue-500 focus:ring-blue-500 rounded-xl shadow-sm" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="font-bold text-gray-700" />
            <x-text-input id="password" class="block mt-1 w-full border-gray-200 focus:border-blue-500 focus:ring-blue-500 rounded-xl shadow-sm"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Ingat saya') }}</span>
            </label>
        </div>

        <div class="flex flex-col gap-4 mt-6">
            <button type="submit" class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl shadow-lg shadow-blue-100 transition-all active:scale-95">
                {{ __('Log in') }}
            </button>

            <div class="flex items-center justify-between">
                @if (Route::has('password.request'))
                    <a class="text-sm text-blue-600 hover:underline font-medium" href="{{ route('password.request') }}">
                        {{ __('Lupa password?') }}
                    </a>
                @endif
                
                <a class="text-sm text-gray-500 hover:text-blue-600 font-medium" href="{{ route('register') }}">
                    Belum punya akun? <span class="text-blue-600 font-bold">Daftar</span>
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>