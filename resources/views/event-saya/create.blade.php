<x-app-layout>
    <style>
        [x-cloak] { display: none !important; }
        .sidebar-link { @apply flex items-center px-6 py-3 text-sm transition-all duration-200 border-l-4 border-transparent; }
        .sidebar-link.active { @apply bg-blue-600 text-white border-blue-400 font-semibold; }
        .sidebar-link.inactive { @apply text-gray-400 hover:bg-[#253a63] hover:text-white; }
    </style>

    {{-- Pastikan ada pembungkus Flex & x-data di sini --}}
    <div class="bg-gray-50 flex min-h-screen" x-data="{ role: 'creator', view: 'event' }">
        
         <aside class="w-64 bg-[#1a2b4c] text-gray-300 flex flex-col sticky top-0 h-screen shadow-xl z-30">
            <div class="p-6 flex items-center gap-2">
                <a href="{{ url('/') }}" class="hover:opacity-80 transition">
                    <h1 class="text-white font-bold text-xl tracking-tighter">
                        LOKET<span class="bg-white text-[#1a2b4c] text-[10px] px-1 ml-1 rounded font-black uppercase">12 Tahun</span>
                    </h1>
                </a>
            </div>

            <div x-show="role === 'creator'" x-transition class="px-4 mb-6">
                <div class="bg-[#253a63] p-3 rounded-lg flex items-center gap-3 border border-gray-700">
                    <div class="w-10 h-10 bg-orange-500 rounded-lg flex items-center justify-center text-xl">
                        <i class="fa-solid fa-face-smile text-white"></i>
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-[11px] font-bold text-white truncate">M FAIZAL KURNIA...</p>
                        <p class="text-[10px] text-gray-400">Admin</p>
                    </div>
                    <i class="fa-solid fa-chevron-up-down text-[10px] ml-auto text-gray-500"></i>
                </div>
            </div>

            <nav class="flex-1 overflow-y-auto">
                <div x-show="role === 'creator'" x-transition>
                    <div class="px-6 py-2 text-[10px] uppercase font-bold text-gray-500 tracking-widest">Dashboard</div>
                    <a href="{{ route('tiket.create')}}" class="sidebar-link active">
                        <i class="fa-solid fa-house mr-3 w-5 text-center"></i> Dashboard
                    </a>
                    <a href="{{ route('event-saya.create')}}" class="sidebar-link inactive">
                        <i class="fa-solid fa-calendar-check mr-3 w-5 text-center"></i> Event Saya
                    </a>
                    <a href="{{ route('kelola-akses.create')}}" class="sidebar-link inactive">
                        <i class="fa-solid fa-users mr-3 w-5 text-center"></i> Kelola Akses
                    </a>
                </div>

                <div x-show="role === 'pembeli'" x-transition x-cloak>
                    <a href="{{ route('jelajah.create')}}" class="sidebar-link inactive">
                        <i class="fa-solid fa-compass mr-3 w-5 text-center"></i> Jelajah Event
                    </a>
                    <a href="{{ route('tiket.create')}}" class="sidebar-link active">
                        <i class="fa-solid fa-ticket mr-3 w-5 text-center"></i> Tiket Saya
                    </a>
                </div>

                <div class="px-6 mt-6 py-2 text-[10px] uppercase font-bold text-gray-500 tracking-widest">Akun</div>
                <a href="{{ route('informasi.create')}}" class="sidebar-link inactive">
                    <i class="fa-solid fa-user-gear mr-3 w-5 text-center"></i> Informasi Dasar
                </a>
                <a href="{{ route('pengaturan.create')}}" class="sidebar-link inactive">
                    <i class="fa-solid fa-gear mr-3 w-5 text-center"></i> Pengaturan
                </a>

                <div x-show="role === 'creator'" x-transition x-cloak>
                    <a href="{{ route('informasi-legal.create')}}" class="sidebar-link inactive">
                        <i class="fa-solid fa-file-invoice mr-3 w-5 text-center"></i> Informasi Legal
                    </a>
                    <a href="{{ route('rekening.create')}}" class="sidebar-link inactive">
                        <i class="fa-solid fa-credit-card mr-3 w-5 text-center"></i> Rekening
                    </a>
                </div>

                <div class="px-6 mt-6 py-2 text-[10px] uppercase font-bold text-gray-500 tracking-widest">Mode User</div>
                <button @click="role = (role === 'pembeli' ? 'creator' : 'pembeli')" 
                        class="w-full sidebar-link inactive hover:text-blue-400 group">
                    <i class="fa-solid fa-right-left mr-3 w-5 text-center group-hover:rotate-180 transition-transform duration-500"></i> 
                    <span x-text="role === 'pembeli' ? 'Beralih ke Event Creator' : 'Beralih ke Pembeli'"></span>
                </button>
            </nav>
        </aside>


        <main class="flex-1 flex flex-col min-w-0">
            <header class="h-16 bg-white border-b flex items-center justify-between px-8 sticky top-0 z-20 shadow-sm">
                <h2 class="text-lg font-bold text-gray-700 uppercase italic tracking-tighter">Event Saya</h2>
                <button class="border-2 border-gray-800 text-gray-800 px-4 py-1.5 rounded-md text-xs font-black uppercase">
                    <i class="fa-solid fa-calendar-plus mr-2"></i> Buat Event
                </button>
            </header>

            <div class="p-8">
                <div x-show="role === 'creator'" x-transition:enter="duration-300 ease-out" class="space-y-6">
                    
                    {{-- Banner Misi --}}
                    <div class="bg-white border-2 border-blue-100 rounded-xl p-6 flex flex-col md:flex-row items-center justify-between shadow-sm gap-4">
                        <p class="text-blue-600 bg-blue-50 px-4 py-2 rounded-lg text-xs font-bold italic tracking-tight">
                            Ayo selesaikan misi! Lengkapi akun profilmu untuk mulai berjualan.
                        </p>
                        <div class="flex gap-2 w-full md:w-auto">
                            <button class="flex-1 bg-blue-600 text-white px-8 py-2 rounded font-bold text-xs hover:bg-blue-700 transition">Verifikasi</button>
                            <button class="flex-1 bg-blue-600 text-white px-8 py-2 rounded font-bold text-xs hover:bg-blue-700 transition">Lengkapi</button>
                        </div>
                    </div>

                    {{-- Search & Filter --}}
                    <div class="flex flex-col md:flex-row gap-4 justify-between items-center bg-white p-4 rounded-xl border border-gray-100 shadow-sm">
                        <div class="relative w-full md:w-1/2">
                            <input type="text" placeholder="Cari Event Saya" class="w-full pl-10 pr-4 py-2 bg-gray-50 border-none rounded-lg text-sm focus:ring-2 focus:ring-blue-500">
                            <i class="fa-solid fa-magnifying-glass absolute left-3 top-3 text-gray-400"></i>
                        </div>
                        <div class="flex items-center gap-2 text-xs font-bold text-gray-500">
                            <span>Urutkan:</span>
                            <select class="bg-transparent border-none focus:ring-0 text-gray-800 cursor-pointer">
                                <option>Waktu Mulai (Terdekat)</option>
                                <option>Waktu Mulai (Terlama)</option>
                                <option>Nama Event (A-Z)</option>
                            </select>
                        </div>
                    </div>

                    {{-- Tabs & Empty State --}}
                    <div x-data="{ tab: 'aktif' }">
                        <div class="flex border-b border-gray-200 mb-8 space-x-10">
                            <button @click="tab = 'aktif'" :class="tab === 'aktif' ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-400'" class="pb-4 text-xs font-black uppercase italic tracking-tighter transition-all">Event Aktif</button>
                            <button @click="tab = 'draft'" :class="tab === 'draft' ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-400'" class="pb-4 text-xs font-black uppercase italic tracking-tighter transition-all">Event Draft</button>
                            <button @click="tab = 'lalu'" :class="tab === 'lalu' ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-400'" class="pb-4 text-xs font-black uppercase italic tracking-tighter transition-all">Event Lalu</button>
                        </div>

                        <div class="flex flex-col items-center justify-center py-20 bg-white rounded-3xl border-2 border-dashed border-gray-100">
                            <div class="mb-6 opacity-20">
                                <i class="fa-solid fa-calendar-day text-[100px] text-gray-400"></i>
                            </div>
                            <h3 class="text-gray-800 font-black italic uppercase tracking-tighter text-lg mb-1">Hai, terima kasih telah menggunakan layanan LOKET</h3>
                            <p class="text-gray-400 text-xs mb-6 font-medium">Silakan buat eventmu dengan klik button "Buat Event" di atas.</p>
                            <button class="bg-blue-600 text-white px-10 py-3 rounded-xl font-black text-xs hover:bg-blue-700 transition shadow-lg shadow-blue-100 uppercase italic">
                                Buat Event
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>