<x-app-layout>
    <div class="bg-gray-50 flex min-h-screen">
        <aside class="w-64 bg-[#1a2b4c] text-gray-300 flex flex-col sticky top-0 h-screen shadow-xl z-30">
            <div class="p-6 flex items-center gap-2">
                <h1 class="text-white font-bold text-xl tracking-tighter">
                    LOKET<span class="bg-white text-[#1a2b4c] text-[10px] px-1 ml-1 rounded font-black uppercase">12 Tahun</span>
                </h1>
            </div>

            <nav class="flex-1 overflow-y-auto">
                <div class="px-6 py-2 text-[10px] uppercase font-bold text-gray-500 tracking-widest">Dashboard</div>
                <a href="{{ route('tiket.create')}}" class="flex items-center px-6 py-3 text-sm text-gray-400 hover:bg-[#253a63] hover:text-white transition-all">
                    <i class="fa-solid fa-house mr-3 w-5 text-center"></i> Dashboard
                </a>
                <a href="{{ route('event-saya.create')}}" class="flex items-center px-6 py-3 text-sm text-gray-400 hover:bg-[#253a63] hover:text-white transition-all">
                    <i class="fa-solid fa-calendar-check mr-3 w-5 text-center"></i> Event Saya
                </a>
                <a href="{{ route('kelola-akses.create')}}" class="flex items-center px-6 py-3 text-sm text-gray-400 hover:bg-[#253a63] hover:text-white transition-all">
                    <i class="fa-solid fa-users mr-3 w-5 text-center"></i> Kelola Akses
                </a>

                <div class="px-6 mt-6 py-2 text-[10px] uppercase font-bold text-gray-500 tracking-widest">Akun</div>
                <a href="{{ route('informasi.create')}}" class="flex items-center px-6 py-3 text-sm text-gray-400 hover:bg-[#253a63] hover:text-white transition-all">
                    <i class="fa-solid fa-user-gear mr-3 w-5 text-center"></i> Informasi Dasar
                </a>
                <a href="{{ route('informasi-legal.create')}}" class="flex items-center px-6 py-3 text-sm text-gray-400 hover:bg-[#253a63] hover:text-white transition-all">
                    <i class="fa-solid fa-file-shield mr-3 w-5 text-center"></i> Informasi Legal
                </a>
                <a href="{{ route('rekening.create')}}" class="flex items-center px-6 py-3 text-sm text-white bg-blue-600 border-l-4 border-blue-400 font-semibold transition-all">
                    <i class="fa-solid fa-credit-card mr-3 w-5 text-center"></i> Rekening
                </a>
            </nav>
            
            <div class="p-4 border-t border-gray-700">
                <button class="flex items-center gap-2 text-xs text-gray-400 hover:text-white">
                    <i class="fa-solid fa-chevron-left text-[10px]"></i> Singkat Menu
                </button>
            </div>
        </aside>

        <main class="flex-1 flex flex-col min-w-0">
            <header class="h-16 bg-white border-b flex items-center justify-between px-8 sticky top-0 z-20">
                <h2 class="text-xl font-bold text-gray-800 italic tracking-tighter uppercase">Profil Kamu</h2>
                <div class="flex items-center gap-4">
                     <button class="border border-gray-800 text-gray-800 px-4 py-1.5 rounded-md text-xs font-black uppercase hover:bg-gray-50 transition">
                        <i class="fa-solid fa-calendar-plus mr-2"></i> Buat Event
                    </button>
                    <div class="flex items-center gap-2 text-xs text-gray-500 border-l pl-4">
                        <span>Use:</span>
                        <span class="font-bold text-gray-800 uppercase tracking-tighter">M FAIZAL KUR...</span>
                        <i class="fa-solid fa-chevron-right text-[8px]"></i>
                    </div>
                </div>
            </header>

            <div class="p-8">
                <div class="flex items-center gap-2 text-[10px] mb-8 uppercase font-bold tracking-tighter text-gray-400">
                    <span class="bg-gray-200 text-gray-600 px-2 py-1 rounded">Kamu di sini</span>
                    <i class="fa-solid fa-chevron-right text-[8px]"></i>
                    <span>Akun</span>
                    <i class="fa-solid fa-chevron-right text-[8px]"></i>
                    <span class="text-blue-600">Rekening</span>
                </div>

                <div class="space-y-6">
                    <h3 class="text-xl font-black text-slate-800 uppercase tracking-tighter italic border-b pb-4">Rekening Kamu</h3>

                    <div class="flex flex-col items-center justify-center py-20 px-4">
                        <div class="mb-6 opacity-40">
                            <svg width="120" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="text-orange-900">
                                <rect x="2" y="5" width="20" height="14" rx="2" />
                                <line x1="2" y1="10" x2="22" y2="10" />
                                <line x1="7" y1="15" x2="7.01" y2="15" />
                                <line x1="11" y1="15" x2="11.01" y2="15" />
                            </svg>
                        </div>
                        
                        <p class="text-sm text-gray-500 text-center max-w-sm mb-8 leading-relaxed">
                            Silakan masukkan rekening kamu terlebih dahulu untuk dapat memproses penarikan penjualan.
                        </p>

                        <button class="bg-blue-600 text-white px-8 py-3 rounded-md text-sm font-bold shadow-lg shadow-blue-100 hover:bg-blue-700 transition">
                            Masukkan Rekening
                        </button>
                    </div>
                </div>
            </div>

            <footer class="mt-auto p-8 text-[10px] text-gray-400 flex justify-end italic uppercase tracking-widest">
                © 2026 LOKET (PT Global Loket Sejahtera)
            </footer>
        </main>
    </div>
</x-app-layout>