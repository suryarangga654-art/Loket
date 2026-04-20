<x-app-layout>
    <style>
        [x-cloak] { display: none !important; }
        input::placeholder { color: #cbd5e1; font-size: 0.85rem; }
        .bottom-safe-zone { padding-bottom: 180px; }
        .swiper-button-next, .swiper-button-prev {
            background-color: white !important;
            width: 35px !important;
            height: 35px !important;
            border-radius: 50% !important;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
        }
        .swiper-button-next:after, .swiper-button-prev:after { font-size: 14px !important; font-weight: bold !important; }
        .sk-scroll::-webkit-scrollbar { width: 4px; }
        .sk-scroll::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
    </style>

    <div class="bg-gray-100 min-h-screen flex flex-col" x-data="{ view: 'detail', selectedQty: 0, showSummary: false, agreed: false }">

        {{-- NAVBAR --}}
        <nav class="bg-blue-900 text-white sticky top-0 z-[100] shadow-md">
            <div class="border-b border-blue-800">
                <div class="max-w-7xl mx-auto px-4 flex items-center justify-end gap-6 py-1.5 text-[10px] md:text-xs">
                    <a href="#" class="hover:text-blue-300 transition">Mulai Jadi Event Creator</a>
                    <a href="#" class="hover:text-blue-300 transition text-orange-400 font-bold tracking-tight">Pusat Bantuan</a>
                    <div class="flex items-center gap-1 cursor-pointer hover:text-blue-300 transition">
                        <span>🇮🇩</span> <span>ID</span>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </div>
                </div>
            </div>
            <div class="max-w-7xl mx-auto px-4 py-3 flex items-center gap-6">
                <a href="/" class="flex items-center gap-1 shrink-0">
                    <span class="text-2xl font-black italic tracking-tight uppercase">LOKET</span>
                    <div class="flex flex-col leading-none ml-1">
                        <span class="text-orange-400 font-black text-2xl leading-none">12</span>
                        <span class="text-[10px] font-semibold text-blue-200 leading-none uppercase">Tahun</span>
                    </div>
                </a>
                <div class="flex-1 relative">
                    <input type="text" placeholder="Cari event seru di sini" class="w-full px-4 py-2.5 rounded-lg text-black text-sm border-0 focus:ring-2 focus:ring-blue-400 shadow-inner">
                    <button class="absolute right-0 top-0 h-full px-4 bg-blue-600 hover:bg-blue-500 rounded-r-lg transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </button>
                </div>
            </div>
        </nav>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <main class="flex-grow">
            
            {{-- VIEW 1: DETAIL EVENT --}}
            <div x-show="view === 'detail'" x-transition:enter="transition duration-300">
                <div class="bg-[#1a1d23] text-white py-12">
                    <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row gap-8 items-center">
                        <div class="w-full md:w-1/3 hidden md:block">
                            <img src="https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?q=80&w=600" class="rounded-xl shadow-2xl border border-gray-700">
                        </div>
                        <div class="flex-1 text-center md:text-left">
                            <h1 class="text-3xl font-bold mb-4 uppercase tracking-tight">Afgan - retrospektif The Concert 2026</h1>
                            <div class="space-y-2 text-gray-300 text-sm">
                                <p>📍 Planary Hall JCC, Senayan, DKI Jakarta</p>
                                <p>📅 18 Jul 2026, 13:00 - 22:00 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="max-w-7xl mx-auto px-4 py-8">
                    <div class="flex flex-col md:flex-row gap-8">
                        <div class="w-full md:w-2/3 space-y-8">
                            {{-- TABS --}}
                            <div class="flex border-b border-gray-200 bg-white rounded-t-xl overflow-hidden shadow-sm">
                                <button class="px-6 py-4 text-blue-600 font-bold border-b-2 border-blue-600 text-sm italic">Deskripsi</button>
                                <button @click="view = 'tiket'; window.scrollTo(0,0)" class="px-6 py-4 text-gray-400 font-bold text-sm">Tiket</button>
                            </div>

                            {{-- SEAT PLAN --}}
                            <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                                <h2 class="text-xl font-black mb-4 uppercase italic tracking-tighter">Seat Plan</h2>
                                <img src="https://images.unsplash.com/photo-1540039155733-5bb30b53aa14?q=80&w=800" class="w-full rounded-lg border border-gray-100">
                            </div>

                            {{-- SYARAT & KETENTUAN --}}
                            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                                <div class="p-6 border-b border-gray-100 flex items-center gap-2">
                                    <span class="text-xl">📋</span>
                                    <h2 class="text-xl font-black italic uppercase tracking-tighter">Syarat dan Ketentuan</h2>
                                </div>
                                <div class="p-8 text-[12px] text-gray-600 space-y-4 font-medium leading-relaxed">
                                    <p class="font-bold text-slate-800 uppercase italic">Syarat & Ketentuan Penonton</p>
                                    <ul class="list-decimal pl-5 space-y-3">
                                        <li>Setiap pembelian tiket berlaku untuk 1 (satu) orang.</li>
                                        <li>Pembelian maksimal 5 tiket per transaksi untuk kategori yang sama.</li>
                                        <li>E-tiket akan dikirimkan ke email terdaftar setelah pembayaran berhasil.</li>
                                        <li>Pengunjung wajib membawa identitas asli (KTP/SIM/Paspor) saat penukaran tiket.</li>
                                        <li>Tiket yang sudah dibeli tidak dapat dikembalikan (Non-Refundable).</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        {{-- SIDEBAR HARGA --}}
                        <div class="w-full md:w-1/3">
                            <div class="sticky top-24 bg-white rounded-2xl shadow-xl border border-gray-100 p-6 text-center">
                                <p class="text-gray-400 text-[10px] font-black uppercase mb-1 tracking-widest">Harga mulai dari</p>
                                <h3 class="text-2xl font-black text-blue-900 mb-6 tracking-tighter">Rp600.000</h3>
                                <button @click="view = 'tiket'; window.scrollTo(0,0)" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-4 rounded-xl font-black text-lg uppercase italic transition shadow-lg">Beli Tiket</button>
                            </div>
                        </div>
                    </div>

                    {{-- GAMBAR SLIDER (DITARUH DI PALING BAWAH HALAMAN DETAIL) --}}
                    <div class="mt-16 relative">
                        <h2 class="text-xl font-black italic uppercase tracking-tighter text-slate-800 mb-6">Event Rekomendasi Untuk Kamu</h2>
                        <div class="swiper mySwiper relative px-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-xl border border-gray-100 overflow-hidden shadow-sm h-full group">
                                        <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?q=80&w=400" class="w-full h-40 object-cover group-hover:scale-105 transition duration-500">
                                        <div class="p-4"><h4 class="font-black text-[10px] uppercase italic h-8">Festival Musik Jakarta</h4><p class="text-blue-700 font-black text-xs mt-1">Rp450.000</p></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-xl border border-gray-100 overflow-hidden shadow-sm h-full group">
                                        <img src="https://images.unsplash.com/photo-1493225255756-d9584f8606e9?q=80&w=400" class="w-full h-40 object-cover group-hover:scale-105 transition duration-500">
                                        <div class="p-4"><h4 class="font-black text-[10px] uppercase italic h-8">Stand Up Comedy Show</h4><p class="text-blue-700 font-black text-xs mt-1">Rp200.000</p></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-xl border border-gray-100 overflow-hidden shadow-sm h-full group">
                                        <img src="https://images.unsplash.com/photo-1459749411177-042180ce673c?q=80&w=400" class="w-full h-40 object-cover group-hover:scale-105 transition duration-500">
                                        <div class="p-4"><h4 class="font-black text-[10px] uppercase italic h-8">International Rock Fest</h4><p class="text-blue-700 font-black text-xs mt-1">Rp800.000</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- VIEW 2: PILIH TIKET --}}
            <div x-show="view === 'tiket'" x-cloak class="bottom-safe-zone" x-transition:enter="transition duration-300">
                <div class="flex flex-col md:flex-row min-h-screen bg-white">
                    <div class="w-full md:w-[60%] p-6 md:p-12">
                        <button @click="view = 'detail'; selectedQty = 0; showSummary = false" class="text-blue-600 text-sm font-bold mb-8 flex items-center gap-2">← Kembali</button>
                        <h1 class="text-2xl font-black italic uppercase text-slate-900 mb-8 tracking-tighter">Pilih Tiket</h1>
                        <div class="space-y-4">
                            @foreach(['Regular - Diamond', 'Regular - VIP Center A', 'Regular - Bronze'] as $name)
                            <div class="border-2 border-gray-100 rounded-xl p-5 flex justify-between items-center group hover:border-orange-400 transition" x-data="{ itemQty: 0 }">
                                <div><h3 class="font-black italic uppercase text-xs text-slate-700">{{ $name }}</h3><p class="text-lg font-black text-slate-900">Rp600.000</p></div>
                                <select x-model="itemQty" @change="selectedQty = itemQty; showSummary = itemQty > 0" class="border-2 border-blue-600 text-blue-600 px-4 py-2 rounded-lg font-black text-xs cursor-pointer focus:ring-0">
                                    <option value="0">PILIH</option>
                                    <option value="1">1</option><option value="2">2</option><option value="3">3</option>
                                </select>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="hidden md:block md:w-[40%] bg-black relative">
                        <img src="https://images.unsplash.com/photo-1507874457470-272b3c8d8ee2?q=80&w=1000" class="absolute inset-0 w-full h-full object-cover opacity-30 blur-sm">
                    </div>
                </div>
            </div>

            {{-- VIEW 3: DETAIL PESANAN (CHECKOUT) --}}
            <div x-show="view === 'checkout'" x-cloak x-transition:enter="transition duration-300">
                <div class="max-w-7xl mx-auto px-4 py-8">
                    <div class="mb-6">
                        <button @click="view = 'tiket'" class="text-blue-600 text-xs font-bold flex items-center gap-2 mb-2">← Kembali</button>
                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Langkah 2 dari 3 • <span class="text-slate-900">Detail Pesanan</span></p>
                    </div>
                    
                    <div class="flex flex-col lg:flex-row gap-8">
                        <div class="flex-1 space-y-8">
                            <h1 class="text-2xl font-black italic uppercase text-slate-900 tracking-tighter">Afgan - retrospektif The Concert 2026</h1>
                            
                            {{-- Form --}}
                            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                                <div class="bg-gray-50/50 px-6 py-4 border-b border-gray-100"><h2 class="font-black italic uppercase text-xs text-slate-800 tracking-tight">Data Diri Pengunjung</h2></div>
                                <div class="p-8">
                                    <h3 class="font-black italic uppercase text-sm text-slate-900 mb-6 border-l-4 border-orange-500 pl-3">Regular - Bronze</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div class="space-y-1.5"><label class="text-[10px] font-black uppercase text-slate-700">Nama Lengkap*</label><input type="text" placeholder="M Faizal" class="w-full border-gray-200 rounded-lg text-sm py-2.5"></div>
                                        <div class="space-y-1.5"><label class="text-[10px] font-black uppercase text-slate-700">Email*</label><input type="email" placeholder="faizal@email.com" class="w-full border-gray-200 rounded-lg text-sm py-2.5"></div>
                                        <div class="space-y-1.5"><label class="text-[10px] font-black uppercase text-slate-700">No. Handphone*</label><input type="text" class="w-full border-gray-200 rounded-lg text-sm py-2.5"></div>
                                        <div class="space-y-1.5"><label class="text-[10px] font-black uppercase text-slate-700">Nomor Identitas (KTP)*</label><input type="text" class="w-full border-gray-200 rounded-lg text-sm py-2.5"></div>
                                    </div>
                                </div>
                            </div>

                            {{-- SYARAT DAN KETENTUAN (CHECKOUT) --}}
                            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                                <div class="bg-gray-50/50 px-6 py-4 border-b border-gray-100 flex items-center gap-2">
                                    <span class="text-sm">📋</span>
                                    <h2 class="font-black italic uppercase text-xs text-slate-800 tracking-tighter">Persetujuan Syarat dan Ketentuan</h2>
                                </div>
                                <div class="p-8">
                                    <div class="sk-scroll h-48 overflow-y-auto pr-4 text-[11px] text-gray-500 font-medium space-y-4 leading-relaxed">
                                        <p>Harap baca syarat dan ketentuan berikut sebelum menyelesaikan pesanan Anda:</p>
                                        <div class="space-y-2">
                                            <p class="font-black text-slate-800 uppercase italic">1. Ketentuan Tiket</p>
                                            <p>E-tiket akan dikirimkan melalui email yang Anda daftarkan setelah pembayaran terverifikasi.</p>
                                        </div>
                                        <div class="space-y-2">
                                            <p class="font-black text-slate-800 uppercase italic">2. Kebijakan Refund</p>
                                            <p>Tiket tidak dapat di-refund atau dipindahtangankan tanpa izin resmi penyelenggara.</p>
                                        </div>
                                        <div class="space-y-2">
                                            <p class="font-black text-slate-800 uppercase italic">3. Tata Tertib</p>
                                            <p>Dilarang membawa barang berbahaya ke dalam venue. Penyelenggara berhak mengeluarkan pengunjung yang melanggar aturan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Sidebar Ringkasan --}}
                        <div class="w-full lg:w-[380px] space-y-4">
                            <div class="bg-yellow-400 rounded-xl p-3 flex justify-between items-center shadow-sm">
                                <span class="text-xl font-black italic tracking-tighter">13:31</span>
                                <span class="text-[10px] font-black uppercase italic text-slate-800 tracking-tight">Waktu tersisa</span>
                            </div>
                            <div class="bg-white rounded-2xl border border-gray-100 shadow-xl overflow-hidden">
                                <div class="p-6 border-b border-gray-50">
                                    <h2 class="font-black italic uppercase text-xs text-slate-900 mb-6">Ringkasan Pesanan</h2>
                                    <div class="space-y-4 text-[11px]">
                                        <div class="flex justify-between">
                                            <div><p class="font-black uppercase italic text-slate-700">Regular - Bronze</p><p class="text-gray-400">Rp 600.000 x 1</p></div>
                                            <p class="font-black text-slate-900">Rp 600.000</p>
                                        </div>
                                        <div class="pt-4 border-t border-dashed border-gray-200 space-y-2">
                                            <div class="flex justify-between"><span>Subtotal</span><span class="font-black">Rp 600.000</span></div>
                                            <div class="flex justify-between"><span>Pajak & Biaya</span><span class="font-black">Rp 86.680</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-6 bg-gray-50/50">
                                    <div class="flex justify-between items-center mb-6">
                                        <p class="text-sm font-black italic uppercase text-slate-900">Grand Total</p>
                                        <p class="text-lg font-black text-slate-900 tracking-tighter">Rp 686.680</p>
                                    </div>
                                    <label class="flex items-start gap-3 cursor-pointer mb-6">
                                        <input type="checkbox" x-model="agreed" class="mt-1 text-blue-600 rounded border-gray-300">
                                        <p class="text-[9px] font-bold text-gray-500">Saya menyetujui <span class="text-blue-600 underline">Syarat & Ketentuan</span> yang berlaku.</p>
                                    </label>
                                    <button :disabled="!agreed" class="w-full py-4 rounded-xl font-black text-lg uppercase italic bg-blue-900 text-white shadow-lg disabled:bg-gray-200 disabled:text-gray-400 transition-all">Bayar Sekarang</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        {{-- STICKY BOTTOM BAR --}}
        <div x-show="showSummary && view === 'tiket'" x-transition:enter="transition transform duration-300" x-transition:enter-start="translate-y-full" x-transition:enter-end="translate-y-0" class="fixed bottom-0 left-0 right-0 bg-white border-t-4 border-yellow-400 z-50 shadow-2xl" x-cloak>
            <div class="bg-yellow-400 py-2 px-6 flex items-center gap-4 text-xs font-bold">
                <span class="font-black tracking-tighter text-sm">14:10</span> <span class="uppercase italic">Waktu pemesanan tersisa</span>
            </div>
            <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
                <div class="flex flex-col">
                    <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest leading-none mb-1">Subtotal (<span x-text="selectedQty"></span> tiket)</p>
                    <div class="flex items-center gap-2">
                        <p class="text-xl font-black text-slate-900 tracking-tighter">Rp600.000</p>
                        <button class="text-blue-600 text-[10px] font-bold italic uppercase">Lihat Detil ▲</button>
                    </div>
                </div>
                <button @click="view = 'checkout'; window.scrollTo(0,0)" class="bg-blue-700 hover:bg-blue-800 text-white px-10 py-3.5 rounded-xl font-black text-lg uppercase italic shadow-lg transition active:scale-95">
                    Pesan Sekarang
                </button>
            </div>
        </div>

        <footer x-show="view !== 'checkout'" class="bg-[#000a14] text-white pt-16 pb-8 mt-20">
            <div class="max-w-7xl mx-auto px-4 flex justify-between items-center border-t border-slate-800 pt-8">
                <h2 class="text-xl font-black italic uppercase">LOKÉT<span class="text-orange-500">+</span>PLUS</h2>
                <p class="text-slate-500 text-[10px] font-black uppercase">© 2026 LOKÉT Plus Global</p>
            </div>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Swiper(".mySwiper", {
                slidesPerView: 1.2, spaceBetween: 20,
                autoplay: { delay: 3500 },
                navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
                breakpoints: { 640: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } },
            });
        });
    </script>
</x-app-layout>