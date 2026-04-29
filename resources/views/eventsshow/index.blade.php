<x-app-layout>
    {{-- 1. Alpine Init: Sinkron dengan Database --}}
    <div x-data="{ 
            view: 'tiket',
            activeImage: '{{ $semuaEvent->count() > 0 ? asset('storage/' . $semuaEvent->first()->gambar) : 'https://images.unsplash.com/photo-1507874457470-272b3c8d8ee2?q=80&w=1000' }}',
            activeTitle: '{{ $semuaEvent->count() > 0 ? $semuaEvent->first()->judul_event : 'LOKÉT PROJECT' }}',
            slideIndex: 0,
            totalSlides: {{ $semuaEvent->count() }},
            
            nextSlide() {
                this.slideIndex = (this.slideIndex + 1) % this.totalSlides;
            },
            prevSlide() {
                this.slideIndex = (this.slideIndex - 1 + this.totalSlides) % this.totalSlides;
            }
         }"
         x-init="setInterval(() => nextSlide(), 5000)">
        
        <div x-show="view === 'tiket'" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-x-4" x-transition:enter-end="opacity-100 translate-x-0">
            <div class="flex flex-col md:flex-row min-h-screen bg-white relative">
                
                {{-- SISI KIRI: KONTEN UTAMA (60%) --}}
                <div class="w-full md:w-[60%] p-6 md:p-12 overflow-y-auto pb-20 border-r border-gray-100">
                    
                    {{-- Header --}}
                    <div class="flex justify-between items-center mb-10">
                        <div>
                            <h1 class="text-3xl font-black italic uppercase tracking-tighter text-slate-900">Discovery</h1>
                            <p class="text-[10px] font-black uppercase text-gray-400 tracking-[0.3em] mt-1 italic">Find your next experience</p>
                        </div>
                        <a href="{{ route('admin.events.create') }}" class="bg-blue-600 text-white px-5 py-2.5 rounded-xl font-bold text-[11px] uppercase tracking-wider shadow-lg hover:bg-blue-700 transition active:scale-95">
                            + Create Event
                        </a>
                    </div>

                    {{-- 2. BANNER SLIDER (Dinamis dari Database) --}}
                    @if($semuaEvent->count() > 0)
                    <div class="relative group mb-12 overflow-hidden rounded-3xl shadow-2xl bg-slate-900 h-64 md:h-80">
                        <div class="flex h-full transition-transform duration-700 ease-in-out" :style="'transform: translateX(-' + (slideIndex * 100) + '%)'">
                            @foreach($semuaEvent as $event)
                            <div class="min-w-full h-full relative">
                                <img src="{{ asset('storage/' . $event->gambar) }}" class="w-full h-full object-cover opacity-60">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent flex flex-col justify-end p-8">
                                    <p class="text-blue-400 text-[10px] font-black uppercase tracking-[0.4em] mb-2">{{ $event->kategori }}</p>
                                    <h2 class="text-white text-3xl font-black italic uppercase tracking-tighter">{{ $event->judul_event }}</h2>
                                    <button onclick="window.location.href='/events/{{ $event->id }}'" class="mt-4 w-fit bg-white text-slate-900 px-6 py-2 rounded-full font-black italic text-[10px] uppercase hover:bg-orange-500 hover:text-white transition">
                                        Check Details
                                    </button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                        {{-- Navigasi Slider --}}
                        <button @click="prevSlide()" class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/10 backdrop-blur-md hover:bg-white/20 text-white p-2 rounded-full transition">❮</button>
                        <button @click="nextSlide()" class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/10 backdrop-blur-md hover:bg-white/20 text-white p-2 rounded-full transition">❯</button>
                    </div>
                    @endif

                    {{-- 3. LIST FEATURED EVENTS --}}
                    <h2 class="text-xl font-black italic uppercase tracking-tighter text-slate-800 mb-6 flex items-center gap-2">
                        <span class="w-8 h-[2px] bg-blue-600"></span> Featured Events
                    </h2>

                    <div class="space-y-5">
                        @forelse($semuaEvent as $index => $event)
                        <div @mouseover="activeImage = '{{ asset('storage/' . $event->gambar) }}'; activeTitle = '{{ $event->judul_event }}'"
                             onclick="window.location.href='/events/{{ $event->id }}'" 
                             class="border border-gray-100 rounded-2xl p-6 hover:border-blue-400 transition-all duration-300 cursor-pointer group shadow-sm bg-gray-50/50 hover:shadow-xl hover:-translate-y-1 relative overflow-hidden">
                            
                            <div class="flex justify-between items-center gap-6">
                                <div class="space-y-1.5 flex-1">
                                    <div class="text-[9px] font-black text-blue-600 uppercase tracking-widest italic mb-1">{{ $event->kategori }}</div>
                                    <h3 class="font-black italic uppercase text-lg text-slate-800 group-hover:text-blue-900 transition leading-tight">
                                        {{ $event->judul_event }}
                                    </h3>
                                    <div class="flex items-center gap-4 text-[10px] text-gray-400 font-bold uppercase italic">
                                        <span>📅 {{ \Carbon\Carbon::parse($event->tanggal)->translatedFormat('d M Y') }}</span>
                                        <span>📍 {{ $event->lokasi }}</span>
                                    </div>
                                    <p class="text-xl font-black text-slate-900 pt-2 italic uppercase">Rp {{ number_format($event->harga, 0, ',', '.') }}</p>
                                </div>
                                <button class="border-2 border-blue-600 text-blue-600 px-6 py-2 rounded-xl font-black italic text-xs uppercase group-hover:bg-blue-600 group-hover:text-white transition">
                                    Lihat
                                </button>
                            </div>
                        </div>
                        @empty
                        <div class="py-20 text-center border-4 border-dashed border-gray-100 rounded-3xl bg-gray-50">
                            <p class="text-gray-400 font-black italic uppercase text-sm tracking-[0.4em]">No Events Found</p>
                        </div>
                        @endforelse
                    </div>

                    {{-- Footer Icons --}}
                    <div class="mt-20 opacity-20 grayscale flex justify-center gap-8 border-t border-gray-100 pt-10">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Bank_Central_Asia.svg" class="h-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/eb/Logo_dana_blue.svg" class="h-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Logo_QRIS.svg" class="h-4">
                    </div>
                </div>

                {{-- SISI KANAN: HERO VISUAL (40%) --}}
                <div class="hidden md:block w-[40%] bg-slate-950 h-screen sticky top-0 overflow-hidden relative">
                    {{-- Background Blur Dinamis --}}
                    <img :src="activeImage" :key="activeImage + '_bg'"
                         class="absolute inset-0 w-full h-full object-cover opacity-20 blur-3xl scale-150 transition-all duration-1000">
                    
                    <div class="relative z-10 flex flex-col items-center justify-center h-full p-12 text-center">
                        <div class="relative group">
                            <div class="absolute -inset-10 bg-blue-600/20 rounded-full blur-3xl opacity-50 group-hover:opacity-100 transition duration-1000"></div>
                            <img :src="activeImage" :key="activeImage + '_main'"
                                 class="relative rounded-2xl shadow-[0_35px_60px_-15px_rgba(0,0,0,0.8)] border border-white/10 mb-10 transform rotate-2 w-full max-w-sm transition-all duration-700 group-hover:rotate-0">
                        </div>
                        
                        <div class="inline-block bg-white/5 backdrop-blur-md px-4 py-1.5 rounded-full border border-white/10 mb-4">
                            <p class="text-white/60 text-[9px] font-black uppercase tracking-[0.6em]">Premium Experience</p>
                        </div>
                        <h2 x-text="activeTitle" class="text-white text-4xl font-black italic uppercase tracking-tighter leading-none max-w-xs transition-all duration-500"></h2>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>