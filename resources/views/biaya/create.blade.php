<x-app-layout>
   <div class="bg-gray-100 min-h-screen pb-20">

    <nav class="bg-blue-900 text-white">
            {{-- Top Bar --}}
            <div class="border-b border-blue-900/30">
                <div class="max-w-7xl mx-auto px-4 flex items-center justify-end gap-5 py-2 text-[11px] font-medium">
                    <a href="{{ route('creator.create')}}" class="hover:text-blue-300 transition cursor-pointer">Mulai Jadi Event Creator</button>
                    <a href="{{ route('biaya.create')}}" class="hover:text-blue-300 transition">Biaya</a>
                    <a href="{{ route('blog.create')}}" class="hover:text-blue-300 transition">Blog</a>
                    <a href="{{ route('loketx.create')}}" class="hover:text-blue-400 transition">LOKET X</a>
                    <a href="{{ route('loketscreen.create')}}" class="hover:text-blue-300 transition uppercase">LOKET Screen</a>
                    <a href="#" class="hover:text-blue-300 transition uppercase">LOKET Plus</a>
                    <a href="#" class="hover:text-blue-300 transition">Pusat Bantuan</a>
                    <div class="flex items-center gap-1 cursor-pointer">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg" class="w-4 h-auto rounded-sm">
                        <span>ID</span>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </div>
                </div>
            </div>

            {{-- Main Navbar --}}
            <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between gap-6">
                {{-- Logo LOKET 12 Tahun --}}
                <a href="{{ route('welcome')}}" onclick="showHomePage()" class="flex items-center gap-1 shrink-0">
                    <span class="text-2xl font-[1000] italic tracking-tighter uppercase">LOKET</span>
                    <div class="flex flex-col leading-none ml-1 text-orange-400">
                        <span class="font-black text-2xl leading-none">12</span>
                        <span class="text-[9px] font-bold text-blue-200 leading-none uppercase tracking-tighter">Tahun</span>
                    </div>
                </a>

                {{-- Search Bar --}}
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
                {{-- Right Actions --}}
                <div class="flex items-center gap-5 shrink-0">
                    <a href="{{ route('events.create')}}" class="flex items-center gap-2 text-sm font-bold hover:text-blue-300 transition whitespace-nowrap">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path d="M12 4v16m8-8H4"/></svg>
                        Buat Event
                    </a>
                    <a href="{{ route ('jelajah.create')}}" class="flex items-center gap-2 text-sm font-bold hover:text-blue-300 transition whitespace-nowrap">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                        Jelajah Event
                    </a>
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
                    <a href="{{ route('login') }}" class="px-4 py-2 bg-blue-600 hover:bg-blue-500 rounded-lg text-sm font-bold transition">Login</a>
                    <a href="{{ route('register') }}" class="px-4 py-2 bg-blue-600 hover:bg-blue-500 rounded-lg text-sm font-bold transition">Register</a>
                @endauth
            @endif
        </div>
    </div>
    <div class="bg-gray-100 min-h-screen">

        <!-- HERO -->
        <div class="relative w-full h-[350px] md:h-[400px] flex items-center justify-center text-center overflow-hidden">

            <!-- Background -->
            <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30"
                 class="absolute inset-0 w-full h-full object-cover scale-105 hover:scale-110 transition duration-700" />

            <!-- Overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 via-black/60 to-black/70 backdrop-blur-sm"></div>

            <!-- Content -->
            <div class="relative z-10 px-6 animate-fadeInUp">
                <h1 class="text-white text-2xl md:text-4xl font-bold mb-3">
                    Sukseskan Event Kamu Bersama LOKET
                </h1>
                <p class="text-gray-200 text-sm md:text-base mb-5">
                    Beragam paket berlangganan untuk event creator
                </p>

                <!-- Button -->
            </div>

        </div>
        <!-- BIAYA PENJUALAN -->
        <div class="max-w-6xl mx-auto px-4 py-12">

            <h2 class="text-2xl font-bold text-blue-900 mb-6">
                Biaya Penjualan Tiket
            </h2>

            <div class="grid md:grid-cols-3 gap-6">

                <!-- KIRI -->
                <div class="md:col-span-2 bg-white rounded-xl shadow p-6 border">

                    <!-- Item 1 -->
                    <div class="flex justify-between items-start pb-4 border-b">
                        <p class="text-sm font-semibold text-gray-800 max-w-md">
                            GoPay, GoPay Later, ShopeePay, Shopee PayLater, LinkAja, dan Kartu Kredit
                        </p>
                        <span class="text-sm text-gray-600">
                            3,5% x Total Penjualan
                        </span>
                    </div>

                    <!-- Item 2 -->
                    <div class="flex justify-between items-start pt-4">
                        <p class="text-sm font-semibold text-gray-800 max-w-md">
                            VA BCA, Indomaret, Bank Transfer, And Other
                        </p>
                        <span class="text-sm text-gray-600">
                            3,5% x Total Penjualan
                        </span>
                    </div>

                </div>

                <!-- KANAN -->
                <div class="bg-gray-100 rounded-xl p-5 text-sm text-gray-700">
                    <ul class="list-disc pl-5 space-y-2">
                        <li>Total Sales = Total Tiket Terjual x Harga Tiket</li>
                        <li>Biaya sudah termasuk PPN</li>
                        <li>PB1 (pajak hiburan) menjadi tanggung jawab event creator</li>
                    </ul>
                </div>

            </div>

        </div>
<!-- KATEGORI & RINCIAN -->
<div class="max-w-6xl mx-auto px-4 pb-12">

    <div class="bg-white rounded-xl shadow border p-6 grid md:grid-cols-2 gap-6">

        <!-- KIRI -->
        <div>
            <div class="flex justify-between items-center mb-4">
                <h3 class="font-semibold text-lg text-gray-800">Kategori Tiket</h3>
                <button class="text-blue-600 border px-3 py-1 rounded-md text-sm hover:bg-blue-50">
                    + Tambah
                </button>
            </div>

            <!-- Card Input -->
            <div class="bg-gray-50 p-4 rounded-lg border">
                <input type="text" value="General Admission"
                    class="w-full mb-3 border rounded-md px-3 py-2 text-sm">

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="text-xs text-gray-500">Harga (IDR)</label>
                        <input type="number" value="50000"
                            class="w-full border rounded-md px-3 py-2 text-sm">
                    </div>
                    <div>
                        <label class="text-xs text-gray-500">Jumlah</label>
                        <input type="number" value="100"
                            class="w-full border rounded-md px-3 py-2 text-sm">
                    </div>
                </div>
            </div>

            <!-- Model Komisi -->
            <div class="mt-6 bg-gray-50 p-4 rounded-lg border">
                <h4 class="font-semibold text-gray-800 mb-2">Model Komisi</h4>
                <p class="text-xs text-gray-500 mb-3">
                    Komisi 3,5% akan dikurangi dari pendapatan atau dibebankan ke pembeli
                </p>

                <div class="flex gap-6 text-sm">
                    <label class="flex items-center gap-2">
                        <input type="radio" checked class="text-blue-600">
                        Dibayar oleh event creator
                    </label>

                    <label class="flex items-center gap-2">
                        <input type="radio">
                        Dibayar oleh pelanggan
                    </label>
                </div>
            </div>
        </div>

        <!-- KANAN -->
        <div>
            <h3 class="font-semibold text-lg text-gray-800 mb-4">
                Rincian Pendapatan
            </h3>

            <!-- Total -->
            <div class="bg-gray-50 p-4 rounded-lg mb-4">
                <p class="text-sm text-gray-500">Total Penjualan Tiket</p>
                <h2 class="text-xl font-bold">Rp 5.000.000</h2>
            </div>

            <!-- Biaya -->
            <div class="bg-gray-50 p-4 rounded-lg mb-4">
                <div class="flex justify-between text-sm text-gray-500">
                    <span>Biaya Penjualan Tiket (3,5%)</span>
                    <span>Ditanggung event creator</span>
                </div>
                <h2 class="text-red-600 font-bold mt-1">-Rp 175.000</h2>
            </div>

            <!-- Total Bersih -->
            <div class="bg-green-50 border border-green-200 p-4 rounded-lg">
                <p class="text-sm text-green-700">Total yang kamu terima</p>
                <h2 class="text-xl font-bold text-green-700">
                    Rp 4.825.000
                </h2>
                <p class="text-xs text-green-600">
                    Perkiraan total setelah biaya penjualan tiket
                </p>
            </div>
        </div>

    </div>

    <!-- SUMMARY BAWAH -->
    <div class="grid md:grid-cols-3 gap-4 mt-6">

        <div class="bg-purple-50 p-4 rounded-xl border">
            <p class="text-sm text-gray-600">Kategori Tiket</p>
            <h2 class="text-lg font-bold">1</h2>
        </div>

        <div class="bg-blue-50 p-4 rounded-xl border">
            <p class="text-sm text-gray-600">Jumlah Tiket</p>
            <h2 class="text-lg font-bold">100</h2>
        </div>

        <div class="bg-red-50 p-4 rounded-xl border">
            <p class="text-sm text-gray-600">Biaya Penjualan Tiket</p>
            <h2 class="text-lg font-bold">3,5%</h2>
        </div>

    </div>

</div>
<footer class="bg-blue-900 text-white pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
            
            <div>
                <div class="text-3xl font-black italic mb-4">LOKET</div>
                <p class="text-sm text-blue-200 leading-relaxed mb-6">
                    Platform manajemen event dan penjualan tiket terpercaya di Indonesia. Buat event-mu sekarang!
                </p>
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-full bg-blue-800 flex items-center justify-center hover:bg-blue-700 cursor-pointer transition-colors">📸</div>
                    <div class="w-10 h-10 rounded-full bg-blue-800 flex items-center justify-center hover:bg-blue-700 cursor-pointer transition-colors">🐦</div>
                    <div class="w-10 h-10 rounded-full bg-blue-800 flex items-center justify-center hover:bg-blue-700 cursor-pointer transition-colors">📘</div>
                </div>
            </div>

            <div>
                <h4 class="font-bold text-lg mb-6">Rayakan Eventmu</h4>
                <ul class="space-y-3 text-sm text-blue-200">
                    <li><a href="#" class="hover:text-white transition-colors">Cara Jual Tiket</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Sistem Manajemen Event</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">LOKET Distribution Network</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">LOKET untuk Promotor</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-lg mb-6">Tentang Loket</h4>
                <ul class="space-y-3 text-sm text-blue-200">
                    <li><a href="#" class="hover:text-white transition-colors">Tentang Kami</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Karir</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Hubungi Kami</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-lg mb-6">Bantuan & Panduan</h4>
                <ul class="space-y-3 text-sm text-blue-200">
                    <li><a href="#" class="hover:text-white transition-colors">Pusat Bantuan</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Syarat & Ketentuan</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Kebijakan Privasi</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Panduan Keamanan</a></li>
                </ul>
            </div>

        </div>

        <div class="pt-20 border-t border-blue-800 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="text-xs text-blue-300">
                © 2026 PT Global Tiket Network. All Rights Reserved.
            </div>
            <div class="flex items-center gap-4 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all">
                <span class="text-[10px] text-blue-400 font-bold uppercase tracking-widest">Part of</span>
                <div class="font-black text-xl italic text-white">tiket<span class="text-blue-400">.com</span></div>
            </div>
        </div>
    </div>
    <div class="pt-20 border-t border-blue-800 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="text-xs text-blue-300">
                © 2026 PT Global Tiket Network. All Rights Reserved.
            </div>
            <div class="flex items-center gap-4 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all">
                <span class="text-[10px] text-blue-400 font-bold uppercase tracking-widest">Part of</span>
                <div class="font-black text-xl italic text-white ">tiket<span class="text-blue-400">.com</span></div>
            </div>
        </div>
        
</footer>
    <!-- Animasi -->
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 1s ease forwards;
        }
    </style>
    <!-- Animasi -->
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 1s ease forwards;
        }
    </style>
</x-app-layout>