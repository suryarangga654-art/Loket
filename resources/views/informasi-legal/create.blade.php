<x-app-layout>
    <style>
        [x-cloak] { display: none !important; }
        .sidebar-link { @apply flex items-center px-6 py-3 text-sm transition-all duration-200 border-l-4 border-transparent; }
        .sidebar-link.active { @apply bg-blue-600 text-white border-blue-400 font-semibold; }
        .sidebar-link.inactive { @apply text-gray-400 hover:bg-[#253a63] hover:text-white; }
    </style>

    <div class="bg-gray-50 flex min-h-screen" x-data="{ openSection: 'individu' }">
        <aside class="w-64 bg-[#1a2b4c] text-gray-300 flex flex-col sticky top-0 h-screen shadow-xl z-30">
            <div class="p-6 flex items-center gap-2">
                <h1 class="text-white font-bold text-xl tracking-tighter">
                    LOKET<span class="bg-white text-[#1a2b4c] text-[10px] px-1 ml-1 rounded font-black uppercase">12 Tahun</span>
                </h1>
            </div>

            <nav class="flex-1 overflow-y-auto">
                <div class="px-6 py-2 text-[10px] uppercase font-bold text-gray-500 tracking-widest">Dashboard</div>
                <a href="{{ route('tiket.create')}}" class="sidebar-link inactive">
                    <i class="fa-solid fa-house mr-3 w-5 text-center"></i> Dashboard
                </a>
                <a href="{{ route('event-saya.create')}}" class="sidebar-link inactive">
                    <i class="fa-solid fa-calendar-check mr-3 w-5 text-center"></i> Event Saya
                </a>

                <div class="px-6 mt-6 py-2 text-[10px] uppercase font-bold text-gray-500 tracking-widest">Akun</div>
                <a href="{{ route('informasi.create')}}" class="sidebar-link inactive">
                    <i class="fa-solid fa-user-gear mr-3 w-5 text-center"></i> Informasi Dasar
                </a>
                <a href="{{ route('informasi-legal.create')}}" class="sidebar-link active">
                    <i class="fa-solid fa-file-shield mr-3 w-5 text-center"></i> Informasi Legal
                </a>
                 <a href="{{ route('rekening.create')}}" class="sidebar-link active">
                    <i class="fa-solid fa-file-shield mr-3 w-5 text-center"></i> rekening
                </a>
            </nav>
        </aside>

        <main class="flex-1 flex flex-col min-w-0">
            <header class="h-16 bg-white border-b flex items-center justify-between px-8 sticky top-0 z-20 shadow-sm">
                <h2 class="text-lg font-bold text-gray-700 uppercase italic tracking-tighter">Profil Kamu</h2>
                <div class="flex items-center gap-4">
                     <button class="bg-blue-600 text-white px-6 py-2 rounded-md text-xs font-black uppercase hover:bg-blue-700 transition shadow-lg shadow-blue-100">
                        Simpan Perubahan
                    </button>
                </div>
            </header>

            <div class="p-8 max-w-5xl">
                <div class="flex items-center gap-2 text-[10px] mb-8 uppercase font-bold tracking-tighter text-gray-400">
                    <span class="bg-gray-200 text-gray-600 px-2 py-1 rounded">Kamu di sini</span>
                    <i class="fa-solid fa-chevron-right text-[8px]"></i>
                    <span>Akun</span>
                    <i class="fa-solid fa-chevron-right text-[8px]"></i>
                    <span class="text-blue-600">Informasi Legal</span>
                </div>

                <div class="flex items-center justify-between mb-8">
                    <h3 class="text-gray-800 font-black italic uppercase tracking-tighter text-xl">Informasi Legal</h3>
                    <div class="text-[10px] font-bold uppercase tracking-tight">
                        <span class="text-gray-400">Jenis Dokumen:</span>
                        <span class="text-red-500 ml-2 italic underline underline-offset-4">Belum Terverifikasi</span>
                    </div>
                </div>

                <div class="space-y-4">
                    
                    <div class="border-2 border-gray-100 rounded-3xl overflow-hidden bg-white shadow-sm">
                        <button @click="openSection = (openSection === 'individu' ? '' : 'individu')" 
                                class="w-full flex items-center justify-between p-6 transition-colors"
                                :class="openSection === 'individu' ? 'bg-gray-50/50' : 'hover:bg-gray-50'">
                            <div class="flex items-center gap-4">
                                <div :class="openSection === 'individu' ? 'bg-orange-500 border-4 border-orange-100 scale-110' : 'bg-gray-200'" 
                                     class="w-4 h-4 rounded-full transition-all"></div>
                                <span class="font-black italic uppercase text-sm tracking-tighter text-gray-800">Individu</span>
                            </div>
                            <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300"
                               :class="openSection === 'individu' ? 'rotate-180 text-orange-500' : 'text-gray-300'"></i>
                        </button>

                        <div x-show="openSection === 'individu'" x-collapse>
                            <div class="p-8 pt-2 space-y-10">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <div class="group border-2 border-dashed border-gray-200 rounded-2xl p-8 flex flex-col items-center justify-center bg-gray-50/50 hover:border-blue-400 hover:bg-white transition cursor-pointer">
                                        <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center shadow-sm mb-4 group-hover:scale-110 transition">
                                            <i class="fa-solid fa-id-card text-red-400 text-3xl"></i>
                                        </div>
                                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-tighter">Unggah dokumen KTP di sini</p>
                                    </div>
                                    <div class="group border-2 border-dashed border-gray-200 rounded-2xl p-8 flex flex-col items-center justify-center bg-gray-50/50 hover:border-blue-400 hover:bg-white transition cursor-pointer">
                                        <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center shadow-sm mb-4 group-hover:scale-110 transition">
                                            <i class="fa-solid fa-file-invoice text-orange-400 text-3xl"></i>
                                        </div>
                                        <p class="text-[10px] font-black text-gray-400 uppercase tracking-tighter">Unggah dokumen NPWP di sini</p>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-16 gap-y-10">
                                    <div class="space-y-8">
                                        <div class="border-b-2 border-gray-100 focus-within:border-blue-500 transition-all">
                                            <label class="block text-[10px] font-black uppercase text-gray-400 tracking-tighter mb-1">KTP <span class="text-red-500">*</span></label>
                                            <input type="text" placeholder="Masukkan 16 digit nomor KTP di sini" class="w-full py-2 bg-transparent border-none focus:ring-0 text-sm font-bold text-gray-800 placeholder:text-gray-300">
                                            <p class="text-[9px] text-gray-400 mt-1 italic">Abaikan tanda baca yang tertera di KTP</p>
                                        </div>
                                        <div class="border-b-2 border-gray-100 focus-within:border-blue-500 transition-all">
                                            <label class="block text-[10px] font-black uppercase text-gray-400 tracking-tighter mb-1">Nama Lengkap (Sesuai KTP) <span class="text-red-500">*</span></label>
                                            <input type="text" class="w-full py-2 bg-transparent border-none focus:ring-0 text-sm font-bold text-gray-800">
                                        </div>
                                        <div class="border-b-2 border-gray-100 focus-within:border-blue-500 transition-all">
                                            <label class="block text-[10px] font-black uppercase text-gray-400 tracking-tighter mb-1">Alamat (Sesuai KTP) <span class="text-red-500">*</span></label>
                                            <textarea rows="2" class="w-full py-2 bg-transparent border-none focus:ring-0 text-sm font-bold text-gray-800 resize-none"></textarea>
                                        </div>
                                    </div>

                                    <div class="space-y-8">
                                        <div class="border-b-2 border-gray-100 focus-within:border-blue-500 transition-all">
                                            <label class="block text-[10px] font-black uppercase text-gray-400 tracking-tighter mb-1">Nomor NPWP</label>
                                            <input type="text" placeholder="Masukkan 15 digit nomor NPWP di sini" class="w-full py-2 bg-transparent border-none focus:ring-0 text-sm font-bold text-gray-800 placeholder:text-gray-300">
                                            <p class="text-[9px] text-gray-400 mt-1 italic">Abaikan tanda baca yang tertera di NPWP</p>
                                        </div>
                                        <div class="border-b-2 border-gray-100 focus-within:border-blue-500 transition-all">
                                            <label class="block text-[10px] font-black uppercase text-gray-400 tracking-tighter mb-1">Nama Lengkap (Sesuai NPWP)</label>
                                            <input type="text" class="w-full py-2 bg-transparent border-none focus:ring-0 text-sm font-bold text-gray-800">
                                        </div>
                                        <div class="border-b-2 border-gray-100 focus-within:border-blue-500 transition-all">
                                            <label class="block text-[10px] font-black uppercase text-gray-400 tracking-tighter mb-1">Alamat (Sesuai NPWP)</label>
                                            <textarea rows="2" class="w-full py-2 bg-transparent border-none focus:ring-0 text-sm font-bold text-gray-800 resize-none"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-2 border-gray-100 rounded-3xl overflow-hidden bg-white shadow-sm opacity-50">
                        <div class="w-full flex items-center justify-between p-6 cursor-not-allowed">
                            <div class="flex items-center gap-4">
                                <div class="w-4 h-4 rounded-full bg-gray-200"></div>
                                <span class="font-black italic uppercase text-sm tracking-tighter text-gray-400">Badan Hukum</span>
                            </div>
                            <i class="fa-solid fa-chevron-down text-xs text-gray-300"></i>
                        </div>
                    </div>
                </div>

                <div class="mt-10 p-6 bg-gray-100/50 rounded-2xl border border-gray-100">
                    <p class="text-[10px] text-gray-500 leading-relaxed font-medium">
                        Harap perhatikan kesesuaian antara identitas pada KTP dan NPWP. Dalam hal terdapat ketidaksesuaian antara KTP dan NPWP, faktur pajak akan diterbitkan sesuai dengan identitas pada NPWP. Dalam hal dokumen NPWP tidak diunggah, kamu dianggap tidak memiliki NPWP.
                    </p>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>