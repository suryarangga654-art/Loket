<x-app-layout>

<div class="bg-gray-100 min-h-screen pb-20">

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
            <a href="#" class="hover:text-blue-300 transition">Pusat Bantuan</a>
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
                             x-transition:enter="transition ease-out duration-150"
                             x-transition:enter-start="opacity-0 scale-95"
                             x-transition:enter-end="opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-100"
                             x-transition:leave-start="opacity-100 scale-100"
                             x-transition:leave-end="opacity-0 scale-95"
                             class="absolute right-0 mt-2 w-56 bg-white rounded-xl shadow-xl border border-gray-100 py-1 z-50 origin-top-right">

                            <div class="px-4 py-3 border-b border-gray-100">
                                <p class="text-sm font-bold text-gray-800">{{ Auth::user()->name }}</p>
                                <p class="text-xs text-gray-400 truncate">{{ Auth::user()->email }}</p>
                            </div>

                             <a href="{{ route('jelajah.create')}}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                                </svg>
                                Jelajah Event
                            </a>

                            <a href="{{ route('tiket.create')}}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                                </svg>
                                Tiket Saya
                            </a>
                            <hr>
                            <a href="{{ route('informasi.create')}}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                                </svg>
                                Informasi Dasar
                            </a>
                            <a href="{{ route('pengaturan.create')}}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                                </svg>
                                 Pengaturan                            
                                </a>

                            <div class="border-t border-gray-100 my-1"></div>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="flex items-center gap-3 w-full px-4 py-2.5 text-sm text-red-500 hover:bg-red-50 transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1"/>
                                    </svg>
                                    Keluar
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-bold hover:text-blue-300 transition">Login</a>
                    <a href="{{ route('register') }}" class="px-4 py-2 bg-blue-600 hover:bg-blue-500 rounded-lg text-sm font-bold transition">Register</a>
                @endauth
            @endif
        </div>
    </div>

    {{-- Hashtag Bar --}}
    <div class="max-w-7xl mx-auto px-4 pb-2.5 flex items-center gap-4 text-xs text-blue-300">
        <a href="#" class="hover:text-white transition">#Promo_Indodana</a>
        <a href="#" class="hover:text-white transition">#LOKETPLus</a>
        <a href="#" class="hover:text-white transition">#LOKETScreen</a>
        <a href="#" class="hover:text-white transition">#LOKET_Promo</a>
    <a href="#" class="hover:text-white transition">#LoketAttraction</a>
    </nav>    
    {{-- Konten Jelajah Event --}}
        <div class="max-w-7xl mx-auto px-4 py-8">
            <div class="flex gap-6">

                {{-- Sidebar Filter --}}
                <div class="w-56 shrink-0">
                    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-5 sticky top-6">

                        <div class="flex items-center justify-between mb-5">
                            <h2 class="text-lg font-bold text-gray-800">Filter</h2>
                            <button class="text-blue-500 hover:text-blue-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                                </svg>
                            </button>
                        </div>

                        {{-- Event Online --}}
                        <div class="py-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-sm font-semibold text-gray-700">Event Online</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer">
                                <div class="w-10 h-6 bg-gray-200 peer-checked:bg-blue-500 rounded-full transition after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:after:translate-x-4"></div>
                            </label>
                        </div>

                        {{-- Lokasi --}}
                        <div class="py-4 border-t border-gray-100" x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center justify-between w-full text-sm font-semibold text-gray-700">
                                Lokasi
                                <svg class="w-4 h-4 text-gray-400 transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div x-show="open" class="mt-3 space-y-2">
                                @foreach(['Jakarta', 'Bandung', 'Surabaya', 'Bali', 'Yogyakarta'] as $kota)
                                <label class="flex items-center gap-2 text-sm text-gray-600 cursor-pointer hover:text-blue-600">
                                    <input type="checkbox" class="rounded border-gray-300 text-blue-500 focus:ring-blue-400">
                                    {{ $kota }}
                                </label>
                                @endforeach
                            </div>
                        </div>

                        {{-- Tipe Event --}}
                        <div class="py-4 border-t border-gray-100" x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center justify-between w-full text-sm font-semibold text-gray-700">
                                Tipe Event
                                <svg class="w-4 h-4 text-gray-400 transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div x-show="open" class="mt-3 space-y-2">
                                @foreach(['Online', 'Offline', 'Hybrid'] as $tipe)
                                <label class="flex items-center gap-2 text-sm text-gray-600 cursor-pointer hover:text-blue-600">
                                    <input type="checkbox" class="rounded border-gray-300 text-blue-500 focus:ring-blue-400">
                                    {{ $tipe }}
                                </label>
                                @endforeach
                            </div>
                        </div>

                        {{-- Kategori Event --}}
                        <div class="py-4 border-t border-gray-100" x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center justify-between w-full text-sm font-semibold text-gray-700">
                                Kategori Event
                                <svg class="w-4 h-4 text-gray-400 transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div x-show="open" class="mt-3 space-y-2">
                                @foreach(['Konser', 'Workshop', 'Festival', 'Konferensi', 'Pertunjukan'] as $kat)
                                <label class="flex items-center gap-2 text-sm text-gray-600 cursor-pointer hover:text-blue-600">
                                    <input type="checkbox" class="rounded border-gray-300 text-blue-500 focus:ring-blue-400">
                                    {{ $kat }}
                                </label>
                                @endforeach
                            </div>
                        </div>

                        {{-- Waktu --}}
                        <div class="py-4 border-t border-gray-100" x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center justify-between w-full text-sm font-semibold text-gray-700">
                                Waktu
                                <svg class="w-4 h-4 text-gray-400 transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div x-show="open" class="mt-3 space-y-2">
                                @foreach(['Hari ini', 'Besok', 'Minggu ini', 'Bulan ini'] as $waktu)
                                <label class="flex items-center gap-2 text-sm text-gray-600 cursor-pointer hover:text-blue-600">
                                    <input type="radio" name="waktu" class="border-gray-300 text-blue-500 focus:ring-blue-400">
                                    {{ $waktu }}
                                </label>
                                @endforeach
                            </div>
                        </div>

                        {{-- Harga --}}
                        <div class="py-4 border-t border-gray-100">
                            <p class="text-xs text-gray-400 font-semibold mb-2">Harga</p>
                            <div class="flex items-center justify-between bg-gray-100 rounded-lg px-3 py-2">
                                <span class="text-sm font-bold text-gray-700">Berbayar</span>
                                <button class="text-red-400 hover:text-red-600 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Konten Kanan --}}
                <div class="flex-1">

                    {{-- Header --}}
                    <div class="flex items-center justify-between mb-5">
                        <p class="text-sm text-gray-600">
                            Menampilkan <span class="font-bold">1 - 8</span> Dari Total <span class="font-bold">280</span>
                        </p>
                        <div class="flex items-center gap-2">
                            <span class="text-sm text-gray-500">Urutkan:</span>
                            <select class="border border-gray-200 rounded-lg px-3 py-2 text-sm text-gray-700 focus:outline-none focus:border-blue-400 bg-white">
                                <option>Waktu Mulai (Terdekat)</option>
                                <option>Harga Terendah</option>
                                <option>Harga Tertinggi</option>
                                <option>Terbaru</option>
                            </select>
                        </div>
                    </div>

                    {{-- Grid Event --}}
                    @php
                    $events = [
                        ['title' => 'High Performance Leadership: Leading Team and Driving Result', 'date' => '14 Apr 2026', 'price' => 'Rp2.500.000', 'org' => 'Akselerasi Indonesia', 'img' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=400'],
                        ['title' => 'Certified International Supply Chain Professional (CISCP)', 'date' => '13 Apr - 15 Apr 2026', 'price' => 'Rp5.000.000', 'org' => 'PT. Husin Intelligence Group', 'img' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=400'],
                        ['title' => 'Cerita Miskinku - Coming Soon', 'date' => '15 Apr 2026', 'price' => 'Rp25.000', 'org' => 'Standup Cinere', 'img' => 'https://images.unsplash.com/photo-1485846234645-a62644f84728?q=80&w=400'],
                        ['title' => 'WOW Brand 2026: Branding in the Age of AI', 'date' => '16 Apr 2026', 'price' => 'Rp666.000', 'org' => 'Marketeers', 'img' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=400'],
                        ['title' => 'PIE Musical: Finding Nemo KIDS', 'date' => '16 Apr 2026', 'price' => 'Rp100.000', 'org' => 'Jakarta Intercultural School', 'img' => 'https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?q=80&w=400'],
                        ['title' => 'Renewed Faith - A Worship Night Experience', 'date' => '16 Apr 2026', 'price' => 'Rp50.000', 'org' => 'Kingdom Sound', 'img' => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?q=80&w=400'],
                        ['title' => 'Workshop Supply Chain & Logistik 2026', 'date' => '17 Apr 2026', 'price' => 'Rp1.500.000', 'org' => 'Supply Chain Indonesia', 'img' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=400'],
                        ['title' => 'Intensif SNBT by Mantappu Academy', 'date' => '02 Feb - 22 Apr 2026', 'price' => 'Rp399.000', 'org' => 'Mantappu Academy', 'img' => 'https://images.unsplash.com/photo-1515187029135-18ee286d815b?q=80&w=400'],
                    ];
                    @endphp

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        @foreach($events as $event)
                        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden hover:shadow-md transition cursor-pointer">
                            <img src="{{ $event['img'] }}" class="w-full h-36 object-cover">
                            <div class="p-3">
                                <h3 class="text-xs font-bold text-gray-800 line-clamp-2 h-8 mb-2">{{ $event['title'] }}</h3>
                                <p class="text-[11px] text-gray-400 mb-1">{{ $event['date'] }}</p>
                                <p class="text-sm font-black text-gray-800 mb-3">{{ $event['price'] }}</p>
                                <div class="border-t border-gray-100 pt-2 flex items-center gap-2">
                                    <div class="w-5 h-5 rounded-full bg-blue-100 flex items-center justify-center text-[8px] font-bold text-blue-600 shrink-0">
                                        {{ strtoupper(substr($event['org'], 0, 1)) }}
                                    </div>
                                    <span class="text-[10px] text-gray-500 font-medium truncate">{{ $event['org'] }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{-- Pagination --}}
                    <div class="flex items-center justify-end gap-1 mt-8">
                        <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 hover:bg-gray-50 transition bg-white">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        @foreach([1,2,3,4,5] as $page)
                        <button class="w-8 h-8 flex items-center justify-center rounded-lg text-sm font-semibold transition
                            {{ $page === 1 ? 'bg-blue-600 text-white' : 'bg-white border border-gray-200 text-gray-600 hover:bg-gray-50' }}">
                            {{ $page }}
                        </button>
                        @endforeach
                        <span class="text-gray-400 text-sm px-1">...</span>
                        <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-sm font-semibold text-gray-600 hover:bg-gray-50 bg-white transition">35</button>
                        <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 hover:bg-gray-50 bg-white transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>


   </x-app-layout>
      