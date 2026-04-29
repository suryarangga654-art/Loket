<x-app-layout>
    <style>
        [x-cloak] { display: none !important; }
        .bottom-safe-zone { padding-bottom: 120px; }
        .sk-scroll::-webkit-scrollbar { width: 4px; }
        .sk-scroll::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
    </style>

    {{-- Root Alpine.js --}}
    <div class="bg-gray-100 min-h-screen flex flex-col" x-data="{ view: 'detail', selectedQty: 0, showSummary: false, agreed: false }">

        {{-- NAVBAR --}}
        <nav class="bg-blue-900 text-white sticky top-0 z-[100] shadow-md">
            <div class="max-w-7xl mx-auto px-4 py-3 flex items-center gap-6">
                <a href="/" class="flex items-center gap-1 shrink-0">
                    <span class="text-2xl font-black italic tracking-tight uppercase">LOKET</span>
                </a>
                <div class="flex-1 relative">
                    <input type="text" placeholder="Cari event seru di sini" class="w-full px-4 py-2.5 rounded-lg text-black text-sm border-0 focus:ring-2 focus:ring-blue-400">
                </div>
            </div>
        </nav>

        <main class="flex-grow">
                                @if(session('success'))
                    <div x-data="{ show: true }" x-show="show" class="max-w-7xl mx-auto px-4 mt-6">
                        <div class="bg-green-600 text-white p-6 rounded-2xl shadow-2xl flex items-center justify-between border-b-4 border-green-800 animate-bounce">
                            <div class="flex items-center gap-3">
                                <span class="text-2xl">🎉</span>
                                <div>
                                    <p class="font-black uppercase italic">Berhasil!</p>
                                    <p class="text-sm font-bold text-green-100">{{ session('success') }}</p>
                                </div>
                            </div>
                            <button @click="show = false" class="bg-green-700 hover:bg-green-800 px-4 py-2 rounded-lg font-black">OKE</button>
                        </div>
                    </div>
                    @endif
            {{-- ========================================== --}}
            {{-- VIEW 1: DETAIL EVENT                       --}}
            {{-- ========================================== --}}
            <div x-show="view === 'detail'" x-transition:enter="transition duration-300">
                <div class="bg-[#1a1d23] text-white py-12">
                    <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row gap-8 items-center">
                        <div class="w-full md:w-1/3">
                            <img src="{{ $event->gambar ? asset('storage/' . $event->gambar) : 'https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?q=80&w=600' }}" class="rounded-lg shadow-2xl w-full h-64 object-cover">
                        </div>
                        <div class="flex-1 text-center md:text-left">
                            <h1 class="text-3xl font-bold mb-4 uppercase tracking-tight">
                                {{ $event->judul_event ?? 'Judul Event' }}
                            </h1>
                            <div class="space-y-2 text-gray-300 text-sm font-medium">
                                <p>📍 {{ $event->lokasi ?? 'Lokasi Belum Ditentukan' }}</p>
                                <p>📅 {{ $event->waktu_acara ? \Carbon\Carbon::parse($event->waktu_acara)->format('d M Y, H:i') : 'Waktu Belum Ditentukan' }} WIB</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="max-w-7xl mx-auto px-4 py-8">
                    <div class="flex flex-col md:flex-row gap-8">
                        {{-- KONTEN KIRI --}}
                        <div class="w-full md:w-2/3 space-y-8">
                            <div class="flex border-b border-gray-200 bg-white rounded-t-xl overflow-hidden shadow-sm">
                                <button class="px-6 py-4 text-blue-600 font-bold border-b-2 border-blue-600 text-sm italic">Deskripsi</button>
                                <button @click="view = 'tiket'; window.scrollTo(0,0)" class="px-6 py-4 text-gray-400 font-bold text-sm hover:text-blue-600 transition">Tiket</button>
                            </div>

                            <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                                <h2 class="text-xl font-black mb-4 uppercase italic tracking-tighter">Deskripsi Event</h2>
                                <p class="text-slate-600 leading-relaxed">{{ $event->deskripsi ?? 'Tidak ada deskripsi event ini.' }}</p>
                            </div>

                            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden p-8">
                                <h2 class="text-xl font-black mb-4 uppercase italic tracking-tighter">Syarat & Ketentuan</h2>
                                <div class="text-sm text-gray-600 leading-relaxed">
                                    {{-- nl2br untuk menjaga baris baru/enter dari database --}}
                                    {!! nl2br(e($event->syarat_ketentuan ?? "1. Tiket berlaku untuk 1 orang.\n2. Tiket tidak dapat di-refund.")) !!}
                                </div>
                            </div>
                        </div>

                        {{-- SIDEBAR HARGA --}}
                        <div class="w-full md:w-1/3">
                            <div class="sticky top-24 bg-white rounded-2xl shadow-xl border border-gray-100 p-6 text-center">
                                <p class="text-gray-400 text-[10px] font-black uppercase mb-1 tracking-widest">Harga mulai dari</p>
                                <h3 class="text-2xl font-black text-blue-900 mb-6 tracking-tighter">
                                    @if($tickets->count() > 0)
                                        Rp{{ number_format($tickets->min('harga'), 0, ',', '.') }}
                                    @else
                                        Gratis / Belum Tersedia
                                    @endif
                                </h3>
                                <button @click="view = 'tiket'; window.scrollTo(0,0)" 
                                        class="w-full bg-blue-600 hover:bg-blue-700 text-white py-4 rounded-xl font-black text-lg uppercase italic transition shadow-lg">
                                    Beli Tiket
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ========================================== --}}
            {{-- VIEW 2: PILIH TIKET                       --}}
            {{-- ========================================== --}}
            <div x-show="view === 'tiket'" x-cloak class="bottom-safe-zone" x-transition:enter="transition duration-300">
                <div class="flex flex-col md:flex-row min-h-screen bg-white">
                    {{-- List Tiket --}}
                    <div class="w-full md:w-[60%] p-6 md:p-12">
                        <button @click="view = 'detail'; selectedQty = 0; showSummary = false" class="text-blue-600 text-sm font-bold mb-8 flex items-center gap-2 hover:underline">← Kembali ke Detail</button>
                        <h1 class="text-3xl font-black italic uppercase text-slate-900 mb-8 tracking-tighter">Pilih Tiket</h1>
                        
                        <div class="space-y-4">
                            @forelse($tickets as $ticket)
                            <div class="border-2 border-gray-100 rounded-xl p-5 flex justify-between items-center group hover:border-orange-400 transition" x-data="{ itemQty: 0 }">
                                <div>
                                    <h3 class="font-black italic uppercase text-sm text-slate-700">{{ $ticket->nama_tiket }}</h3>
                                    <p class="text-xl font-black text-slate-900">Rp{{ number_format($ticket->harga, 0, ',', '.') }}</p>
                                    <p class="text-[10px] text-gray-400 mt-1 font-bold uppercase">Stok: {{ $ticket->stok }}</p>
                                </div>
                                
                                <select x-model="itemQty" @change="selectedQty = parseInt(itemQty); showSummary = (selectedQty > 0)" 
                                        class="border-2 border-blue-600 text-blue-600 px-6 py-2 rounded-lg font-black text-sm cursor-pointer focus:ring-0">
                                    <option value="0">PILIH</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            @empty
                            <div class="p-12 text-center bg-gray-50 rounded-2xl border-2 border-dashed border-gray-200">
                                <p class="text-gray-500 font-bold italic">Maaf, tiket belum tersedia untuk event ini.</p>
                            </div>
                            @endforelse
                        </div>
                    </div>

                    {{-- Ringkasan Samping --}}
                    <div class="hidden md:block w-[40%] bg-gray-50 p-12 border-l border-gray-100">
                        <div class="sticky top-12">
                            <h2 class="text-xl font-black italic uppercase text-slate-900 mb-6 tracking-tighter">Detail Event</h2>
                            <div class="flex gap-4">
                                <img src="{{ $event->gambar ? asset('storage/' . $event->gambar) : 'https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?q=80&w=200' }}" class="w-24 h-24 object-cover rounded-lg shadow-md">
                                <div>
                                    <h3 class="font-bold text-slate-900 leading-tight">{{ $event->judul_event }}</h3>
                                    <p class="text-xs text-gray-500 mt-1">📍 {{ $event->lokasi }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ========================================== --}}
            {{-- VIEW 3: CHECKOUT                          --}}
            {{-- ========================================== --}}
           {{-- ========================================== --}}
{{-- VIEW 3: CHECKOUT                          --}}
{{-- ========================================== --}}
<div x-show="view === 'checkout'" x-cloak x-transition:enter="transition duration-300">
    <div class="max-w-7xl mx-auto px-4 py-12">
        <button @click="view = 'tiket'" class="text-blue-600 font-bold mb-6 hover:underline">← Kembali ke Pemilihan Tiket</button>
        
        <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
            {{-- FORM START --}}
            <form action="{{ route('transaksi.store') }}" method="POST">
                @csrf
                
                {{-- Input Hidden (Data Otomatis dari Alpine.js) --}}
                <input type="hidden" name="qty" :value="selectedQty">
                <input type="hidden" name="total" :value="selectedQty * {{ $tickets->min('harga') ?? 0 }}">

                <h1 class="text-2xl font-black uppercase italic mb-8 border-b pb-4">Isi Data Diri</h1>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    {{-- Bagian Input User --}}
                    <div class="space-y-4">
                        <div>
                            <label class="text-xs font-bold uppercase text-gray-500">Nama Lengkap*</label>
                            <input type="text" name="nama_lengkap" required placeholder="Contoh: M Faizal" 
                                   class="w-full border-gray-200 rounded-lg p-3 mt-1 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="text-xs font-bold uppercase text-gray-500">Email*</label>
                            <input type="email" name="email" required placeholder="faizal@example.com" 
                                   class="w-full border-gray-200 rounded-lg p-3 mt-1 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>

                    {{-- Ringkasan & Tombol Submit --}}
                    <div class="bg-blue-50 p-6 rounded-xl border border-blue-100">
                        <h4 class="font-black italic uppercase text-blue-900 mb-4">Ringkasan Pembayaran</h4>
                        
                        <div class="space-y-2 mb-6">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">Jumlah Tiket</span>
                                <span class="font-bold text-slate-800" x-text="selectedQty + ' Tiket'"></span>
                            </div>
                            <div class="flex justify-between font-black text-xl pt-2 border-t border-blue-200">
                                <span class="text-slate-900 italic">TOTAL TAGIHAN</span>
                                <span class="text-blue-600">
                                    Rp<span x-text="(selectedQty * {{ $tickets->min('harga') ?? 0 }}).toLocaleString('id-ID')"></span>
                                </span>
                            </div>
                        </div>

                        {{-- Tombol Bayar Sekarang --}}
                        <button type="submit" class="w-full bg-blue-900 hover:bg-blue-800 text-white font-black uppercase italic py-4 rounded-xl shadow-lg transition active:scale-95">
                            Bayar Sekarang
                        </button>
                    </div>
                </div>
            </form>
            {{-- FORM END --}}
        </div>
    </div>
</div>

        </main>

        {{-- STICKY BOTTOM BAR (MUNCUL JIKA TIKET DIPILIH) --}}
       <div x-show="showSummary && view === 'tiket'" 
     x-transition:enter="transition transform duration-300" 
     x-transition:enter-start="translate-y-full" 
     x-transition:enter-end="translate-y-0" 
     class="fixed bottom-0 left-0 right-0 bg-white border-t-4 border-yellow-400 z-50 shadow-2xl" x-cloak>
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <div class="flex flex-col">
            {{-- Menampilkan Jumlah Tiket --}}
            <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest leading-none mb-1">
                Total Tiket: <span x-text="selectedQty" class="text-blue-600"></span>
            </p>
            
            {{-- Menampilkan Total Harga (Otomatis Hitung) --}}
            <div class="flex items-center gap-2">
                <p class="text-2xl font-black text-slate-900 tracking-tighter">
                    Rp<span x-text="(selectedQty * {{ $tickets->min('harga') ?? 0 }}).toLocaleString('id-ID')"></span>
                </p>
                <span class="text-[10px] font-bold text-gray-400 uppercase italic mt-1">Estimasi</span>
            </div>
        </div>

        <button @click="view = 'checkout'; window.scrollTo(0,0)" 
                class="bg-blue-700 hover:bg-blue-800 text-white px-10 py-3.5 rounded-xl font-black text-lg uppercase italic shadow-lg transition active:scale-95 flex items-center gap-2">
            <span>Pesan Sekarang</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>
</div>

    </div>
</x-app-layout>