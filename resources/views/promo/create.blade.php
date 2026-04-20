<x-app-layout>
    <nav class="bg-[#00173D] text-white py-6 px-4">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between">
            <div class="flex items-center mb-6 md:mb-0">
                <a href="{{ url('/') }}" class="flex items-center hover:opacity-80 transition-opacity">
                    <div class="flex items-center gap-1">
                        <div class="w-5 h-5 bg-white rounded-sm relative">
                            <div class="absolute inset-1 bg-[#00173D] rounded-sm"></div>
                        </div>
                        <span class="text-2xl font-bold tracking-tight uppercase italic text-white">Loket</span>
                    </div>
                </a>
            </div>
            <ul class="flex flex-wrap justify-center gap-6 text-[13px] font-bold uppercase tracking-wide">
                <li><a href="{{ route('blog.create')}}" class="hover:text-cyan-400">Blog Home</a></li>
                <li><a href="{{ route('loketx.create')}}" class="text-cyan-400">LOKET X</a></li>
                <li><a href="{{ route('loketedu.create')}}" class="hover:text-cyan-400">LOKET Edu</a></li>
                <li><a href="{{ route('loketnews.create')}}" class="hover:text-cyan-400">LOKET News</a></li>
                <li><a href="{{ route('loketscreen.create')}}" class="hover:text-cyan-400">LOKET Screen</a></li>
                <li><a href="{{ route('loketwiki.create')}}" class="hover:text-cyan-400">LOKET Wiki</a></li>
                <li><a href="{{ route('loketevent.create')}}" class="hover:text-cyan-400">LOKET Event</a></li>
            </ul>
        </div>
    </nav>

    <div class="max-w-4xl mx-auto bg-white overflow-hidden font-sans mt-8">
        <div class="flex flex-col md:flex-row bg-[#45789C] rounded-xl">
            <div class="p-8 md:w-1/2 flex flex-col justify-center text-white">
                <div class="flex items-center gap-2 mb-8">
                    <span class="font-bold text-xl tracking-tight uppercase">Lokét</span>
                    <span class="bg-white text-[#45789C] px-2 py-0.5 rounded text-sm font-black italic">12 Tahun</span>
                </div>
                <h1 class="text-3xl md:text-4xl font-black leading-tight mb-4 uppercase">Ada Cashback Buat Beli Tiket Pakai Indodana PayLater!</h1>
                <p class="text-xs opacity-80">*S&K berlaku</p>
            </div>
            <div class="md:w-1/2 bg-[#0A1D37] p-6 relative flex flex-col items-center justify-center min-h-[300px]">
                <div class="bg-[#0BB58C] rounded-2xl p-4 w-full border-2 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
                    <div class="bg-white rounded-full px-4 py-1 w-fit mx-auto mb-4 flex items-center gap-1">
                        <span class="text-[#0BB58C] font-bold text-xs italic">indodana</span>
                        <span class="text-gray-500 text-[10px] uppercase font-semibold tracking-tighter">Paylater</span>
                    </div>
                    <div class="grid grid-cols-3 gap-2 text-center text-white">
                        <div>
                            <p class="text-[7px] uppercase leading-tight mb-1">Diskon Event & Wahana S.D</p>
                            <p class="text-xl font-black italic">Rp 150<span class="text-[8px]">rb</span></p>
                        </div>
                        <div class="border-x border-white/20">
                            <p class="text-[7px] uppercase leading-tight mb-1">Cicilan</p>
                            <p class="text-2xl font-black italic">0%</p>
                        </div>
                        <div>
                            <p class="text-[7px] uppercase leading-tight mb-1">Diskon Event & Wahana S.D</p>
                            <p class="text-xl font-black italic">Rp 15<span class="text-[8px]">rb</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-4xl mx-auto bg-white p-8 font-sans">
        <span class="text-blue-600 font-bold text-xs uppercase tracking-wider">LOKET NEWS</span>
        <h2 class="text-3xl font-bold text-gray-900 mt-2 mb-2">Ada Cashback Buat Beli Tiket Pakai Indodana PayLater!</h2>
        <p class="text-sm text-gray-400 mb-8">03 Nov 2025 • Winda Paramita</p>
        
        <div class="text-gray-600 leading-relaxed text-lg mb-12">
            <p>Idola kesayangan mau konser di Indonesia? ... Beli tiketnya pakai Indodana PayLater di <a href="#" class="text-blue-600 font-bold underline">sini</a>!</p>
        </div>

        <h3 class="text-2xl font-bold text-gray-900 mb-6">Promo Spesial 90's Intimate 2nd Edition</h3>

        <div class="border border-gray-200 rounded-lg overflow-hidden shadow-sm max-w-2xl mx-auto mb-12">
            <div class="bg-[#F2F2F2] p-8 flex flex-col items-center border-b border-gray-100">
                <img src="path-ke-logo-90s.png" alt="Logo 90s" class="w-64">
            </div>
            <div class="bg-[#1D4776] p-6 text-white flex items-center justify-between">
                <div>
                    <span class="font-bold italic text-sm">indodana</span>
                    <div class="bg-white text-[#1D4776] font-black text-xl px-2 py-0.5 rounded italic mt-2 w-fit">HEPI</div>
                </div>
                <div class="bg-[#EAB308] p-4 rounded-2xl border-2 border-[#1D4776] shadow-lg text-center min-w-[140px]">
                    <p class="text-[10px] font-bold uppercase">Diskon</p>
                    <p class="text-3xl font-black italic">Rp 150<span class="text-sm">rb</span></p>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center gap-4 mb-16">
            <a href="#" class="bg-[#1D355E] text-white px-10 py-3 rounded font-bold text-sm w-full md:w-auto text-center">Beli Tiket 90's Intimate 2nd Edition Jakarta</a>
            <a href="#" class="bg-[#1D355E] text-white px-10 py-3 rounded font-bold text-sm w-full md:w-auto text-center">90's Intimate 2nd Edition Solo</a>
        </div>

        <div class="space-y-4 mb-16">
            <h3 class="text-2xl font-black uppercase mb-6">Promo Beli Tiket Event & Wahana di LOKET</h3>
            <div class="divide-y divide-gray-100">
                <button class="w-full flex justify-between items-center py-5 text-left font-bold text-gray-800">
                    Diskon Rp150ribu Pakai Indodana PayLater
                    <span>▼</span>
                </button>
                <button class="w-full flex justify-between items-center py-5 text-left font-bold text-gray-800">
                    Diskon Rp15ribu ke Beragam Event & Wahana Pakai Indodana PayLater!
                    <span>▼</span>
                </button>
            </div>
        </div>

        <p class="font-bold text-gray-800 mb-6">Rekomendasi Wahana Paling Keren!</p>

        <div class="grid grid-cols-1 gap-8 mb-16">
            <div class="border border-gray-200 rounded-xl overflow-hidden shadow-sm">
                <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h4 class="text-xl font-bold mb-1">Wahoo Waterworld</h4>
                    <p class="text-gray-500 text-sm mb-6">Wahana air kelas internasional di Bandung!</p>
                    <a href="#" class="block w-full bg-[#1D355E] text-white text-center py-3 rounded font-bold uppercase text-xs">Siap-siap buat berenang seru di sini</a>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-6 py-12 border-t border-gray-100">
            <div class="w-16 h-16 rounded-full bg-gray-200 overflow-hidden">
                <svg class="text-gray-400 p-2" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
            </div>
            <div>
                <h5 class="font-bold text-gray-900">Winda Paramita</h5>
                <p class="text-gray-400 text-sm">Winda is a writer at LOKET & LOKET Screen...</p>
            </div>
        </div>

        <div class="mt-12">
            <div class="flex items-center gap-3 mb-8">
                <div class="w-1.5 h-8 bg-blue-600 rounded-full"></div>
                <h3 class="text-2xl font-bold">Artikel Terkait</h3>
            </div>
            <div class="space-y-10">
                <div class="flex flex-col md:flex-row gap-6">
                    <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da" class="md:w-1/3 aspect-video rounded-lg object-cover">
                    <div>
                        <h4 class="text-xl font-bold mb-2">Beragam Diskon & Cashback Nonton Bioskop di LOKET Screen</h4>
                        <p class="text-gray-400 text-xs uppercase tracking-tighter">01 Apr 2026 - Nandita Alfahira</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <footer class="bg-blue-900 text-white pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
            
            <div>
                <div class="text-3xl font-black italic mb-4">LOKET</div>
                <p class="text-sm text-blue-200 leading-relaxed mb-6">
                    Platform manajemen event dan penjualan tiket terpercaya di Indonesia. Buat event-mu sekarang!
                </p>
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-full bg-blue-800 flex items-center justify-center hover:bg-blue-700 cursor-pointer transition-colors">📸</div>
                    <div class="w-10 h-10 rounded-full bg-blue-800 flex items-center justify-center hover:bg-blue-700 cursor-pointer transition-colors">🐦</div>
                    <div class="w-10 h-10 rounded-full bg-blue-800 flex items-center justify-center hover:bg-blue-700 cursor-pointer transition-colors">📘</div>
                </div>
            </div>

            <div>
                <h4 class="font-bold text-lg mb-6">Rayakan Eventmu</h4>
                <ul class="space-y-3 text-sm text-blue-200">
                    <li><a href="#" class="hover:text-white transition-colors">Cara Jual Tiket</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Sistem Manajemen Event</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">LOKET Distribution Network</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">LOKET untuk Promotor</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-lg mb-6">Tentang Loket</h4>
                <ul class="space-y-3 text-sm text-blue-200">
                    <li><a href="#" class="hover:text-white transition-colors">Tentang Kami</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Karir</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Hubungi Kami</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-lg mb-6">Bantuan & Panduan</h4>
                <ul class="space-y-3 text-sm text-blue-200">
                    <li><a href="#" class="hover:text-white transition-colors">Pusat Bantuan</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Syarat & Ketentuan</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Kebijakan Privasi</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Panduan Keamanan</a></li>
                </ul>
            </div>

        </div>

        <div class="pt-20 border-t border-blue-800 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="text-xs text-blue-300">
                © 2026 PT Global Tiket Network. All Rights Reserved.
            </div>
            <div class="flex items-center gap-4 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all">
                <span class="text-[10px] text-blue-400 font-bold uppercase tracking-widest">Part of</span>
                <div class="font-black text-xl italic text-white">tiket<span class="text-blue-400">.com</span></div>
            </div>
        </div>
    </div>
    <div class="pt-20 border-t border-blue-800 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="text-xs text-blue-300">
                © 2026 PT Global Tiket Network. All Rights Reserved.
            </div>
            <div class="flex items-center gap-4 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all">
                <span class="text-[10px] text-blue-400 font-bold uppercase tracking-widest">Part of</span>
                <div class="font-black text-xl italic text-white ">tiket<span class="text-blue-400">.com</span></div>
            </div>
        </div>
        
</footer>


</x-app-layout>