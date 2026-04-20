<nav class="bg-blue-900 text-white">

    {{-- Top Bar --}}
    <div class="border-b border-blue-800">
        <div class="max-w-7xl mx-auto px-4 flex items-center justify-end gap-6 py-1.5 text-xs">
            <a href="{{ route('creator.create')}}" class="hover:text-blue-300 transition">Mulai Jadi Event Creator</a>
            <a href="{{ route('biaya.create')}}" class="hover:text-blue-300 transition">Biaya</a>
            <a href="{{ route('blog.create')}}" class="hover:text-blue-300 transition">Blog</a>
            <a href="{{ route('loketx.create')}}" class="hover:text-blue-300 transition">LOKET X</a>
            <a href="{{ route('loketscreen.create')}}" class="hover:text-blue-300 transition">LOKET Screen</a>
            <a href="#" class="hover:text-blue-300 transition">LOKET Plus</a>
            <a href="{{ route('pusat.create')}}" class="hover:text-blue-300 transition">Pusat Bantuan</a>
            <div class="flex items-center gap-1 cursor-pointer hover:text-blue-300 transition">
                <span>🇮🇩</span>
                <span>ID</span>
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </div>
        </div>
    </div>

    {{-- Main Navbar --}}
    <div class="max-w-7xl mx-auto px-4 py-3 flex items-center gap-6">

        {{-- Logo --}}
        <a href="/" class="flex items-center gap-1 shrink-0">
            <span class="text-2xl font-black italic tracking-tight">LOKET</span>
            <div class="flex flex-col leading-none ml-1">
                <span class="text-orange-400 font-black text-2xl leading-none">12</span>
                <span class="text-[10px] font-semibold text-blue-200 leading-none">Tahun</span>
            </div>
        </a>

        {{-- Search --}}
        <div class="flex-1 relative">
            <input type="text"
                placeholder="Cari event seru di sini"
                class="w-full px-4 py-2.5 pr-14 rounded-lg text-black text-sm focus:outline-none focus:ring-2 focus:ring-blue-400 border-0">
            <button class="absolute right-0 top-0 h-full px-4 bg-blue-600 hover:bg-blue-500 rounded-r-lg transition flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </button>
        </div>

        {{-- Right Buttons --}}
        <div class="flex items-center gap-3 shrink-0">
            <a href="{{ route('events.create') }}" class="flex items-center gap-2 text-sm font-semibold hover:text-blue-300 transition whitespace-nowrap">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                Buat Event
            </a>

             <a href="{{ route ('jelajah.create')}}" class="flex items-center gap-2 text-sm font-bold hover:text-blue-300 transition whitespace-nowrap">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                Jelajah Event
            </a>

            {{-- Profile Dropdown --}}
            @if (Route::has('login'))
                @auth
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" @click.outside="open = false"
                            class="w-9 h-9 rounded-full bg-blue-500 hover:bg-blue-400 flex items-center justify-center shadow transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd"/>
                            </svg>
                        </button>

                        <div x-show="open"
                             x-transition
                             class="absolute right-0 mt-2 w-56 bg-white rounded-xl shadow-xl border border-gray-100 py-1 z-50 origin-top-right text-gray-800">

                            <div class="px-4 py-3 border-b border-gray-100">
                                <p class="text-sm font-bold">{{ Auth::user()->name }}</p>
                                <p class="text-xs text-gray-400 truncate">{{ Auth::user()->email }}</p>
                            </div>

                            <a href="{{ route('tiket.create')}}" class="flex items-center gap-3 px-4 py-2.5 text-sm hover:bg-blue-50 hover:text-blue-700 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/></svg>
                                Tiket Saya
                            </a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="flex items-center gap-3 w-full px-4 py-2.5 text-sm text-red-500 hover:bg-red-50 transition border-t border-gray-100 mt-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1"/></svg>
                                    Keluar
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="px-4 py-2 bg-blue-600 hover:bg-blue-500 rounded-lg text-sm font-bold transition">Login</a>
                    <a href="{{ route('register') }}" class="px-4 py-2 bg-blue-600 hover:bg-blue-500 rounded-lg text-sm font-bold transition">Register</a>
                @endauth
            @endif
        </div>
    </div>

    {{-- Hashtag Bar --}}
    <div class="max-w-7xl mx-auto px-4 pb-2.5 flex items-center gap-4 text-xs text-blue-300">
        <a href="{{ route('promo.create')}}" class="hover:text-white transition">#Promo_Indodana</a>
        <a href="{{ route('loketplus.create')}}" class="hover:text-white transition">#LOKETPLus</a>
        <a href="{{ route('loketscreen.create')}}" class="hover:text-white transition">#LOKETScreen</a>
        <a href="#" class="hover:text-white trans   ition">#LOKET_Promo</a>
        <a href="#" class="hover:text-white transition">#LoketAttraction</a>
    </div>

</nav>