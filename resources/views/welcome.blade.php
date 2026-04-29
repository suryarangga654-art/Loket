<x-app-layout>
<div class="bg-gray-100 min-h-screen pb-20">
    <div class="max-w-7xl mx-auto mt-6 px-4 relative">
        <button onclick="prevSlide()" 
            class="absolute left-6 top-1/2 -translate-y-1/2 z-10 bg-black/50 hover:bg-black/70 text-white px-3 py-2 rounded-full">
            ❮
        </button>

       <div class="overflow-hidden rounded-2xl shadow-lg">
    <div id="slides" class="flex transition-transform duration-500">
        
        {{-- MULAI DINAMIS DI SINI --}}
        @foreach($semuaEvent as $event)
        <div class="min-w-full relative group cursor-pointer">
            {{-- Route diarahkan ke ID event tersebut --}}
            <a href="{{ route('eventsshow.show', $event->id) }}" class="block">
                
                {{-- Gambar diambil dari kolom 'gambar' di database --}}
                <img src="{{ asset('storage/' . $event->gambar) }}"
                     class="w-full h-80 object-cover" 
                     alt="{{ $event->judul_event }}">

                <div class="absolute inset-0 bg-black/40 flex items-center px-10 text-white transition-opacity group-hover:bg-black/50">
                    <div>
                        {{-- Data teks juga jadi dinamis --}}
                        <p class="text-sm tracking-widest uppercase">MUSIC EVENT</p>
                        <h1 class="text-4xl font-black">{{ $event->judul_event }}</h1>
                        <p class="text-xl">{{ $event->lokasi }}</p>
                        
                        <div class="mt-4 inline-block bg-blue-600 px-6 py-2 rounded-lg font-bold text-sm">Beli Tiket</div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        {{-- SELESAI --}}

    </div>
</div>

        <button onclick="nextSlide()" 
            class="absolute right-6 top-1/2 -translate-y-1/2 z-10 bg-black/50 hover:bg-black/70 text-white px-3 py-2 rounded-full">
            ❯
        </button>
    </div>

    <div class="max-w-7xl mx-auto mt-10 px-4">
    <h2 class="text-2xl font-black italic uppercase tracking-tighter text-gray-800 mb-6">Featured Events</h2>

    <div class="relative group">
        <button onclick="prevEvent()" 
            class="absolute -left-4 top-1/2 -translate-y-1/2 z-10 bg-white shadow-xl text-blue-900 w-10 h-10 rounded-full flex items-center justify-center border border-gray-100 hover:bg-gray-100 transition">
            ❮
        </button>

        <div class="overflow-hidden px-1">
            <div id="eventSlides" class="flex gap-6 transition-transform duration-500 ease-in-out">
                @php
                $images = [
                    "https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?q=80&w=400",
                    "https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=400",
                    "https://images.unsplash.com/photo-1506157786151-b8491531f063?q=80&w=400",
                    "https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?q=80&w=400",
                    "https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?q=80&w=400",
                    "https://images.unsplash.com/photo-1470225620780-dba8ba36b745?q=80&w=400"
                ];
                @endphp

               <div id="eventSlides" class="flex gap-6 transition-transform duration-500 ease-in-out">
    @forelse($semuaEvent as $event)
        {{-- Link dinamis ke halaman detail --}}
        <a href="{{ route('eventsshow.show', $event->id) }}" 
           class="min-w-[280px] flex-shrink-0 bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100 group">
            
            <div class="relative overflow-hidden">
                {{-- Gambar dinamis dari database --}}
                <img src="{{ $event->gambar ? asset('storage/' . $event->gambar) : 'https://placehold.co/400x250?text=No+Image' }}" 
                     onerror="this.src='https://placehold.co/400x250?text=Error+Loading+Image'"
                     class="w-full h-44 object-cover group-hover:scale-110 transition-transform duration-500">
                
                <div class="absolute top-3 left-3 bg-white/90 backdrop-blur px-2 py-1 rounded text-[10px] font-bold text-blue-600 uppercase shadow-sm">
                    Film Bioskop
                </div>
            </div>

            <div class="p-4">
                {{-- Judul dari Database --}}
                <h3 class="font-black text-gray-800 uppercase italic tracking-tight group-hover:text-blue-600 transition">
                    {{ $event->judul_event }}
                </h3>
                
                {{-- Tanggal dari Database --}}
                <p class="text-gray-400 text-xs mt-1 flex items-center gap-1 font-bold uppercase italic">
                    📅 {{ \Carbon\Carbon::parse($event->tanggal)->format('d M Y') }}
                </p>
                
                {{-- Harga (bisa kamu buat kolom harga di DB atau hardcode dulu) --}}
                <p class="font-black mt-3 text-blue-900 text-lg italic tracking-tighter">
                    Rp{{ number_format($event->harga ?? 99000, 0, ',', '.') }}
                </p>
                
                <hr class="my-3 border-gray-50">
                
                <div class="flex items-center gap-2">
                    <div class="w-6 h-6 rounded bg-gray-100 flex items-center justify-center text-[10px]">🏢</div>
                    <div class="text-[9px] font-black text-gray-400 uppercase tracking-widest italic">
                        {{ $event->organizer ?? 'Organizer XYZ' }}
                    </div>
                </div>
            </div>
        </a>
    @empty
        <p class="text-gray-500 italic p-4">Belum ada event unggulan.</p>
    @endforelse
</div>
        </div>

        <button onclick="nextEvent()" 
            class="absolute -right-4 top-1/2 -translate-y-1/2 z-10 bg-white shadow-xl text-blue-900 w-10 h-10 rounded-full flex items-center justify-center border border-gray-100 hover:bg-gray-100 transition">
            ❯
        </button>
    </div>
</div>

<script>
    let currentPos = 0;
    const slider = document.getElementById('eventSlides');
    const cardWidth = 304; // Lebar card (280px) + Gap (24px)

    function nextEvent() {
        const maxScroll = slider.scrollWidth - slider.clientWidth;
        if (currentPos < maxScroll) {
            currentPos += cardWidth;
            if (currentPos > maxScroll) currentPos = maxScroll;
            slider.style.transform = `translateX(-${currentPos}px)`;
        } else {
            // Balik ke awal jika sudah di ujung
            currentPos = 0;
            slider.style.transform = `translateX(0px)`;
        }
    }

    function prevEvent() {
        if (currentPos > 0) {
            currentPos -= cardWidth;
            if (currentPos < 0) currentPos = 0;
            slider.style.transform = `translateX(-${currentPos}px)`;
        }
    }
</script>
   <div class="max-w-7xl mx-auto mt-16 px-4">
    {{-- Bungkus dengan tag <a> dan beri efek hover --}}
    <a href="{{ route('promo.create')}}" target="_blank" 
       class="block relative overflow-hidden rounded-2xl bg-gradient-to-r from-gray-100 to-gray-200 h-32 flex items-center shadow-inner border border-gray-300 hover:shadow-xl hover:scale-[1.01] transition-all duration-300 group">
        
        <div class="flex items-center justify-between w-full px-6 md:px-12">
            {{-- Sisi Kiri: Logo & Badge --}}
            <div class="flex items-center gap-4">
                <div class="bg-white p-2 rounded-lg shadow-sm border border-gray-100 group-hover:border-orange-200 transition">
                    <span class="text-orange-600 font-black italic text-xl">LOKET</span>
                    <span class="text-orange-400 text-xs block -mt-1 font-bold">Creator</span>
                </div>
                <span class="hidden md:block bg-orange-600 text-white px-4 py-1.5 rounded-full font-bold text-lg shadow-md group-hover:bg-orange-700 transition">
                    Biaya Komisi
                </span>
            </div>

            {{-- Sisi Tengah: Promo 1,2% --}}
            <div class="bg-blue-900 text-white px-6 py-2 rounded-lg transform -rotate-2 shadow-lg border-2 border-white group-hover:rotate-0 group-hover:scale-110 transition duration-300">
                <div class="text-3xl font-black">1,2%*</div>
                <div class="text-[10px] uppercase font-bold text-blue-200">Sudah termasuk PPN</div>
            </div>

            {{-- Sisi Kanan: Slogan & Link --}}
            <div class="text-right hidden sm:block">
                <div class="bg-orange-50 text-orange-600 border border-orange-500 px-3 py-1 rounded-md font-bold italic mb-1 text-xs">
                    Semua event creator
                </div>
                <div class="text-gray-800 font-black text-2xl tracking-tighter group-hover:text-blue-900 transition">
                    #PASTIBISA
                </div>
                <div class="text-[9px] text-gray-400 text-right mt-1 font-bold uppercase tracking-tighter">
                    *S&K Berlaku | hero.loket.com/pastibisa
                </div>
            </div>
        </div>

        {{-- Efek Kilauan (Overlay) saat di-hover --}}
        <div class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition duration-300 pointer-events-none"></div>
    </a>
</div>

    <div class="max-w-7xl mx-auto mt-12 px-4 mb-20">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-3">
                <h2 class="text-2xl font-extrabold text-blue-900">LOKET Screen</h2>
                <span class="bg-orange-500 text-white text-[10px] font-bold px-2 py-0.5 rounded shadow-sm">BARU</span>
            </div>
            <a href="#" class="text-blue-600 font-bold text-sm flex items-center gap-1 hover:underline">
                Lihat lebih banyak ❯
            </a>
        </div>

       <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        
        @php
        // 1. Ini adalah list gambar asli Anda (pastikan URL ini valid)
        $imagesFromDatabase = [
            "https://images.unsplash.com/photo-1536440136628-849c177e76a1?q=80&w=400", // Contoh 1
            "https://images.unsplash.com/photo-1594909122845-11baa439b7bf?q=80&w=400", // Contoh 2
            "https://images.unsplash.com/photo-1626814026160-2237a95fc5a0?q=80&w=400", // Contoh 3
            // List Anda hanya berisi 3, jadi kita butuh fallback untuk yang ke-4
        ];

        // 2. Ini adalah URL gambar cadangan (placeholder)
        $placeholderImageUrl = "https://images.unsplash.com/photo-1507874457470-272b3c8d8ee2?q=80&w=400"; // Contoh: Gunakan gambar konser atau poster film generik
        @endphp

        {{-- 3. Kita paksa loop berjalan 4 kali --}}
        @foreach(range(0, 3) as $i)
        <div class="group cursor-pointer">
            <div class="overflow-hidden rounded-xl shadow-lg transition-transform duration-300 group-hover:scale-105 border border-gray-200">
                
                {{-- 
                   4. PENYELAMAT: Cek apakah gambar asli ada di posisi $i. 
                   Jika ada, pakai itu. Jika tidak ada, pakai placeholder.
                --}}
                @php
                    $src = $imagesFromDatabase[$i] ?? $placeholderImageUrl;
                @endphp

                <img src="{{ $src }}" 
                     alt="Poster {{ $i+1 }}" 
                     class="w-full aspect-[2/3] object-cover">
            </div>
        </div>
        @endforeach

    </div>
</div>

<div class="bg-[#0f172a] py-10 mt-12 relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] w-screen overflow-hidden">
    
    <div class="w-full px-4 md:px-10"> 
        <h2 class="text-white text-2xl font-black italic uppercase tracking-tighter mb-8 ml-10">TOP EVENTS</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10">
            @php
            $topEvents = [
                ['img' => "https://images.unsplash.com/photo-1507874457470-272b3c8d8ee2?q=80&w=1000", 'slug' => 'afgan-retrospektif-2026'],
                ['img' => "https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=1000", 'slug' => 'event-keren-2'],
                ['img' => "https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?q=80&w=1000", 'slug' => 'event-keren-3']
            ];
            @endphp

            @foreach($topEvents as $index => $event)
            <a href="{{ route('eventsshow.create', ['slug' => $event['slug']]) }}" class="flex items-center group cursor-pointer px-2">
                
                <div class="text-7xl md:text-9xl font-black text-transparent shrink-0 -mr-6 md:-mr-10 z-10 transition-all duration-300 group-hover:scale-110" 
                     style="-webkit-text-stroke: 1.5px #475569; font-family: 'Arial Black', sans-serif; opacity: 0.6;">
                    {{ $index + 1 }}
                </div>

                <div class="flex-1 overflow-hidden rounded-xl border border-white/10 relative h-32 md:h-56">
                    <img src="{{ $event['img'] }}" 
                         class="w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0f172a] via-transparent to-transparent opacity-60"></div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
<div class="max-w-7xl mx-auto mt-12 px-4">
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
        <h2 class="text-xl font-black italic uppercase tracking-tighter mb-6 text-blue-900">Kategori Event</h2>
        
        <div class="grid grid-cols-3 md:grid-cols-9 gap-4 mb-8">
            @php
            $kategori = [
                ['name' => 'Festival & Pameran', 'color' => 'bg-orange-400', 'icon' => '🎡', 'slug' => 'festival'],
                ['name' => 'Konser', 'color' => 'bg-blue-500', 'icon' => '🎤', 'slug' => 'konser'],
                ['name' => 'Konferensi', 'color' => 'bg-yellow-500', 'icon' => '💼', 'slug' => 'konferensi'],
                ['name' => 'Workshop', 'color' => 'bg-pink-500', 'icon' => '🎨', 'slug' => 'workshop'],
                ['name' => 'Pertunjukan', 'color' => 'bg-orange-300', 'icon' => '🎭', 'slug' => 'pertunjukan'],
                ['name' => 'Atraksi', 'color' => 'bg-blue-400', 'icon' => '🎪', 'slug' => 'atraksi'],
                ['name' => 'Social Gathering', 'color' => 'bg-pink-400', 'icon' => '📷', 'slug' => 'gathering'],
                ['name' => 'Tur', 'color' => 'bg-yellow-400', 'icon' => '🗺️', 'slug' => 'tur'],
                ['name' => 'Turnamen', 'color' => 'bg-yellow-600', 'icon' => '🏆', 'slug' => 'turnamen'],
            ];
            @endphp

            @foreach($kategori as $kat)
            {{-- Bungkus dengan <a> --}}
            <a href="{{ route('jelajah.create', ['category' => $kat['slug']]) }}" class="text-center group cursor-pointer block">
                <div class="{{ $kat['color'] }} aspect-square rounded-xl flex items-center justify-center text-3xl mb-2 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 shadow-md">
                    {{ $kat['icon'] }}
                </div>
                <p class="text-[10px] font-black uppercase italic text-gray-500 leading-tight transition group-hover:text-blue-600">{{ $kat['name'] }}</p>
            </a>
            @endforeach
        </div>

        {{-- Tag Buttons --}}
        <div class="flex flex-wrap gap-3 justify-center">
            @foreach(['Keluarga & Anak', 'Bisnis & Keuangan', 'Media & Hiburan', 'Fashion & Kecantikan', 'Hobi & Gaya Hidup'] as $tag)
            <a href="{{ route('eventsshow.create', ['tag' => Str::slug($tag)]) }}" 
               class="px-4 py-2 border border-gray-200 rounded-full text-[10px] font-black uppercase italic text-gray-500 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition-all duration-300 flex items-center gap-2 shadow-sm">
                <span>✨</span> {{ $tag }}
            </a>
            @endforeach
        </div>
    </div>
</div>
<div class="bg-gray-50 w-full py-12 mt-12 overflow-hidden"> 
    
    <div class="bg-gray-50 w-full py-12 mt-12 overflow-hidden"> 
    
    <div class="max-w-7xl mx-auto px-4 relative group">
        <h2 class="text-2xl font-black italic uppercase tracking-tighter mb-6 text-blue-900">Healing Dulu Yuk!</h2>

        {{-- Tombol Navigasi Kiri --}}
        <button onclick="sideScroll('slider-healing', 'left')" 
                class="absolute -left-2 top-1/2 -translate-y-1/2 z-20 bg-white shadow-xl rounded-full p-2 hidden group-hover:flex items-center justify-center hover:bg-gray-50 transition border border-gray-100 w-10 h-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>

        <div id="slider-healing" 
             class="flex gap-6 overflow-x-auto scroll-smooth scrollbar-hide pb-4 px-1">
            
            {{-- LOOPING DINAMIS DARI DATABASE --}}
            @foreach($semuaEvent as $event)
            <a href="{{ route('eventsshow.show', $event->id) }}" 
               class="min-w-[280px] md:min-w-[350px] bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 block group/card">
                
                <div class="relative overflow-hidden">
                    {{-- Gambar dari Database --}}
                    <img src="{{ asset('storage/' . $event->gambar) }}" 
                         alt="{{ $event->judul_event }}"
                         class="w-full h-48 object-cover group-hover/card:scale-110 transition-transform duration-500">
                    
                    <div class="absolute bottom-3 left-3 bg-blue-600 text-white text-[8px] font-black uppercase px-2 py-1 rounded shadow-lg">
                        Healing
                    </div>
                </div>

                <div class="p-4">
                    {{-- Judul dari Database --}}
                    <h3 class="font-black text-sm text-gray-800 uppercase italic tracking-tight group-hover/card:text-blue-600 transition">
                        {{ $event->judul_event }}
                    </h3>
                    
                    {{-- Tanggal dari Database --}}
                    <p class="text-gray-400 text-[9px] mt-1 font-bold uppercase italic tracking-wider">
                        {{ \Carbon\Carbon::parse($event->tanggal)->format('d M Y') }}
                    </p>

                    {{-- Harga (Ganti 'harga' sesuai kolom di DB-mu, jika belum ada biarkan dummy) --}}
                    <p class="font-black text-blue-900 mt-2 text-lg italic tracking-tighter">
                        Rp {{ number_format($event->harga ?? 70000, 0, ',', '.') }}
                    </p>
                    
                    <div class="mt-4 flex items-center gap-2 border-t border-gray-50 pt-3">
                        <div class="w-5 h-5 rounded-full bg-blue-600 flex items-center justify-center text-[8px] text-white font-black">L</div>
                        <span class="text-[9px] text-gray-400 font-black uppercase tracking-widest italic">Official Partner</span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        {{-- Tombol Navigasi Kanan --}}
        <button onclick="sideScroll('slider-healing', 'right')" 
                class="absolute -right-2 top-1/2 -translate-y-1/2 z-20 bg-white shadow-xl rounded-full p-2 hidden group-hover:flex items-center justify-center hover:bg-gray-50 transition border border-gray-100 w-10 h-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>
</div>{{-- Script untuk Scroll Horizontal --}}
<script>
    function sideScroll(elementId, direction) {
        const container = document.getElementById(elementId);
        const scrollAmount = 320; // Lebar card + gap
        if (direction === 'left') {
            container.scrollLeft -= scrollAmount;
        } else {
            container.scrollLeft += scrollAmount;
        }
    }
</script>
<style>
    .scrollbar-hide::-webkit-scrollbar { display: none; }
    .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
</style>

{{-- 1. KREATOR FAVORIT --}}
<div class="max-w-7xl mx-auto mt-16 px-4 mb-24">
    <h2 class="text-2xl font-black italic uppercase tracking-tighter mb-8 text-blue-900">Kreator Favorit</h2>
    
    <div class="flex items-start gap-12 overflow-x-auto pb-6 scrollbar-hide">
        @php
        $kreators = [
            ['name' => 'Mantappu Academy', 'img' => 'https://images.unsplash.com/photo-1560179707-f14e90ef3623?q=80&w=100', 'slug' => 'mantappu'],
            ['name' => 'Ismaya Live', 'img' => 'https://images.unsplash.com/photo-1599305090598-fe179d501227?q=80&w=100', 'slug' => 'ismaya'],
            ['name' => 'PK Entertainment', 'img' => 'https://images.unsplash.com/photo-1549923746-c502d488b3ea?q=80&w=100', 'slug' => 'pk-ent'],
            ['name' => 'Dyandra Promosindo', 'img' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=100', 'slug' => 'dyandra'],
            ['name' => 'Ancol Official', 'img' => 'https://images.unsplash.com/photo-1599305090598-fe179d501227?q=80&w=100', 'slug' => 'ancol'],
        ];
        @endphp

        @foreach($kreators as $k)
        {{-- BUNGKUS DENGAN TAG <a> --}}
        <a href="{{ route('eventsshow.create', ['creator' => $k['slug']]) }}" class="min-w-[100px] flex flex-col items-center group cursor-pointer text-center">
            <div class="w-20 h-20 rounded-full bg-white border-4 border-gray-100 shadow-sm flex items-center justify-center overflow-hidden group-hover:border-blue-500 group-hover:shadow-md transition-all p-1 mb-3">
                <img src="{{ $k['img'] }}" alt="{{ $k['name'] }}" class="w-full h-full object-cover rounded-full">
            </div>
            <span class="text-[10px] font-black uppercase italic text-gray-700 leading-tight group-hover:text-blue-600 transition-colors">
                {{ $k['name'] }}
            </span>
        </a>
        @endforeach
    </div>
</div>
<div class="max-w-7xl mx-auto mt-12 px-4 relative group">
    
    @php
    if (!isset($workshops)) {
        $workshops = [
            ['title' => 'Certified International Supply Chain Professional', 'price' => 'Rp5.000.000', 'img' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=400', 'date' => '13 - 15 Apr 2026'],
            ['title' => 'High Performance Leadership Masterclass', 'price' => 'Rp2.500.000', 'img' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=400', 'date' => '14 Apr 2026'],
            ['title' => 'BRAND OWNER FORUM: Fashion Brand', 'price' => 'Rp99.000', 'img' => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?q=80&w=400', 'date' => '17 Apr 2026'],
            ['title' => 'Kelas Marketeers: Key Account Management', 'price' => 'Rp3.330.000', 'img' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=400', 'date' => '16 - 17 Apr 2026'],
            ['title' => 'WOW Brand 2026: Branding in AI Age', 'price' => 'Rp666.000', 'date' => '16 Apr 2026', 'img' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=400', 'org' => 'Marketeers'],

            ];
    }

    if (!isset($populer)) {
        $populer = [
            ['title' => 'High Performance Leadership: Leading Team', 'price' => 'Rp2.500.000', 'date' => '14 Apr 2026', 'img' => 'https://images.unsplash.com/photo-1515187029135-18ee286d815b?q=80&w=400', 'org' => 'Akselerasi Indonesia'],
            ['title' => 'Workshop Supply Chain (CISCP)', 'price' => 'Rp5.000.000', 'date' => '13 Apr 2026', 'img' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=400', 'org' => 'PT Husin Intelligence'],
            ['title' => 'Cerita Miskinku - Coming Soon', 'price' => 'Rp25.000', 'date' => '15 Apr 2026', 'img' => 'https://images.unsplash.com/photo-1485846234645-a62644f84728?q=80&w=400', 'org' => 'Standup Cinere'],
            ['title' => 'WOW Brand 2026: Branding in AI Age', 'price' => 'Rp666.000', 'date' => '16 Apr 2026', 'img' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=400', 'org' => 'Marketeers'],
         ['title' => 'WOW Brand 2026: Branding in AI Age', 'price' => 'Rp666.000', 'date' => '16 Apr 2026', 'img' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=400', 'org' => 'Marketeers'],

            ];
    }
@endphp

<style>
    .scrollbar-hide::-webkit-scrollbar { display: none; }
    .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
</style>
{{-- 1. SECTION WORKSHOP & PELATIHAN (DINAMIS) --}}
<div class="bg-white w-full py-12 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 relative group">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-black italic uppercase tracking-tighter text-blue-900">Workshop & Pelatihan</h2>
            <a href="{{ route('jelajah.create') }}" class="text-blue-600 font-black italic text-xs uppercase hover:underline flex items-center gap-1">Lihat semua ❯</a>
        </div>

        <button onclick="sideScroll('slider-ws', 'left')" class="absolute -left-2 top-1/2 -translate-y-1/2 z-20 bg-white shadow-xl rounded-full p-3 hidden group-hover:flex items-center justify-center border border-gray-100 w-12 h-12">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7" /></svg>
        </button>

        <div id="slider-ws" class="flex flex-nowrap gap-6 overflow-x-auto scroll-smooth scrollbar-hide pb-6 px-1">
            {{-- Mengambil data dari database $semuaEvent --}}
            @foreach($semuaEvent as $event)
            <a href="{{ route('eventsshow.show', $event->id) }}" class="min-w-[280px] md:min-w-[310px] bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 block group/card">
                <div class="relative overflow-hidden">
                    {{-- Gambar Dinamis --}}
                    <img src="{{ asset('storage/' . $event->gambar) }}" class="w-full h-40 object-cover group-hover/card:scale-110 transition-transform duration-500">
                </div>
                <div class="p-4">
                    <h3 class="font-black text-sm text-gray-800 uppercase italic tracking-tight line-clamp-2 h-10 group-hover/card:text-blue-600 transition">{{ $event->judul_event }}</h3>
                    <p class="text-gray-400 text-[9px] font-black uppercase italic my-2 tracking-wider">
                        {{ \Carbon\Carbon::parse($event->tanggal)->format('d M Y') }}
                    </p>
                     <p class="font-black text-blue-900 mt-2 text-lg italic tracking-tighter">
                        Rp {{ number_format($event->harga ?? 70000, 0, ',', '.') }}
                    </p>
                </div>
            </a>
            @endforeach
        </div>

        <button onclick="sideScroll('slider-ws', 'right')" class="absolute -right-2 top-1/2 -translate-y-1/2 z-20 bg-white shadow-xl rounded-full p-3 hidden group-hover:flex items-center justify-center border border-gray-100 w-12 h-12">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" /></svg>
        </button>
    </div>
</div>

{{-- 2. SECTION POPULER (DINAMIS) --}}
<div class="bg-gray-50 w-full py-12 mb-20 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 relative group">
        <h2 class="text-2xl font-black italic uppercase tracking-tighter text-blue-900 mb-6">Populer di <span class="text-blue-600">Jakarta ▾</span></h2>

        <button onclick="sideScroll('slider-pk', 'left')" class="absolute -left-2 top-1/2 -translate-y-1/2 z-20 bg-white shadow-xl rounded-full p-3 hidden group-hover:flex items-center justify-center border border-gray-100 w-12 h-12">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7" /></svg>
        </button>

        <div id="slider-pk" class="flex flex-nowrap gap-6 overflow-x-auto scroll-smooth scrollbar-hide pb-6 px-1">
            {{-- Mengambil data yang sama tapi bisa kamu filter/sort nanti --}}
            @foreach($semuaEvent->reverse() as $event)
            <a href="{{ route('eventsshow.show', $event->id) }}" class="min-w-[280px] md:min-w-[310px] bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 block group/card">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('storage/' . $event->gambar) }}" class="w-full h-40 object-cover group-hover/card:scale-110 transition-transform duration-500">
                </div>
                <div class="p-4">
                    <h3 class="font-black text-sm text-gray-800 uppercase italic tracking-tight line-clamp-2 h-10 group-hover/card:text-blue-600 transition">{{ $event->judul_event }}</h3>
                     <p class="font-black text-blue-900 mt-2 text-lg italic tracking-tighter">
                        Rp {{ number_format($event->harga ?? 70000, 0, ',', '.') }}
                    </p>
                    <div class="mt-2 text-[9px] font-black text-gray-400 uppercase italic tracking-widest border-t border-gray-50 pt-2">
                        {{ $event->lokasi ?? 'Jakarta' }}
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        <button onclick="sideScroll('slider-pk', 'right')" class="absolute -right-2 top-1/2 -translate-y-1/2 z-20 bg-white shadow-xl rounded-full p-3 hidden group-hover:flex items-center justify-center border border-gray-100 w-12 h-12">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" /></svg>
        </button>
    </div>
</div>

<div class="flex justify-center mt-4 mb-12">
    <a href="{{ route('jelajah.create')}}" class="inline-flex items-center gap-2 px-8 py-2.5 border-2 border-blue-500 text-blue-600 font-bold rounded-xl hover:bg-blue-50 transition-all text-sm group">
        Jelajah Lebih Banyak Event
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </a>
</div>
<script>
let index = 0;
const slides = document.getElementById("slides");
const totalSlides = slides.children.length;

function updateSlide() {
    slides.style.transform = `translateX(-${index * 100}%)`;
}

function nextSlide() {
    index = (index + 1) % totalSlides;
    updateSlide();
}

function prevSlide() {
    index = (index - 1 + totalSlides) % totalSlides;
    updateSlide();
}

// Otomatis jalan setiap 5 detik
setInterval(nextSlide, 5000);

// ===== LOGIK SLIDER FEATURED EVENTS (DIPERBAIKI) =====
let eventIndex = 0;
const eventSlides = document.getElementById("eventSlides");

function updateEvent() {
    const containerWidth = eventSlides.parentElement.offsetWidth;
    const totalWidth = eventSlides.scrollWidth;
    let moveDistance = eventIndex * (containerWidth / 2); // Geser setengah kontainer

    if (moveDistance > totalWidth - containerWidth) {
        moveDistance = totalWidth - containerWidth;
    }

    eventSlides.style.transform = `translateX(-${moveDistance}px)`;
}

function nextEvent() {
    const containerWidth = eventSlides.parentElement.offsetWidth;
    const totalWidth = eventSlides.scrollWidth;
    const currentTranslate = eventIndex * (containerWidth / 2);

    if (currentTranslate + containerWidth < totalWidth) {
        eventIndex++;
        updateEvent();
    }
}

function prevEvent() {
    if (eventIndex > 0) {
        eventIndex--;
        updateEvent();
    }
}
</script>
<script>
function sideScroll(elementId, direction) {
    const container = document.getElementById(elementId);
    const scrollAmount = 320; // Sesuaikan dengan lebar kartu + gap
    
    if (direction === 'left') {
        container.scrollLeft -= scrollAmount;
    } else {
        container.scrollLeft += scrollAmount;
    }
}
</script>
<script>
    function sideScroll(elementId, direction) {
        const container = document.getElementById(elementId);
        if (container) {
            const scrollAmount = 350; 
            direction === 'left' ? container.scrollLeft -= scrollAmount : container.scrollLeft += scrollAmount;
        }
    }
</script>
</x-app-layout>