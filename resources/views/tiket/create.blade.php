<x-app-layout>
    <style>
        [x-cloak] { display: none !important; }
        /* Style Sidebar Link biar mirip LOKET */
        .sidebar-link { @apply flex items-center px-6 py-3 text-sm transition-all duration-200 border-l-4 border-transparent; }
        .sidebar-link.active { @apply bg-blue-600 text-white border-blue-400 font-semibold; }
        .sidebar-link.inactive { @apply text-gray-400 hover:bg-[#253a63] hover:text-white; }
        /* Style Card Statistik Dashboard */
        .card-stat { @apply bg-white p-6 rounded border border-gray-100 shadow-sm flex flex-col justify-between; }
    </style>

    <div class="bg-gray-50 flex min-h-screen" x-data="{ role: 'creator' }">

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
                    <a href="" class="sidebar-link active">
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
                    <a href="{{ route('rekening.create]')}}" class="sidebar-link inactive">
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
                <h2 class="text-lg font-bold text-gray-700 uppercase tracking-tighter italic" 
                    x-text="role === 'creator' ? 'Dashboard Creator' : 'Tiket Saya'"></h2>
                
                <div class="flex items-center gap-4">
                    <button class="border-2 border-gray-800 text-gray-800 px-4 py-1.5 rounded-md flex items-center text-xs font-black hover:bg-gray-800 hover:text-white transition uppercase">
                        <i class="fa-solid fa-calendar-plus mr-2"></i> Buat Event
                    </button>
                    <div class="flex items-center gap-2 text-xs text-gray-500 border-l pl-4">
                        <span>User:</span>
                        <span class="font-bold text-gray-800 uppercase tracking-tighter">M FAIZAL KUR...</span>
                        <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    </div>
                </div>
            </header>

            <div class="p-8">
                <div class="flex items-center gap-2 text-[10px] mb-8 uppercase font-bold tracking-tighter text-gray-400">
                    <span class="bg-gray-200 text-gray-600 px-2 py-1 rounded">Kamu di sini</span>
                    <i class="fa-solid fa-chevron-right text-[8px]"></i>
                    <span class="text-blue-600" x-text="role === 'creator' ? 'Beranda Creator' : 'Tiket Saya'"></span>
                </div>

                <div x-show="role === 'creator'" x-transition:enter="duration-300 ease-out" class="space-y-6">
                    <div class="bg-white border-2 border-blue-100 rounded-xl p-6 flex flex-col md:flex-row items-center justify-between shadow-sm gap-4">
                        <p class="text-blue-600 bg-blue-50 px-4 py-2 rounded-lg text-xs font-bold italic tracking-tight">
                            Ayo selesaikan misi! Lengkapi akun profilmu untuk mulai berjualan.
                        </p>
                        <div class="flex gap-2 w-full md:w-auto">
                            <button class="flex-1 bg-blue-600 text-white px-8 py-2 rounded font-bold text-xs hover:bg-blue-700 transition">Verifikasi</button>
                            <button class="flex-1 bg-blue-600 text-white px-8 py-2 rounded font-bold text-xs hover:bg-blue-700 transition">Lengkapi</button>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="card-stat min-h-[140px]">
                            <div class="flex justify-between items-start">
                                <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest"><i class="fa-solid fa-building-columns mr-2 text-blue-500"></i> Event Aktif</span>
                                <span class="text-orange-500 text-[10px] font-bold cursor-pointer hover:underline">Detail <i class="fa-solid fa-arrow-up-right-from-square ml-1"></i></span>
                            </div>
                            <div class="flex items-baseline gap-2 mt-4">
                                <span class="text-6xl font-light text-gray-800">0</span>
                                <span class="text-gray-400 text-sm font-bold uppercase italic">Event</span>
                            </div>
                        </div>
                        
                        <div class="card-stat min-h-[140px]">
                            <div class="flex justify-between items-start">
                                <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest"><i class="fa-solid fa-file-signature mr-2 text-emerald-500"></i> Event Draft</span>
                                <span class="text-orange-500 text-[10px] font-bold cursor-pointer hover:underline">Detail <i class="fa-solid fa-arrow-up-right-from-square ml-1"></i></span>
                            </div>
                            <div class="flex items-baseline gap-2 mt-4">
                                <span class="text-6xl font-light text-gray-800">0</span>
                                <span class="text-gray-400 text-sm font-bold uppercase italic">Event</span>
                            </div>
                        </div>

                        <div class="card-stat min-h-[140px] bg-slate-50">
                            <div class="flex justify-between items-start">
                                <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest"><i class="fa-solid fa-receipt mr-2 text-purple-500"></i> Total Transaksi</span>
                            </div>
                            <div class="flex items-baseline gap-2 mt-4">
                                <span class="text-6xl font-light text-gray-800">0</span>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                         <div class="card-stat border-t-4 border-t-orange-400">
                            <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4"><i class="fa-solid fa-ticket mr-2 text-orange-400"></i> Total Tiket Terjual</span>
                            <div class="flex items-baseline gap-2 border-t pt-4">
                                <span class="text-6xl font-light text-gray-800">0</span>
                                <span class="text-gray-400 text-sm font-bold uppercase italic">Tiket</span>
                            </div>
                        </div>

                        <div class="card-stat border-t-4 border-t-emerald-400">
                            <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-4"><i class="fa-solid fa-money-bill-wave mr-2 text-emerald-500"></i> Total Penjualan</span>
                            <div class="flex items-baseline gap-2 border-t pt-4">
                                <span class="text-gray-400 text-2xl font-light">Rp</span>
                                <span class="text-6xl font-light text-gray-800">0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div x-show="role === 'pembeli'" x-transition:enter="duration-300 ease-out" x-cloak>
                    <div class="border-b mb-12 flex space-x-12">
                        <button class="pb-4 text-sm font-black text-blue-600 border-b-4 border-blue-600 uppercase italic tracking-tighter">Event Aktif</button>
                        <button class="pb-4 text-sm font-bold text-gray-400 hover:text-gray-600 transition uppercase italic tracking-tighter">Event Lalu</button>
                    </div>
                    
                    <div class="flex flex-col items-center justify-center py-24 bg-white rounded-3xl border-2 border-dashed border-gray-100">
                        <div class="relative mb-6">
                            <i class="fa-solid fa-ticket-simple text-gray-100 text-[120px] rotate-12"></i>
                            <i class="fa-solid fa-magnifying-glass text-blue-500 text-4xl absolute bottom-0 right-0"></i>
                        </div>
                        <h3 class="text-gray-800 font-black italic uppercase tracking-tighter text-xl mb-2">Tiket Masih Kosong</h3>
                        <p class="text-gray-400 text-sm mb-6 text-center max-w-xs font-medium">
                            Sepertinya kamu belum membeli tiket apapun. Yuk, cari event seru hari ini!
                        </p>
                        <a href="{{ route('jelajah.create') }}" class="bg-blue-600 text-white px-8 py-3 rounded-xl font-black text-sm hover:bg-blue-700 transition shadow-lg shadow-blue-200 uppercase italic">
                            Cari Event Sekarang ❯
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>