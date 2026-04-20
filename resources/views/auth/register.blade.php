<x-guest-layout>
    <div class="mb-8 text-center">
        <h2 class="text-2xl font-extrabold text-blue-900">Buat Akun Baru</h2>
        <p class="text-sm text-gray-500 mt-2">Daftar dan mulai kelola tiketmu</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" class="font-bold text-gray-700" />
            <x-text-input id="name" class="block mt-1 w-full border-gray-200 focus:border-blue-500 focus:ring-blue-500 rounded-xl shadow-sm"
                type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="font-bold text-gray-700" />
            <x-text-input id="email" class="block mt-1 w-full border-gray-200 focus:border-blue-500 focus:ring-blue-500 rounded-xl shadow-sm"
                type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="font-bold text-gray-700" />
            <x-text-input id="password" class="block mt-1 w-full border-gray-200 focus:border-blue-500 focus:ring-blue-500 rounded-xl shadow-sm"
                type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="font-bold text-gray-700" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full border-gray-200 focus:border-blue-500 focus:ring-blue-500 rounded-xl shadow-sm"
                type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex flex-col gap-4 mt-6">
            <button type="submit" class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl shadow-lg shadow-blue-100 transition-all active:scale-95">
                {{ __('Register') }}
            </button>
            <div class="text-center">
                <a class="text-sm text-gray-500 hover:text-blue-600 font-medium" href="{{ route('login') }}">
                    Sudah punya akun? <span class="text-blue-600 font-bold">Masuk</span>
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>