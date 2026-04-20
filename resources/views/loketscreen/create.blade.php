<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOKET X - Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-white antialiased">

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

    <header class="py-14 text-center">
        <div class="flex flex-col items-center gap-2">
            <div class="text-6xl mb-2">📑🔍</div>
            <h1 class="text-4xl md:text-5xl font-[900] text-[#00173D] tracking-tighter uppercase">
                LOKET SCREEN
            </h1>
        </div>
    </header>

    <main class="max-w-4xl mx-auto px-6 pb-20">
        <div class="space-y-12">
            
            @php
                $posts = [
                    ['title' => 'How to Claim Event Tickets with Ticket Transfer on LOKET X', 'lang' => 'EN'],
                    ['title' => 'Cara Terima Tiket Event Pakai Transfer Tiket di LOKET X', 'lang' => 'ID'],
                    ['title' => 'How to Send Tickets with the Ticket Transfer on LOKET X', 'lang' => 'EN'],
                    ['title' => 'Cara Kirim Tiket Event Pakai Transfer Tiket di LOKET X', 'lang' => 'ID'],
                    ['title' => 'Ticket Transfer on LOKET X, a Safe Way to Share the Fun', 'lang' => 'EN'],
                    ['title' => 'Ticket Transfer on LOKET X, a Safe Way to Share the Fun', 'lang' => 'EN'],
                    ['title' => 'Ticket Transfer on LOKET X, a Safe Way to Share the Fun', 'lang' => 'EN'],
                    ['title' => 'Ticket Transfer on LOKET X, a Safe Way to Share the Fun', 'lang' => 'EN'],
                    ['title' => 'Ticket Transfer on LOKET X, a Safe Way to Share the Fun', 'lang' => 'EN'],
                ];
            @endphp

            @foreach($posts as $post)
            <article class="flex flex-col md:flex-row gap-6 group cursor-pointer">
                <div class="w-full md:w-64 flex-shrink-0 overflow-hidden rounded-xl border border-slate-100 shadow-sm">
                                    <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da" alt="thumb" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>

                <div class="flex-1">
                    <h2 class="text-[22px] font-extrabold text-[#00173D] leading-tight mb-2 group-hover:text-blue-600 transition">
                        {{ $post['title'] }}
                    </h2>
                    <p class="text-slate-500 text-[15px] mb-3 line-clamp-2 font-medium">
                        {{ $post['lang'] == 'ID' 
                            ? 'Gak ribet! Ikuti semua caranya di sini & kamu bisa terima tiket event favorit!' 
                            : 'No hassle! Follow these steps and receive your favorite event tickets easily!' }}
                    </p>
                    <div class="flex items-center text-[13px] text-slate-400 font-semibold uppercase tracking-wider">
                        <span>17 Nov 2025</span>
                        <span class="mx-2 text-slate-300">—</span>
                        <span>Nandita Alfahira</span>
                    </div>
                </div>
            </article>
            @endforeach

        </div>
    </main>
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


</body>
</html>