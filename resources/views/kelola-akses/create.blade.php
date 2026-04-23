<x-app-layout>
    <div class="bg-gray-50 flex min-h-screen">
        <aside class="w-64 bg-[#1a2b4c] text-gray-300 flex flex-col sticky top-0 h-screen shadow-xl z-30">
            <div class="p-6 flex items-center gap-2">
                <h1 class="text-white font-bold text-xl tracking-tighter">
                    LOKET<span class="bg-white text-[#1a2b4c] text-[10px] px-1 ml-1 rounded font-black uppercase">12 Tahun</span>
                </h1>
            </div>

            <div class="px-4 mb-6">
                <div class="bg-[#253a63] p-3 rounded-lg flex items-center gap-3 border border-gray-700">
                    <div class="w-10 h-10 bg-orange-500 rounded-lg flex items-center justify-center text-xl">
                        <i class="fa-solid fa-face-smile text-white"></i>
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-[11px] font-bold text-white truncate uppercase tracking-tight">M FAIZAL KURNIA...</p>
                        <p class="text-[10px] text-gray-400 font-medium">Admin</p>
                    </div>
                    <i class="fa-solid fa-chevron-up-down text-[10px] ml-auto text-gray-500"></i>
                </div>
            </div>

            <nav class="flex-1 overflow-y-auto">
                <div class="px-6 py-2 text-[10px] uppercase font-bold text-gray-500 tracking-widest">Dashboard</div>
                <a href="{{ route('dashboardcreator.create')}}" class="flex items-center px-6 py-3 text-sm text-gray-400 hover:bg-[#253a63] hover:text-white transition-all">
                    <i class="fa-solid fa-house mr-3 w-5 text-center"></i> Dashboard
                </a>
                <a href="{{ route('event-saya.create')}}" class="flex items-center px-6 py-3 text-sm text-gray-400 hover:bg-[#253a63] hover:text-white transition-all">
                    <i class="fa-solid fa-calendar-check mr-3 w-5 text-center"></i> Event Saya
                </a>
                <a href="{{ route('kelola-akses.create')}}" class="flex items-center px-6 py-3 text-sm text-white bg-blue-600 border-l-4 border-blue-400 font-semibold transition-all">
                    <i class="fa-solid fa-users mr-3 w-5 text-center"></i> Kelola Akses
                </a>

                <div class="px-6 mt-6 py-2 text-[10px] uppercase font-bold text-gray-500 tracking-widest">Akun</div>
                <a href="{{ route('informasi.create')}}" class="flex items-center px-6 py-3 text-sm text-gray-400 hover:bg-[#253a63] hover:text-white transition-all">
                    <i class="fa-solid fa-user-gear mr-3 w-5 text-center"></i> Informasi Dasar
                </a>
                <a href="{{ route('pengaturan.create')}}" class="flex items-center px-6 py-3 text-sm text-gray-400 hover:bg-[#253a63] hover:text-white transition-all">
        <i class="fa-solid fa-user-gear mr-3 w-5 text-center"></i> pengaturan
    </a>
                <a href="{{ route('informasi-legal.create')}}" class="flex items-center px-6 py-3 text-sm text-gray-400 hover:bg-[#253a63] hover:text-white transition-all">
                    <i class="fa-solid fa-file-shield mr-3 w-5 text-center"></i> Informasi Legal
                </a>
                <a href="{{ route('rekening.create')}}" class="flex items-center px-6 py-3 text-sm text-gray-400 hover:bg-[#253a63] hover:text-white transition-all">
                    <i class="fa-solid fa-file-shield mr-3 w-5 text-center"></i> rekening
                </a>
            </nav>
        </aside>

        <main class="flex-1 flex flex-col min-w-0">
            <header class="h-16 bg-white border-b flex items-center justify-between px-8 sticky top-0 z-20 shadow-sm">
                <h2 class="text-xl font-bold text-gray-800 uppercase italic tracking-tighter">Kelola Akses</h2>
                <div class="flex items-center gap-4">
                     <button class="border border-gray-800 text-gray-800 px-4 py-1.5 rounded-md text-xs font-black uppercase hover:bg-gray-50 transition">
                        <i class="fa-solid fa-calendar-plus mr-2"></i> Buat Event
                    </button>
                    <div class="flex items-center gap-2 text-xs text-gray-500 border-l pl-4">
                        <span>User:</span>
                        <span class="font-bold text-gray-800 uppercase tracking-tighter">M FAIZAL KUR...</span>
                    </div>
                </div>
            </header>

            <div class="p-8 space-y-12">
                <div class="flex items-center gap-2 text-[10px] mb-8 uppercase font-bold tracking-tighter text-gray-400">
                    <span class="bg-gray-200 text-gray-600 px-2 py-1 rounded">Kamu di sini</span>
                    <i class="fa-solid fa-chevron-right text-[8px]"></i>
                    <span class="text-blue-600">Kelola Akses</span>
                </div>

                <div class="space-y-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-2xl font-black text-slate-800 uppercase tracking-tighter italic">Pengguna</h3>
                        <button class="bg-blue-600 text-white px-5 py-2.5 rounded-md text-sm font-bold shadow-lg shadow-blue-100 hover:bg-blue-700 transition">
                            Undang <i class="fa-solid fa-plus ml-1 text-xs"></i>
                        </button>
                    </div>

                    <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 flex items-center gap-4">
                        <button class="flex items-center gap-2 border border-blue-500 text-blue-600 px-4 py-2 rounded-md text-xs font-bold hover:bg-blue-50">
                            <i class="fa-solid fa-sliders text-sm"></i> Filter
                        </button>
                        <div class="h-6 w-[1px] bg-gray-200"></div>
                        <div class="flex-1 relative">
                            <input type="text" placeholder="Cari pengguna" class="w-full pl-10 pr-4 py-2 bg-gray-50 border-none rounded-lg text-sm focus:ring-2 focus:ring-blue-500 placeholder:font-medium placeholder:text-gray-400">
                            <i class="fa-solid fa-magnifying-glass absolute left-3 top-3 text-gray-400 text-sm"></i>
                        </div>
                        <div class="flex items-center gap-1.5 text-xs text-gray-500 font-bold">
                            <span>Peran</span>
                            <i class="fa-solid fa-chevron-down text-[10px]"></i>
                        </div>
                        <div class="flex items-center gap-1.5 text-xs text-gray-500 font-bold">
                            <span>Status</span>
                            <i class="fa-solid fa-chevron-down text-[10px]"></i>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                        <table class="w-full text-sm">
                            <thead class="bg-gray-50 border-b border-gray-100 text-left">
                                <tr class="text-xs text-gray-500 font-bold uppercase tracking-widest">
                                    <th class="p-4 px-6 w-10"><input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500 w-4 h-4"></th>
                                    <th class="p-4 px-6">Nama</th>
                                    <th class="p-4 px-6">Email</th>
                                    <th class="p-4 px-6">Peran</th>
                                    <th class="p-4 px-6">Event</th>
                                    <th class="p-4 px-6">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr class="font-medium text-gray-800">
                                    <td class="p-4 px-6"><input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500 w-4 h-4"></td>
                                    <td class="p-4 px-6 uppercase tracking-tight font-black italic">M FAIZAL KURNIAWAN PUTRA</td>
                                    <td class="p-4 px-6 text-gray-600">surryarngga654@gmail.com</td>
                                    <td class="p-4 px-6">Admin</td>
                                    <td class="p-4 px-6">0</td>
                                    <td class="p-4 px-6">
                                        <span class="bg-emerald-50 text-emerald-600 text-[10px] font-bold px-2.5 py-1 rounded-md">Aktif</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <div class="p-4 flex items-center justify-between text-xs text-gray-400 border-t">
                            <div class="flex items-center gap-2">
                                <span>Tampil</span>
                                <select class="bg-transparent border border-gray-200 rounded px-1.5 py-0.5 focus:ring-0">
                                    <option>5</option>
                                    <option>10</option>
                                </select>
                                <span class="font-medium">Total data: 1</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button class="w-6 h-6 flex items-center justify-center rounded bg-white hover:bg-gray-100 border transition">❮</button>
                                <span class="w-6 h-6 flex items-center justify-center rounded bg-blue-600 text-white font-bold">1</span>
                                <button class="w-6 h-6 flex items-center justify-center rounded bg-white hover:bg-gray-100 border transition">❯</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <h3 class="text-2xl font-black text-slate-800 uppercase tracking-tighter italic border-t pt-8">Event</h3>

                    <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 flex items-center gap-4">
                        <button class="flex items-center gap-2 border border-blue-500 text-blue-600 px-4 py-2 rounded-md text-xs font-bold hover:bg-blue-50">
                            <i class="fa-solid fa-sliders text-sm"></i> Filter
                        </button>
                        <div class="h-6 w-[1px] bg-gray-200"></div>
                        <div class="flex-1 relative">
                            <input type="text" placeholder="Cari event" class="w-full pl-10 pr-4 py-2 bg-gray-50 border-none rounded-lg text-sm focus:ring-2 focus:ring-blue-500 placeholder:font-medium placeholder:text-gray-400">
                            <i class="fa-solid fa-magnifying-glass absolute left-3 top-3 text-gray-400 text-sm"></i>
                        </div>
                        <div class="flex items-center gap-1.5 text-xs text-gray-500 font-bold">
                            <span>Status Event</span>
                            <i class="fa-solid fa-chevron-down text-[10px]"></i>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                        <table class="w-full text-sm">
                            <thead class="bg-gray-50 border-b border-gray-100 text-left">
                                <tr class="text-xs text-gray-500 font-bold uppercase tracking-widest">
                                    <th class="p-4 px-6">Nama Event</th>
                                    <th class="p-4 px-6 w-1/4">Kapasitas</th>
                                    <th class="p-4 px-6 w-1/4">Tanggal Event</th>
                                </tr>
                            </thead>
                        </table>
                        <div class="p-16 flex flex-col items-center justify-center text-gray-400 border-t">
                            <i class="fa-solid fa-calendar-day text-5xl mb-4 opacity-30"></i>
                            <p class="text-xs font-medium text-center">Daftar event kamu masih kosong, buat event untuk memulainya</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>