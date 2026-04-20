3. HALAMAN PILIH TIKET (TAMPILAN KANAN)
        <div x-show="view === 'tiket'" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-x-4" x-transition:enter-end="opacity-100 translate-x-0">
            <div class="flex flex-col md:flex-row min-h-screen bg-white">
                {{-- Sisi Kiri: List Tiket --}}
                <div class="w-full md:w-[60%] p-6 md:p-12 overflow-y-auto">
                    <button @click="view = 'detail'" class="text-blue-600 text-sm font-bold mb-8 flex items-center gap-2 hover:underline">
                        ← Kembali ke Detail Event
                    </button>

                    <div class="mb-8">
                        <h1 class="text-2xl font-black italic uppercase tracking-tighter text-slate-900">Afgan - retrospektif The Concert 2026</h1>
                        <p class="text-[10px] font-black uppercase text-gray-400 tracking-widest mt-1">Diselenggarakan oleh Seven Star Production</p>
                    </div>

                    <div class="bg-blue-50 border border-blue-100 p-4 rounded-xl flex gap-4 mb-8">
                        <span class="text-2xl">🎟️</span>
                        <div>
                            <p class="text-xs font-bold text-blue-900">Single Ticket Type</p>
                            <p class="text-[10px] text-blue-700">Kamu hanya bisa pilih satu kategori tiket per transaksi.</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        @php
                            $tickets = [
                                ['name' => 'Regular - Diamond', 'price' => '4.750.000'],
                                ['name' => 'Regular - VIP Center A', 'price' => '4.000.000'],
                                ['name' => 'Regular - VIP Center B', 'price' => '3.500.000'],
                                ['name' => 'Regular - Bronze', 'price' => '600.000'],
                            ];
                        @endphp

                        @foreach($tickets as $ticket)
                        <div class="border border-gray-200 rounded-xl p-5 hover:border-orange-400 transition cursor-pointer group shadow-sm">
                            <div class="flex justify-between items-center">
                                <div class="space-y-1">
                                    <h3 class="font-black italic uppercase text-sm text-slate-800">{{ $ticket['name'] }}</h3>
                                    <p class="text-[10px] text-gray-400 font-medium italic">Penjualan berakhir 18 Jul 2026</p>
                                    <p class="text-lg font-black text-slate-900">Rp{{ $ticket['price'] }}</p>
                                </div>
                                <button class="border-2 border-blue-600 text-blue-600 px-6 py-1.5 rounded-lg font-black italic text-xs uppercase hover:bg-blue-600 hover:text-white transition">
                                    Pilih
                                </button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Sisi Kanan: Visual Overlay --}}
                <div class="hidden md:block w-[40%] bg-black relative">
                    <img src="https://images.unsplash.com/photo-1507874457470-272b3c8d8ee2?q=80&w=1000" class="absolute inset-0 w-full h-full object-cover opacity-30 blur-sm">
                    <div class="relative z-10 flex flex-col items-center justify-center h-full p-12 text-center">
                        <img src="https://images.unsplash.com/photo-1507874457470-272b3c8d8ee2?q=80&w=600" class="rounded-xl shadow-2xl border border-white/20 mb-6 transform -rotate-2">
                        <div class="bg-white/10 backdrop-blur-md px-6 py-2 rounded-full">
                            <p class="text-white text-[10px] font-black uppercase tracking-[0.3em]">Official Ticket Partner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>