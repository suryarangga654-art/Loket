<x-app-layout>
    <x-slot name="title">Pusat Bantuan - LOKET</x-slot>

    <nav class="bg-white border-b border-gray-100 py-4 px-6">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="/" class="flex items-center gap-1 shrink-0">
            <span class="text-2xl font-black italic tracking-tight">LOKET</span>
            <div class="flex flex-col leading-none ml-1">
                <span class="text-orange-400 font-black text-2xl leading-none">12</span>
                <span class="text-[10px] font-semibold text-blue-200 leading-none">Tahun</span>
            </div>
        </a>

            <div class="flex items-center gap-2 bg-gray-50 px-3 py-1.5 rounded-full border border-gray-200 cursor-pointer hover:bg-gray-100">
                <span class="text-lg">🇮🇩</span>
                <span class="text-sm font-semibold text-gray-700">ID</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
        </div>
    </nav>

    <section class="relative bg-[#1A2C50] overflow-hidden min-h-[400px] flex items-center">
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 1440 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 200C240 100 480 300 720 200C960 100 1200 300 1440 200V400H0V200Z" fill="white"/>
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 items-center relative z-10 w-full">
            <div class="text-white">
                <h1 class="text-3xl md:text-5xl font-bold leading-tight">
                    Hai kamu, ada yang bisa kami bantu?
                </h1>
            </div>

            <div class="flex justify-end mt-8 md:mt-0">
                <div class="relative w-full max-w-[450px]">
                    <img src="https://www.loket.com/images/help-center-hero.png" 
                         alt="Help Center Illustration" 
                         class="w-full h-auto drop-shadow-2xl"
                         onerror="this.src='https://illustrations.popsy.co/white/customer-support.svg'">
                    
                    <div class="hidden">
                        <div class="bg-blue-400 w-32 h-32 rounded-3xl absolute bottom-0 right-10 flex items-center justify-center text-4xl shadow-lg">🤖</div>
                        <div class="bg-orange-400 w-20 h-20 rounded-full absolute top-10 right-0 flex items-center justify-center text-2xl shadow-lg">😊</div>
                        <div class="bg-yellow-400 w-24 h-24 rounded-full absolute top-0 right-32 flex items-center justify-center text-3xl shadow-lg">😎</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
    <section class="max-w-5xl mx-auto px-6 py-12">
    
    <div class="flex justify-center border-b border-gray-200 mb-12">
        <button class="px-8 py-4 border-b-4 border-blue-600 text-blue-600 font-bold flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            Pembeli Tiket
        </button>
        <button class="px-8 py-4 text-gray-400 font-bold flex items-center gap-2 hover:text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
            </svg>
            Pembuat Event
        </button>
    </div>

    <div class="max-w-3xl mx-auto space-y-4 relative">
        <div class="absolute -left-40 top-10 hidden lg:block animate-bounce opacity-70">
            <div class="bg-blue-100 p-4 rounded-2xl rounded-bl-none shadow-sm text-2xl">❓</div>
        </div>

        <div class="group border border-gray-200 rounded-xl bg-white hover:border-blue-300 transition-all cursor-pointer">
            <div class="p-6 flex items-center gap-4">
                <span class="text-xl font-light text-gray-400">+</span>
                <span class="font-bold text-gray-800">Pembelian Tiket</span>
            </div>
        </div>

        <div class="group border border-gray-200 rounded-xl bg-white hover:border-blue-300 transition-all cursor-pointer">
            <div class="p-6 flex items-center gap-4">
                <span class="text-xl font-light text-gray-400">+</span>
                <span class="font-bold text-gray-800">Bantuan Akun & Loket X</span>
            </div>
        </div>

        <div class="group border border-gray-200 rounded-xl bg-white hover:border-blue-300 transition-all cursor-pointer">
            <div class="p-6 flex items-center gap-4">
                <span class="text-xl font-light text-gray-400">+</span>
                <span class="font-bold text-gray-800">Refund</span>
            </div>
        </div>

        <div class="absolute -right-40 bottom-0 hidden lg:block animate-bounce delay-700 opacity-70">
            <div class="bg-blue-100 p-4 rounded-2xl rounded-br-none shadow-sm text-2xl">❓</div>
        </div>
    </div>
</section>

<footer class="bg-gray-50 pt-16 pb-12 border-t border-gray-100 mt-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            
            <div class="space-y-4">
                <div class="text-[#00173D] font-black text-2xl italic tracking-tighter flex items-center gap-1">
                    <div class="w-6 h-6 bg-[#00173D] rounded-sm relative">
                        <div class="absolute inset-1 bg-white rounded-sm"></div>
                        <div class="absolute inset-2 bg-[#00173D] rounded-sm"></div>
                    </div>
                    LOKET
                </div>
                <p class="text-xs text-gray-400">© 2026 LOKÉT. All right reserved</p>
            </div>

            <div>
                <h5 class="font-bold text-gray-800 mb-4 text-sm">helpdesk</h5>
                <ul class="text-sm text-gray-500 space-y-3 font-medium">
                    <li><a href="#" class="hover:text-blue-600">Syarat dan Ketentuan</a></li>
                    <li><a href="#" class="hover:text-blue-600">Kebijakan Privasi</a></li>
                    <li><a href="#" class="hover:text-blue-600">Kebijakan Cookie</a></li>
                </ul>
            </div>

            <div>
                <h5 class="font-bold text-gray-800 mb-4 text-sm">Customer Support</h5>
                <ul class="text-sm text-gray-500 space-y-3 font-medium">
                    <li class="flex items-center gap-2">
                        <span>📞</span> +62 21 3000 3160
                    </li>
                    <li class="flex items-center gap-2">
                        <span>✉️</span> support@loket.com
                    </li>
                </ul>
            </div>

            <div>
                <h5 class="font-bold text-gray-800 mb-4 text-sm">Akses Tiket Lebih Mudah</h5>
                <div class="space-y-3">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Playstore" class="h-10 cursor-pointer">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg" alt="Appstore" class="h-10 cursor-pointer">
                </div>
            </div>

        </div>
    </div>
</footer>

<div class="fixed bottom-6 right-6 z-50">
    <div class="bg-blue-600 w-14 h-14 rounded-full flex items-center justify-center shadow-lg cursor-pointer hover:bg-blue-700 transition">
        <span class="text-2xl">💬</span>
    </div>
</div>
</x-app-layout>