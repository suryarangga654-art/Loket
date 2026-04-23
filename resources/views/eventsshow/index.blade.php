<x-app-layout>
    <div x-data="{ view: 'tiket' }"> {{-- Inisialisasi Alpine --}}
        <div x-show="view === 'tiket'" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-x-4" x-transition:enter-end="opacity-100 translate-x-0">
            <div class="flex flex-col md:flex-row min-h-screen bg-white">
                
                {{-- Sisi Kiri: List Event (Database) --}}
                <div class="w-full md:w-[60%] p-6 md:p-12 overflow-y-auto">
                    <div class="flex justify-between items-center mb-8">
                        <div>
                            <h1 class="text-2xl font-black italic uppercase tracking-tighter text-slate-900">Explore All Events</h1>
                            <p class="text-[10px] font-black uppercase text-gray-400 tracking-widest mt-1">Cari event seru dan amankan tiketmu</p>
                        </div>
                        <a href="{{ route('admin.events.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg font-bold text-[10px] uppercase tracking-wider">
                            + Create
                        </a>
                    </div>

                    {{-- Banner Info --}}
                    <div class="bg-blue-50 border border-blue-100 p-4 rounded-xl flex gap-4 mb-8">
                        <span class="text-2xl">🔥</span>
                        <div>
                            <p class="text-xs font-bold text-blue-900">Trending Events</p>
                            <p class="text-[10px] text-blue-700">Dapatkan pengalaman tak terlupakan dengan event pilihan kami.</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        @forelse($semuaEvent as $event)
                        <div onclick="window.location.href='/events/{{ $event->id }}'" 
                             class="border border-gray-200 rounded-xl p-5 hover:border-orange-400 transition cursor-pointer group shadow-sm bg-gray-50/50">
                            <div class="flex justify-between items-center">
                                <div class="space-y-1">
                                    <h3 class="font-black italic uppercase text-sm text-slate-800 group-hover:text-blue-600 transition">
                                        {{ $event->judul_event }}
                                    </h3>
                                    <p class="text-[10px] text-gray-400 font-medium italic">
                                        {{ \Carbon\Carbon::parse($event->tanggal)->translatedFormat('d M Y') }} • {{ $event->lokasi }}
                                    </p>
                                    <p class="text-lg font-black text-slate-900">Gratis</p>
                                </div>
                                <button class="border-2 border-blue-600 text-blue-600 px-6 py-1.5 rounded-lg font-black italic text-xs uppercase group-hover:bg-blue-600 group-hover:text-white transition">
                                    Lihat
                                </button>
                            </div>
                        </div>
                        @empty
                        <div class="py-20 text-center border-2 border-dashed border-gray-100 rounded-2xl">
                            <p class="text-gray-400 font-black italic uppercase text-xs">Belum ada event yang spawn</p>
                        </div>
                        @endforelse
                    </div>
                </div>

                {{-- Sisi Kanan: Visual Overlay (Hero Image dari Event Pertama) --}}
                <div class="hidden md:block w-[40%] bg-black relative">
                    @if($semuaEvent->count() > 0)
                        <img src="{{ asset('storage/' . $semuaEvent->first()->gambar) }}" class="absolute inset-0 w-full h-full object-cover opacity-30 blur-sm">
                        <div class="relative z-10 flex flex-col items-center justify-center h-full p-12 text-center">
                            <img src="{{ asset('storage/' . $semuaEvent->first()->gambar) }}" class="rounded-xl shadow-2xl border border-white/20 mb-6 transform -rotate-2 w-full max-w-xs">
                            <div class="bg-white/10 backdrop-blur-md px-6 py-2 rounded-full">
                                <p class="text-white text-[10px] font-black uppercase tracking-[0.3em]">Official Ticket Partner</p>
                            </div>
                        </div>
                    @else
                        <div class="flex items-center justify-center h-full">
                            <p class="text-white/20 font-black italic tracking-widest text-4xl">LOKÉT</p>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</x-app-layout>