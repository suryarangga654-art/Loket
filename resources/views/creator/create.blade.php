<x-app-layout>
   <div class="bg-gray-100 min-h-screen pb-20">

        {{-- ========================================= --}}
        {{-- HALAMAN CREATOR (LANGSUNG MUNCUL / BLOCK) --}}
        {{-- ========================================= --}}
        <div id="page-creator" class="block"> {{-- <-- Ini sudah saya ganti ke block agar langsung terlihat --}}
            <div class="relative w-full bg-[#f4f7fa] overflow-hidden min-h-screen">
                
                {{-- Ilustrasi Background (Persis Foto 3) --}}
                <div class="absolute inset-0 z-0 pointer-events-none">
                    {{-- Tangan Kiri (Mic & Lampu) --}}
                    <img src="https://images.unsplash.com/photo-1507874457470-272b3c8d8ee2?q=80&w=1200" class="absolute left-0 top-10 w-[22%] opacity-90">
                    {{-- Tangan Kanan (Bola & HP) --}}
                    <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=1200"  class="absolute right-0 top-10 w-[22%] opacity-90">
                    {{-- Laptop Kiri Bawah --}}
                                        <img src="https://images.unsplash.com/photo-1506157786151-b8491531f063?q=80&w=1200" class="absolute left-0 bottom-10 w-[30%] opacity-95">
                </div>

                {{-- Konten Utama Tengah --}}
                <div class="relative z-10 max-w-7xl mx-auto px-4 py-16 flex flex-col items-center text-center">
                    {{-- Logo Loket Creator Orange --}}
                    <img src="https://hero.loket.com/images/loket_creator_logo.svg" class="h-16 mb-8 drop-shadow-sm" alt="Logo">
                    
                    {{-- Headline --}}
                    <h1 class="text-[#1a2b4b] text-6xl font-[1000] mb-2 leading-none tracking-tight">
                        Hi, <span class="italic font-serif font-light text-[#1a2b4b]/80">EVENT CREATOR!</span>
                    </h1>
                    
                    <div class="text-5xl font-[1000] text-[#1a2b4b] mb-4 tracking-tight">
                        Mau bikin <span class="text-[#ff7a00]">acara keagamaan?</span>
                    </div>

                    <p class="text-2xl font-bold text-[#1a2b4b] mb-12">
                        LOKÉT siap jadi <span class="text-blue-600">#SolusiEvent</span> kamu
                    </p>

                    {{-- 2 Card Statistik (Sesuai Foto 3) --}}
                    <div class="flex flex-col md:flex-row gap-8 mb-12 w-full max-w-4xl justify-center px-4">
                        {{-- Card 1 --}}
                        <div class="bg-white p-10 rounded-[45px] shadow-[0_20px_50px_rgba(0,0,0,0.1)] flex-1 border border-white transform hover:-translate-y-1 transition duration-300">
                            <p class="text-gray-400 font-bold text-xs uppercase mb-5 tracking-[0.2em]">Dipercaya oleh</p>
                            <div class="flex items-center justify-center gap-4 mb-3 text-[#1a2b4b]">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM6 8a2 2 0 11-4 0 2 2 0 014 0zM11 18l-2-1V8l2 1v9z"></path></svg>
                                <span class="text-5xl font-[1000] tracking-tighter">30.000+</span>
                            </div>
                            <p class="text-[#1a2b4b] font-extrabold text-lg leading-snug px-4">Event Creators di seluruh Indonesia!</p>
                        </div>

                        {{-- Card 2 --}}
                        <div class="bg-white p-10 rounded-[45px] shadow-[0_20px_50px_rgba(0,0,0,0.1)] flex-1 border border-white transform hover:-translate-y-1 transition duration-300">
                            <p class="text-gray-400 font-bold text-xs uppercase mb-5 tracking-[0.2em]">Mendukung</p>
                            <div class="flex items-center justify-center gap-4 mb-3 text-[#1a2b4b]">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <span class="text-5xl font-[1000] tracking-tighter">60.000+</span>
                            </div>
                            <p class="text-[#1a2b4b] font-extrabold text-lg leading-snug px-4">Event di Indonesia</p>
                        </div>
                    </div>

                    {{-- Tombol Biru Utama --}}
                    <button class="bg-[#0049cc] hover:bg-blue-800 text-white font-[1000] py-4.5 px-16 rounded-xl text-lg transition-all shadow-[0_10px_30px_rgba(0,73,204,0.3)] hover:scale-105 active:scale-95">
                        Buat Event Sekarang, Pelajari Caranya!
                    </button>
                </div>

                {{-- Floating Button Kanan Bawah --}}
                <div class="fixed bottom-8 right-8 z-50 flex flex-col items-end group">
                    <div class="bg-white px-3 py-1.5 rounded-lg shadow-2xl mb-3 text-[10px] font-black text-blue-900 border border-gray-100 uppercase tracking-wider opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                        Buat Event Sekarang!
                    </div>
                    <button class="bg-[#0049cc] text-white w-16 h-16 rounded-full flex items-center justify-center shadow-[0_15px_40px_rgba(0,73,204,0.4)] hover:bg-blue-700 transition-all hover:rotate-90">
                        <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path d="M12 4v16m8-8H4"/></svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- HALAMAN HOME (AWALNYA TERSEMBUNYI) --}}
        <div id="page-home" class="hidden">
            <div class="max-w-7xl mx-auto py-20 text-center">
                <h2 class="text-4xl font-black text-gray-800 uppercase tracking-tighter">Halaman Depan Utama</h2>
                <p class="text-gray-500 mt-4 font-bold uppercase text-xs">Klik Logo LOKET untuk kembali ke sini</p>
            </div>
        </div>

    </div>
    {{-- SECTION: BERAGAM JENIS EVENT (Sesuai Foto 5) --}}
        <div class="bg-white py-20 relative z-10">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h2 class="text-[#1a2b4b] text-4xl font-[1000] mb-12 tracking-tight">
                    Beragam jenis event,<br>semua bisa pakai LOKÉT
                </h2>

                {{-- Container Card Event --}}
                <div class="flex flex-nowrap md:justify-center items-end gap-4 overflow-x-auto pb-10 px-4 no-scrollbar">
                    
                    {{-- Card 1 (Coldplay) --}}
                    <div class="min-w-[250px] bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden text-left flex-shrink-0 opacity-60 scale-90">
                        <img src="https://assets.loket.com/images/banner/20230519103512.jpg" class="w-full h-32 object-cover">
                        <div class="p-4 bg-[#1a2b4b] text-white text-[10px] font-bold h-12 flex items-center">Coldplay Music of the Spheres World Tour</div>
                        <div class="p-4 space-y-2 text-[10px]">
                            <div class="flex justify-between">
                                <span class="text-gray-400">Event Creator</span>
                                <span class="font-bold text-[#1a2b4b]">PK Entertainment</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-400">Jumlah pengunjung</span>
                                <span class="font-bold text-[#1a2b4b]">s/d 80.000 pax</span>
                            </div>
                        </div>
                    </div>

                    {{-- Card 2 (NCT DREAM - Utama Sesuai Foto 5) --}}
                    <div class="min-w-[300px] bg-white rounded-3xl shadow-2xl border border-gray-100 overflow-hidden text-left flex-shrink-0 z-20 transform translate-y-[-10px] scale-105">
                        <img src="https://s3-ap-southeast-1.amazonaws.com/loket-production-sg/images/banner/20240321111516_65fbc6f40656a.jpg" class="w-full h-48 object-cover">
                        <div class="p-6 bg-[#6b6b6b] text-white text-xs font-black leading-tight h-20 flex items-center uppercase tracking-tighter">
                            2024 NCT DREAM WORLD TOUR THE DREAM SHOW 3 : DREAM( )SCAPE in JAKARTA
                        </div>
                        <div class="p-6 space-y-4 text-xs font-bold">
                            <div class="flex justify-between items-center border-b border-gray-50 pb-2">
                                <span class="text-gray-400">Event Creator</span>
                                <span class="text-[#1a2b4b] text-right">Dyandra Global<br>Edutainment</span>
                            </div>
                            <div class="flex justify-between items-center border-b border-gray-50 pb-2">
                                <span class="text-gray-400">Jumlah pengunjung</span>
                                <span class="text-[#1a2b4b]">s/d 40.000 pax</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Tipe Event</span>
                                <span class="text-[#1a2b4b]">Musik (Concert)</span>
                            </div>
                        </div>
                    </div>

                    {{-- Card 3 (G-Dragon / Alternatif) --}}
                    <div class="min-w-[250px] bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden text-left flex-shrink-0 opacity-60 scale-90">
                        <img src="https://assets.loket.com/images/banner/20230519103512.jpg" class="w-full h-32 object-cover grayscale">
                        <div class="p-4 bg-black text-white text-[10px] font-bold h-12 flex items-center">2025 WORLD TOUR [Mensch] IN JAKARTA</div>
                        <div class="p-4 space-y-2 text-[10px]">
                            <div class="flex justify-between">
                                <span class="text-gray-400">Event Creator</span>
                                <span class="font-bold text-[#1a2b4b]">CK Star Entertainment</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-400">Jumlah pengunjung</span>
                                <span class="font-bold text-[#1a2b4b]">s/d 18.000 pax</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        {{-- SECTION: HITUNG PENDAPATAN (Sesuai Screenshot 6) --}}
        <div class="bg-white py-20 relative z-10">
            <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row gap-16 items-center">
                {{-- Teks Kiri --}}
                <div class="flex-1">
                    <h2 class="text-[#1a2b4b] text-4xl font-[1000] leading-tight mb-6">
                        Hitung Perkiraan Pendapatan Event Kamu
                    </h2>
                    <p class="text-gray-500 font-bold text-lg mb-8 leading-relaxed">
                        Rencanakan event lebih mantap dengan kalkulator pendapatan. Lihat estimasi pendapatan event-mu di Loket.com dengan rincian biaya yang transparan.
                    </p>
                    <button class="bg-[#0049cc] text-white font-black py-3 px-8 rounded-xl flex items-center gap-3 shadow-lg hover:bg-blue-800 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                        Coba Hitung Sendiri
                    </button>
                </div>

                {{-- Card Kalkulator Kanan --}}
                <div class="flex-1 w-full">
                    <div class="bg-white rounded-[40px] shadow-[0_30px_60px_-15px_rgba(0,0,0,0.1)] border border-gray-50 p-10">
                        <p class="text-gray-400 font-black text-xs uppercase tracking-widest mb-8">Contoh Perhitungan</p>
                        
                        <div class="bg-[#f8fafc] rounded-3xl p-6 mb-8">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 bg-[#1a2b4b] rounded-xl flex items-center justify-center text-white">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path><path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path></svg>
                                </div>
                                <span class="font-[1000] text-[#1a2b4b]">General Admission</span>
                            </div>

                            <div class="grid grid-cols-2 gap-10">
                                <div>
                                    <p class="text-[10px] font-bold text-gray-400 uppercase mb-1">Harga (Rp)</p>
                                    <p class="text-2xl font-black text-[#1a2b4b]">50.000</p>
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold text-gray-400 uppercase mb-1">Jumlah Tiket</p>
                                    <p class="text-2xl font-black text-[#1a2b4b]">100</p>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-4 mb-8">
                            <div class="flex justify-between items-center text-sm font-bold">
                                <span class="text-gray-400">Total Penjualan</span>
                                <span class="text-[#1a2b4b]">Rp 5.000.000</span>
                            </div>
                            <div class="flex justify-between items-center text-sm font-bold">
                                <span class="text-gray-400">Biaya Penjualan Tiket (3,5%)</span>
                                <span class="text-red-500">- Rp 175.000</span>
                            </div>
                        </div>

                        <div class="bg-green-50 rounded-2xl p-4 flex justify-between items-center border border-green-100">
                            <span class="text-green-800 font-bold text-sm">Pendapatan Kamu</span>
                            <span class="text-green-600 font-[1000] text-xl">Rp 4.825.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- SECTION: LOGO PARTNER (Sesuai Screenshot 6) --}}
        <div class="bg-white py-16 border-t border-gray-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h3 class="text-[#1a2b4b] text-3xl font-[1000] mb-12">Mereka sudah sukses bikin event keren di LOKÉT</h3>
        
        {{-- Container utama yang membatasi lebar --}}
        <div class="relative flex overflow-x-hidden group">
            {{-- Wrapper animasi --}}
            <marquee>
            <div class="animate-scroll flex items-center gap-24 opacity-50 grayscale hover:grayscale-0 transition-all duration-500">
                {{-- Set Logo Pertama --}}
                
                <img src="https://assets.loket.com/images/partner/ck-star.png" class="h-8" alt="CK Star">
                <img src="https://assets.loket.com/images/partner/dyandra.png" class="h-8" alt="Dyandra">
                <img src="https://assets.loket.com/images/partner/plainsong.png" class="h-8" alt="Plainsong">
                <img src="https://assets.loket.com/images/partner/ekresa.png" class="h-10" alt="Ekresa">
                <img src="https://assets.loket.com/images/partner/antara.png" class="h-8" alt="Antara">
                <img src="https://assets.loket.com/images/partner/goldlive.png" class="h-8" alt="Goldlive">

                {{-- Duplikat Logo (Supaya pas muter gak putus) --}}
                <img src="https://assets.loket.com/images/partner/ck-star.png" class="h-8" alt="CK Star">
                <img src="https://assets.loket.com/images/partner/dyandra.png" class="h-8" alt="Dyandra">
                <img src="https://assets.loket.com/images/partner/plainsong.png" class="h-8" alt="Plainsong">
                <img src="https://assets.loket.com/images/partner/ekresa.png" class="h-10" alt="Ekresa">
                <img src="https://assets.loket.com/images/partner/antara.png" class="h-8" alt="Antara">
                <img src="https://assets.loket.com/images/partner/goldlive.png" class="h-8" alt="Goldlive">
            </div>
            </marquee>
        </div>
    </div>
</div>
{{-- SECTION: FITUR UNGGULAN (Sesuai Screenshot 6) --}}
        <div class="bg-white py-20">
            <div class="max-w-7xl mx-auto px-4">
                <h3 class="text-[#1a2b4b] text-3xl font-[1000] text-center mb-12">Tingkatkan event dengan fitur unggulan</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    {{-- Fitur 1 --}}
                    <div class="bg-[#f0f7ff] p-10 rounded-[40px] border border-blue-50 relative overflow-hidden group">
                        <div class="relative z-10">
                            <h4 class="text-[#1a2b4b] text-2xl font-[1000] mb-4">LOKÉT Craftor</h4>
                            <p class="text-gray-500 font-bold mb-8 max-w-xs">Aplikasi check-in praktis untuk scan tiket cepat dan pantau event secara real-time.</p>
                            <a href="#" class="text-blue-600 font-black flex items-center gap-2 group-hover:gap-4 transition-all">
                                Baca Selengkapnya 
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                        </div>
                    </div>

                    {{-- Fitur 2 --}}
                    <div class="bg-[#fff9e6] p-10 rounded-[45px] border border-yellow-50 relative overflow-hidden group">
                        <div class="relative z-10">
                            <h4 class="text-[#1a2b4b] text-2xl font-[1000] mb-4">Ticketbox</h4>
                            <p class="text-gray-500 font-bold mb-8 max-w-xs">Jual tiket event kamu langsung di venue pada hari-H & bisa bayar secara tunai!</p>
                            <a href="#" class="text-blue-600 font-black flex items-center gap-2 group-hover:gap-4 transition-all">
                                Baca Selengkapnya 
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        {{-- SECTION: FITUR UNGGULAN LANJUTAN (Sesuai Screenshot 7) --}}
        <div class="bg-white py-10 pb-24">
            <div class="max-w-7xl mx-auto px-4">
                
                {{-- Grid Fitur Baris Kedua --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    {{-- Formulir Data Tambahan --}}
                    <div class="bg-[#e8f5e9] p-8 rounded-[32px] border border-green-50 relative overflow-hidden group min-h-[350px] flex flex-col justify-between">
                        <div>
                            <h4 class="text-[#1a2b4b] text-xl font-[1000] mb-3">Formulir Data Tambahan</h4>
                            <p class="text-gray-500 font-bold text-sm mb-6">Kumpulkan info penting dari pembeli sesuai kebutuhan.</p>
                            <a href="#" class="text-blue-600 font-black text-sm flex items-center gap-2">Baca Selengkapnya <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg></a>
                        </div>
                        {{-- Grid Pattern Decoration --}}
                        <div class="absolute bottom-0 right-0 left-0 h-32 bg-[url('https://www.transparenttextures.com/patterns/graphy-light.png')] opacity-10"></div>
                    </div>

                    {{-- Penarikan Dana --}}
                    <div class="bg-[#fff8e1] p-8 rounded-[32px] border border-yellow-50 relative overflow-hidden group min-h-[350px] flex flex-col justify-between">
                        <div>
                            <h4 class="text-[#1a2b4b] text-xl font-[1000] mb-3">Penarikan Dana</h4>
                            <p class="text-gray-500 font-bold text-sm mb-6">Tarik hasil penjualan tiket langsung dari Dashboard Event Creator setelah event selesai.</p>
                            <a href="#" class="text-blue-600 font-black text-sm flex items-center gap-2">Baca Selengkapnya <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg></a>
                        </div>
                        <div class="absolute bottom-0 right-0 left-0 h-32 bg-[url('https://www.transparenttextures.com/patterns/graphy-light.png')] opacity-10"></div>
                    </div>

                    {{-- Beragam Metode Pembayaran --}}
                    <div class="bg-[#fbe9e7] p-8 rounded-[32px] border border-red-50 relative overflow-hidden group min-h-[350px] flex flex-col justify-between">
                        <div>
                            <h4 class="text-[#1a2b4b] text-xl font-[1000] mb-3">Beragam Metode Pembayaran</h4>
                            <p class="text-gray-500 font-bold text-sm mb-6">LOKÉT menyediakan banyak metode pembayaran yang bisa kamu gunakan untuk event kamu.</p>
                            <a href="#" class="text-blue-600 font-black text-sm flex items-center gap-2 mb-6">Baca Selengkapnya <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg></a>
                        </div>
                        
                        {{-- Payment Logos Grid --}}
                        <div class="grid grid-cols-5 gap-2 relative z-10 bg-white/50 p-4 rounded-2xl backdrop-blur-sm border border-white/50">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/e/eb/Logo_mandiri.png" class="h-4 object-contain mx-auto grayscale">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Bank_Central_Asia.svg" class="h-4 object-contain mx-auto grayscale">
                            <img src="https://upload.wikimedia.org/wikipedia/id/0/05/Logo_BNI.svg" class="h-4 object-contain mx-auto grayscale">
                            <img src="https://upload.wikimedia.org/wikipedia/id/f/fa/Bank_Rakyat_Indonesia_logo.svg" class="h-4 object-contain mx-auto grayscale">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/8/85/LinkAja.svg" class="h-4 object-contain mx-auto grayscale">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/a/ad/Logo_ShopeePay.svg" class="h-4 object-contain mx-auto grayscale">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/8/86/Gopay_logo.svg" class="h-4 object-contain mx-auto grayscale">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a2/Logo_QRIS.svg" class="h-4 object-contain mx-auto grayscale">
                        </div>
                    </div>
                </div>

                {{-- Baris Ketiga (Akses Tiket & Kode Promo) --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    {{-- Akses Tiket Lewat LOKET X --}}
                    <div class="bg-[#eef2ff] p-10 rounded-[40px] border border-blue-50 group">
                        <h4 class="text-[#1a2b4b] text-2xl font-[1000] mb-4">Akses Tiket Lewat LOKÉT X</h4>
                        <p class="text-gray-500 font-bold mb-8">Tanpa perlu cetak tiket, cukup scan QR Code di aplikasi LOKÉT X yang bisa dipakai secara offline.</p>
                        <a href="#" class="text-blue-600 font-black flex items-center gap-2 group-hover:gap-4 transition-all">Baca Selengkapnya <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg></a>
                    </div>

                    {{-- Bisa Buat Kode Promo --}}
                    <div class="bg-[#fffdf5] p-10 rounded-[40px] border border-yellow-50 group">
                        <h4 class="text-[#1a2b4b] text-2xl font-[1000] mb-4">Bisa Buat Kode Promo</h4>
                        <p class="text-gray-500 font-bold mb-8">Kini, kamu bisa membuat & mengatur kode promo spesial untuk menarik minat calon pembeli tiket.</p>
                        <a href="#" class="text-blue-600 font-black flex items-center gap-2 group-hover:gap-4 transition-all">Baca Selengkapnya <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg></a>
                    </div>
                </div>
            
        {{-- SECTION: FITUR UNGGULAN BARIS AKHIR (Sesuai Screenshot 8) --}}
        <div class="bg-white py-10 pb-24">
            <div class="max-w-7xl mx-auto px-4">
                
                {{-- Grid Fitur Baris Terakhir --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                    {{-- Pantau Penjualan Real-Time --}}
                    <div class="bg-[#fff0e6] p-8 rounded-[32px] border border-orange-50 relative overflow-hidden group min-h-[350px] flex flex-col justify-between">
                        <div>
                            <h4 class="text-[#1a2b4b] text-xl font-[1000] mb-3">Pantau Penjualan Real-Time</h4>
                            <p class="text-gray-500 font-bold text-sm mb-6">Pakai Dashboard Event Creator untuk cek penjualan kapan aja.</p>
                            <a href="#" class="text-blue-600 font-black text-sm flex items-center gap-2">Baca Selengkapnya <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg></a>
                        </div>
                        {{-- Grid Pattern Decoration --}}
                        <div class="absolute bottom-0 right-0 left-0 h-32 bg-[url('https://www.transparenttextures.com/patterns/graphy-light.png')] opacity-10"></div>
                    </div>

                    {{-- Promo Spesial dari Payment Partner --}}
                    <div class="bg-[#eef2ff] p-8 rounded-[32px] border border-blue-50 relative overflow-hidden group min-h-[350px] flex flex-col justify-between">
                        <div>
                            <h4 class="text-[#1a2b4b] text-xl font-[1000] mb-3">Promo Spesial dari Payment Partner</h4>
                            <p class="text-gray-500 font-bold text-sm mb-6">Event kamu bisa menggunakan promo spesial dari Payment Partner yang bekerja sama di LOKÉT, lho!</p>
                            <a href="#" class="text-blue-600 font-black text-sm flex items-center gap-2">Baca Selengkapnya <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg></a>
                        </div>
                        <div class="absolute bottom-0 right-0 left-0 h-32 bg-[url('https://www.transparenttextures.com/patterns/graphy-light.png')] opacity-10"></div>
                    </div>

                    {{-- Manage Access --}}
                    <div class="bg-[#e8f5e9] p-8 rounded-[32px] border border-green-50 relative overflow-hidden group min-h-[350px] flex flex-col justify-between">
                        <div>
                            <h4 class="text-[#1a2b4b] text-xl font-[1000] mb-3">Manage Access</h4>
                            <p class="text-gray-500 font-bold text-sm mb-6">Atur akses tim event kamu dengan mudah. Tentukan role dan izin sesuai kebutuhan!</p>
                            <a href="#" class="text-blue-600 font-black text-sm flex items-center gap-2 mb-6">Baca Selengkapnya <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg></a>
                        </div>
                        <div class="absolute bottom-0 right-0 left-0 h-32 bg-[url('https://www.transparenttextures.com/patterns/graphy-light.png')] opacity-10"></div>
                    </div>
                </div>

                {{-- Bagian Guidebook (Sesuai bagian bawah Screenshot 8) --}}
                <div class="bg-[#f0f7ff] rounded-[45px] p-12 flex flex-col md:flex-row items-center gap-10">
                    <div class="flex-1 order-2 md:order-1">
                        <img src="https://hero.loket.com/images/loket_creator_docs.png" class="w-full drop-shadow-2xl rounded-2xl" alt="Guidebook">
                    </div>
                    <div class="flex-1 order-1 md:order-2">
                        <h3 class="text-[#1a2b4b] text-4xl font-[1000] leading-tight mb-6">
                            Akses guidebook penuh insight & best practice untuk event kamu
                        </h3>
                        <button class="bg-[#0049cc] text-white font-black py-4 px-10 rounded-xl shadow-lg hover:bg-blue-800 transition">
                            Lihat Guidebook
                        </button>
                    </div>
                </div>

            </div>
        </div>
        {{-- SECTION: TESTIMONI (Sesuai Screenshot 9) --}}
        <div class="bg-white py-24 relative z-10">
            <div class="max-w-7xl mx-auto px-4 text-center">
                {{-- Heading Section --}}
                <h2 class="text-[#1a2b4b] text-4xl font-[1000] mb-4 tracking-tight">
                    Bareng LOKÉT, mereka mewujudkan event impian
                </h2>
                <p class="text-gray-500 font-bold text-lg mb-16 max-w-3xl mx-auto leading-relaxed">
                    Banyak event creator yang telah merasakan kemudahannya, dan kamu juga bisa menjadi seperti mereka. Simak inspirasinya:
                </p>

                {{-- Grid Testimoni --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-left">
                    
                    {{-- Testimoni 1 --}}
                    <div class="flex flex-col">
                        <div class="text-blue-600 mb-6">
                            <svg class="w-10 h-10 transform rotate-180" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 8.44772 14.017 9V15M5.017 21L5.017 18C5.017 16.8954 5.91243 16 7.017 16H10.017C10.5693 16 11.017 15.5523 11.017 15V9C11.017 8.44772 10.5693 8 10.017 8H6.017C5.46472 8 5.017 8.44772 5.017 9V15"></path></svg>
                        </div>
                        <div class="mb-6 flex items-center gap-4">
                            <div class="w-14 h-14 rounded-full bg-gray-200 overflow-hidden border-2 border-white shadow-md">
                                 <img src="https://images.unsplash.com/photo-1507874457470-272b3c8d8ee2?q=80&w=1200" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <p class="text-gray-600 font-bold leading-relaxed italic">
                            "Smooth banget kerja sama bareng LOKÉT, service-nya juga bagus. Top notch deh pokoknya. Jadi, saya merekomendasikan LOKÉT, karena jika kamu ingin membuat satu acara atau festival, please pakai LOKÉT!"
                        </p>
                    </div>

                    {{-- Testimoni 2 --}}
                    <div class="flex flex-col">
                        <div class="text-blue-600 mb-6">
                            <svg class="w-10 h-10 transform rotate-180" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 8.44772 14.017 9V15M5.017 21L5.017 18C5.017 16.8954 5.91243 16 7.017 16H10.017C10.5693 16 11.017 15.5523 11.017 15V9C11.017 8.44772 10.5693 8 10.017 8H6.017C5.46472 8 5.017 8.44772 5.017 9V15"></path></svg>
                        </div>
                        <div class="mb-6 flex items-center gap-4">
                            <div class="w-14 h-14 rounded-full bg-gray-200 overflow-hidden border-2 border-white shadow-md">
                               <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=1200"class="w-full h-full object-cover">
                            </div>
                        </div>
                        <p class="text-gray-600 font-bold leading-relaxed italic">
                            "Kita pakai sistem RFID (Sistem LOKÉT) karena sistem RFID lebih safety, nggak ribet, dan lebih tersistem. Karena RFID nggak cuma bisa buat gate masuk untuk tiketnya tapi bisa juga untuk semua pembayaran di event Ismaya Live."
                        </p>
                    </div>

                    {{-- Testimoni 3 --}}
                    <div class="flex flex-col">
                        <div class="text-blue-600 mb-6">
                            <svg class="w-10 h-10 transform rotate-180" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 8.44772 14.017 9V15M5.017 21L5.017 18C5.017 16.8954 5.91243 16 7.017 16H10.017C10.5693 16 11.017 15.5523 11.017 15V9C11.017 8.44772 10.5693 8 10.017 8H6.017C5.46472 8 5.017 8.44772 5.017 9V15"></path></svg>
                        </div>
                        <div class="mb-6 flex items-center gap-4">
                            <div class="w-14 h-14 rounded-full bg-gray-200 overflow-hidden border-2 border-white shadow-md">
                                <img src="https://images.unsplash.com/photo-1506157786151-b8491531f063?q=80&w=1200"  class="w-full h-full object-cover">
                            </div>
                        </div>
                        <p class="text-gray-600 font-bold leading-relaxed italic">
                            "Sistemnya (LOKÉT) itu mudah banget, create event-nya gampang, dan kalau misalkan ada kendala pun, tim LOKÉT juga responnya cepet banget. Jadi, kalau ada problem langsung di-solved dalam waktu singkat. Keren LOKÉT!"
                        </p>
                    </div>

                </div>
            </div>
        </div>
<section 
    x-data="{ 
        next() {
            this.$refs.slider.scrollBy({ left: this.$refs.slider.firstElementChild.clientWidth + 24, behavior: 'smooth' })
        },
        prev() {
            this.$refs.slider.scrollBy({ left: -this.$refs.slider.firstElementChild.clientWidth - 24, behavior: 'smooth' })
        }
    }"
    class="relative w-screen left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] bg-[#1a2b4b] py-24 overflow-hidden"
>
    <div class="max-w-7xl mx-auto px-4">
        
        <h2 class="text-white text-4xl font-[1000] mb-12 text-center tracking-tight">
            Informasi buat upgrade event kamu
        </h2>

        <div class="relative group">
            <button 
                @click="prev()" 
                class="absolute left-[-20px] top-1/2 -translate-y-1/2 z-20 bg-white w-12 h-12 rounded-full flex items-center justify-center shadow-xl text-[#1a2b4b] hover:scale-110 transition-all duration-300"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"/></svg>
            </button>

            <div 
                x-ref="slider"
                class="flex overflow-x-auto snap-x snap-mandatory gap-6 no-scrollbar pb-4"
                style="scrollbar-width: none; -ms-overflow-style: none;"
            >
                <div class="min-w-full md:min-w-[calc(33.333%-16px)] snap-start bg-white rounded-[32px] overflow-hidden flex flex-col shadow-2xl">
                    <div class="h-52 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1506157786151-b8491531f063?q=80&w=1200"  class="w-full h-full object-cover">
                    </div>
                    <div class="p-8">
                        <h4 class="text-[#1a2b4b] text-xl font-[1000] mb-4 leading-tight">Biar Eventmu Ngga Rugi, Cek Cara Menentukan Harga Tiket Di sini!</h4>
                        <p class="text-gray-500 text-sm font-bold leading-relaxed">Menetapkan harga tiket event adalah tugas paling tricky ketika membuat event...</p>
                    </div>
                </div>

                <div class="min-w-full md:min-w-[calc(33.333%-16px)] snap-start bg-white rounded-[32px] overflow-hidden flex flex-col shadow-2xl">
                    <div class="h-52 overflow-hidden">
                         <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=1200" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8">
                        <h4 class="text-[#1a2b4b] text-xl font-[1000] mb-4 leading-tight">Jenis-Jenis Tiket Event, Mana Yang Cocok Buat Event-mu?</h4>
                        <p class="text-gray-500 text-sm font-bold leading-relaxed">Event creator mana sih yang ngga suka sama kata "Sold Out"? Kata sold out itu...</p>
                    </div>
                </div>

                <div class="min-w-full md:min-w-[calc(33.333%-16px)] snap-start bg-white rounded-[32px] overflow-hidden flex flex-col shadow-2xl">
                    <div class="h-52 overflow-hidden">
                       <img src="https://images.unsplash.com/photo-1507874457470-272b3c8d8ee2?q=80&w=1200" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8">
                        <h4 class="text-[#1a2b4b] text-xl font-[1000] mb-4 leading-tight">Contoh Hybrid Event Yang Bisa Menginspirasi Event Kamu</h4>
                        <p class="text-gray-500 text-sm font-bold leading-relaxed">Waktunya kamu bikin event dengan terobosan baru, hybrid event!</p>
                    </div>
                </div>

                <div class="min-w-full md:min-w-[calc(33.333%-16px)] snap-start bg-white rounded-[32px] overflow-hidden flex flex-col shadow-2xl border border-gray-100">
                    <div class="h-52 bg-gray-200 flex items-center justify-center">
                        <img src="https://images.unsplash.com/photo-1507874457470-272b3c8d8ee2?q=80&w=1200"class="w-full h-full object-cover">
                    </div>
                    <div class="p-8">
                        <h4 class="text-[#1a2b4b] text-xl font-[1000] mb-4 leading-tight">Contoh Hybrid Event Yang Bisa Menginspirasi Event Kamu</h4>
                        <p class="text-gray-500 text-sm font-bold leading-relaxed">Waktunya kamu bikin event dengan terobosan baru, hybrid event!</p>
                    </div>
                </div>
                 <div class="min-w-full md:min-w-[calc(33.333%-16px)] snap-start bg-white rounded-[32px] overflow-hidden flex flex-col shadow-2xl">
                    <div class="h-52 overflow-hidden">
                         <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=1200" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8">
                        <h4 class="text-[#1a2b4b] text-xl font-[1000] mb-4 leading-tight">Jenis-Jenis Tiket Event, Mana Yang Cocok Buat Event-mu?</h4>
                        <p class="text-gray-500 text-sm font-bold leading-relaxed">Event creator mana sih yang ngga suka sama kata "Sold Out"? Kata sold out itu...</p>
                    </div>
                </div>
            </div>
            <button 
                @click="next()" 
                class="absolute right-[-20px] top-1/2 -translate-y-1/2 z-20 bg-white w-12 h-12 rounded-full flex items-center justify-center shadow-xl text-[#1a2b4b] hover:scale-110 transition-all duration-300"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>
    </div>
</section>
<section class="bg-white py-24 relative z-10">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-[#1a2b4b] text-4xl font-[1000] mb-12 tracking-tight">
            Mau mulai jadi event creator<br>di Loket.com?
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto text-left">
            <div class="bg-white rounded-[40px] shadow-[0_25px_60px_-15px_rgba(0,0,0,0.1)] overflow-hidden border border-gray-100 flex flex-col h-full transform hover:-translate-y-2 transition-all duration-300">
                <div class="h-32 bg-[#ff7a00] bg-[url('https://hero.loket.com/images/pattern_p2.png')] bg-cover relative"></div>
                <div class="p-10 flex flex-col justify-between flex-grow">
                    <p class="text-gray-500 font-bold leading-relaxed text-sm mb-10 max-w-sm">
                        Cocok untuk berbagai kebutuhan event. Dalam hitungan menit, kamu sudah bisa mulai jual tiket dan kelola semuanya dengan simpel.
                    </p>
                    <button class="bg-white text-[#1a2b4b] font-black w-full text-center py-3 px-6 rounded-xl border border-gray-100 shadow-md hover:bg-gray-50 hover:border-gray-200 transition">
                        Buat Event Sekarang, Gratis!
                    </button>
                </div>
            </div>

            <div class="bg-white rounded-[40px] shadow-[0_25px_60px_-15px_rgba(0,0,0,0.1)] overflow-hidden border border-gray-100 flex flex-col h-full transform hover:-translate-y-2 transition-all duration-300">
                <div class="h-32 bg-[#1a2b4b] bg-[url('https://hero.loket.com/images/pattern_p2.png')] bg-cover relative opacity-90"></div>
                <div class="p-10 flex flex-col justify-between flex-grow">
                    <p class="text-gray-500 font-bold leading-relaxed text-sm mb-10 max-w-sm">
                        Solusi untuk kebutuhan event dengan pengaturan lebih lengkap dan dukungan khusus dari tim LOKÉT.
                    </p>
                    <button class="bg-white text-[#1a2b4b] font-black w-full text-center py-3 px-6 rounded-xl border border-gray-100 shadow-md hover:bg-gray-50 hover:border-gray-200 transition">
                        Konsultasi dengan Kami
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<section 
    x-data="{ 
        startIndex: 0,
        images: [
            { id: 'image1', src: 'https://img.youtube.com/vi/dQw4w9WgXcQ/maxresdefault.jpg' },
            { id: 'image2', src: 'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=1200' },
            { id: 'image3', src: 'https://images.unsplash.com/photo-1507874457470-272b3c8d8ee2?q=80&w=1200' },
            { id: 'image4', src: 'https://images.unsplash.com/photo-1507874457470-272b3c8d8ee2?q=80&w=1200' }
        ],
        next() {
            if (this.startIndex < this.images.length - 3) {
                this.startIndex++;
            } else {
                this.startIndex = 0; // Balik ke awal kalau sudah mentok
            }
        },
        prev() {
            if (this.startIndex > 0) {
                this.startIndex--;
            } else {
                this.startIndex = this.images.length - 3; // Ke paling akhir
            }
        }
    }" 
    class="bg-white py-24 pb-32 relative z-10 border-t border-gray-50 overflow-hidden"
>
    <div class="max-w-7xl mx-auto px-4">
        <h3 class="text-[#1a2b4b] text-4xl font-[1000] text-center mb-16 tracking-tight">
            Update & insight terbaru dunia event
        </h3>

        <div class="relative max-w-6xl mx-auto px-10">
            <button @click="prev()" class="absolute left-0 top-1/2 -translate-y-1/2 z-30 bg-white w-12 h-12 rounded-full flex items-center justify-center shadow-xl text-[#1a2b4b] hover:scale-110 transition-all border border-gray-100">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"/></svg>
            </button>
            
            <div class="flex gap-6 justify-center">
                <template x-for="(image, index) in images.slice(startIndex, startIndex + 3)" :key="image.id">
                    <div 
                        class="w-1/3 bg-white rounded-3xl overflow-hidden shadow-xl border border-gray-100 transition-all duration-500 transform hover:scale-[1.02]"
                        :class="index === 1 ? 'scale-105 z-10 shadow-2xl' : 'scale-100'"
                    >
                        <div class="aspect-video bg-gray-900 relative">
                            <img :src="image.src" class="w-full h-full object-cover">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm shadow-xl ring-2 ring-white/30 cursor-pointer">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <button @click="next()" class="absolute right-0 top-1/2 -translate-y-1/2 z-30 bg-white w-12 h-12 rounded-full flex items-center justify-center shadow-xl text-[#1a2b4b] hover:scale-110 transition-all border border-gray-100">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>
    </div>
</section>
<section class="bg-white pb-24 relative z-10">
    <div class="max-w-7xl mx-auto px-4 text-center">
        
        <p class="text-gray-500 font-bold text-lg mb-6">
            Cek selengkapnya di
        </p>

        <div class="flex justify-center">
            <a 
                href="https://www.instagram.com/loketcomcreator" 
                target="_blank"
                class="bg-[#1a2b4b] hover:bg-[#243b66] text-white px-8 py-4 rounded-2xl flex items-center gap-4 shadow-lg transform hover:-translate-y-1 transition-all duration-300 group"
            >
                <div class="bg-white/10 p-2 rounded-lg group-hover:bg-white/20 transition-colors">
                    <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </div>
                
                <span class="text-xl font-[1000] tracking-tight">
                    @loketcomcreator
                </span>
            </a>
        </div>
    </div>
</section>

<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- SCRIPT PENGONTROL --}}
    <script>
        function showCreatorPage() {
            document.getElementById('page-home').style.display = 'none';
            document.getElementById('page-creator').style.display = 'block';
            window.scrollTo(0,0);
        }

        function showHomePage() {
            document.getElementById('page-home').style.display = 'block';
            document.getElementById('page-creator').style.display = 'none';
            window.scrollTo(0,0);
        }
    </script>
</x-app-layout>