<x-app-layout>
    
    <nav class="bg-[#00173D] text-white py-6 px-4">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between">
            <div class="flex items-center mb-6 md:mb-0">
                <a href="{{ url('/') }}" class="flex items-center mb-6 md:mb-0 hover:opacity-80 transition-opacity">
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

   <div class="bg-gray-100 min-h-screen pb-20">

    <!-- NAVBAR (punya kamu, gak diubah) -->
    <nav class="bg-blue-900 text-white">
        <!-- isi navbar kamu tetap -->
    </nav>

    <!-- ===================== ARTIKEL POPULER ===================== -->
    <div class="py-10">
        <div class="max-w-6xl mx-auto px-4">

            <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-blue-600 pl-3">
                Artikel Populer
            </h2>

            <!-- FEATURED -->
            <div class="grid md:grid-cols-2 gap-6 mb-10 items-center">
                <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da"
                     class="rounded-xl w-full h-[250px] object-cover">

                <div>
                    <h3 class="text-xl font-bold mb-2">
                        Diskon Hingga 50% Beli Tiket Bioskop Pakai Indodana PayLater!
                    </h3>
                    <p class="text-gray-600 text-sm mb-2">
                        Nonton di LOKET Screen makin asik dengan promo pembayaran dari Indodana PayLater!
                    </p>
                    <p class="text-gray-400 text-xs">
                        09 Apr 2026 - Winda Paramita
                    </p>
                </div>
            </div>

            <hr class="mb-8">

            <!-- LIST -->
            <div class="grid md:grid-cols-2 gap-6">

                @foreach (range(1,6) as $item)
                <div class="flex gap-4">
                    <img src="https://images.unsplash.com/photo-1517602302552-471fe67acf66"
                         class="w-28 h-20 rounded-lg object-cover">
                    <div>
                        <h4 class="font-semibold text-sm">
                            Contoh Judul Artikel
                        </h4>
                        <p class="text-xs text-gray-400 mt-1">
                            01 Apr 2026 - Admin
                        </p>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </div>

    <!-- ===================== ARTIKEL PILIHAN ===================== -->
    <div class="py-10">
        <div class="max-w-6xl mx-auto px-4">

            <h2 class="text-2xl font-bold mb-6 border-l-4 border-blue-600 pl-3">
                Artikel Pilihan
            </h2>

            <!-- FEATURED (SUDAH DIPERKECIL) -->
            <div class="grid md:grid-cols-2 gap-6 mb-10 items-center">

                <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da"
                     class="w-full h-[250px] object-cover rounded-xl">

                <div>
                    <h3 class="text-xl font-bold mb-3">
                        Promo Event, Bioskop, & Biaya Komisi Tetap Hemat
                    </h3>
                    <p class="text-gray-600 text-sm mb-3">
                        #PastiBisa beli tiket event, nonton bioskop, dan bikin event kece di LOKET.
                    </p>
                    <span class="text-xs text-gray-400">
                        02 Apr 2026 - Winda Paramita
                    </span>
                </div>

            </div>

            <!-- LIST -->
            <div class="grid md:grid-cols-2 gap-6">

                @foreach (range(1,6) as $item)
                <div class="flex gap-4 bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition">
                    <img src="https://images.unsplash.com/photo-1517602302552-471fe67acf66"
                         class="w-24 h-24 object-cover rounded-lg">
                    <div>
                        <h4 class="font-semibold text-sm">
                            Contoh Judul Artikel Pilihan
                        </h4>
                        <p class="text-xs text-gray-400 mt-2">
                            01 Apr 2026 - Admin
                        </p>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </div>

   </div>
       <!-- ===================== ARTIKEL PILIHAN ===================== -->
    <div class="py-10">
        <div class="max-w-6xl mx-auto px-4">

            <h2 class="text-2xl font-bold mb-6 border-l-4 border-blue-600 pl-3">
                Artikel Pilihan
            </h2>

            <!-- FEATURED (SUDAH DIPERKECIL) -->
            <div class="grid md:grid-cols-2 gap-6 mb-10 items-center">

                <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da"
                     class="w-full h-[250px] object-cover rounded-xl">

                <div>
                    <h3 class="text-xl font-bold mb-3">
                        Promo Event, Bioskop, & Biaya Komisi Tetap Hemat
                    </h3>
                    <p class="text-gray-600 text-sm mb-3">
                        #PastiBisa beli tiket event, nonton bioskop, dan bikin event kece di LOKET.
                    </p>
                    <span class="text-xs text-gray-400">
                        02 Apr 2026 - Winda Paramita
                    </span>
                </div>

            </div>

            <!-- LIST -->
            <div class="grid md:grid-cols-2 gap-6">

                @foreach (range(1,8) as $item)
                <div class="flex gap-4 bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition">
                    <img src="https://images.unsplash.com/photo-1517602302552-471fe67acf66"
                         class="w-24 h-24 object-cover rounded-lg">
                    <div>
                        <h4 class="font-semibold text-sm">
                            Contoh Judul Artikel Pilihan
                        </h4>
                        <p class="text-xs text-gray-400 mt-2">
                            01 Apr 2026 - Admin
                        </p>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </div>
    <div>
        
    </div>
<div class="flex justify-center mt-10">
    <a href="#"
       class="px-6 py-3 bg-blue-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-blue-500 transition duration-300">
        Lihat Artikel Lainnya
    </a>
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