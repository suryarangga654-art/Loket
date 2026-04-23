<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Saya - Loket Clone</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50 flex">

    <aside class="w-64 bg-[#1a2b4c] min-h-screen text-gray-300 flex flex-col justify-between">
        <div>
           <div class="p-6">
    <a href="{{ url('/') }}" class="hover:opacity-80 transition">
        <h1 class="text-white font-bold text-xl flex items-center">
            LOKET<span class="bg-white text-[#1a2b4c] text-xs px-1 ml-1 rounded">12 Tahun</span>
        </h1>
    </a>
</div>

            <nav class="mt-4">
                <a href="{{ route('jelajah.create')}}" class="flex items-center px-6 py-3 hover:bg-[#253a63] transition">
                    <i class="fa-solid fa-compass mr-3"></i> Jelajah Event
                </a>
    <a href="{{ route('tiket.create') }}" class="flex items-center px-6 py-3 transition {{ request()->routeIs('tiket.create') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-[#253a63]' }}">
        <i class="fa-solid fa-ticket mr-3"></i> Tiket Saya
    </a>

    <div class="px-6 mt-8 mb-2 text-[10px] uppercase font-bold tracking-wider text-gray-500">Akun</div>

    <a href="{{ route('informasi.create') }}" class="flex items-center px-6 py-3 transition {{ request()->routeIs('informasi.create') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-[#253a63]' }}">
        <i class="fa-solid fa-user mr-3 text-sm"></i> Informasi Dasar
    </a>

    <a href="{{ route('pengaturan.create') }}" class="flex items-center px-6 py-3 transition {{ request()->routeIs('pengaturan.create') ? 'bg-blue-600 text-white font-semibold' : 'text-gray-300 hover:bg-[#253a63]' }}">
        <i class="fa-solid fa-gear mr-3 text-sm"></i> Pengaturan
    </a>
    <div class="px-6 mt-8 mb-2 text-[10px] uppercase font-bold tracking-wider text-gray-500">Mode User</div>
                <a href="{{ route('dashboardcreator.create')}}" class="flex items-center px-6 py-3 hover:bg-[#253a63] transition">
                    <i class="fa-solid fa-right-left mr-3 text-sm"></i> Beralih ke Event Creator
                </a>
</nav>
        </div>

        <div class="p-4 border-t border-gray-700 text-sm">
            <button class="flex items-center hover:text-white">
                <i class="fa-solid fa-circle-chevron-left mr-2"></i> Singkat Menu
            </button>
        </div>
    </aside>
        <main class="flex-1 flex flex-col">

        

    <div id="profile-dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white border rounded-lg shadow-lg py-2 z-50">
         <a href="{{ route('jelajah.create')}}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                                </svg>
                                Jelajah Event
                            </a>

                            <a href="{{ route('tiket.create')}}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                                </svg>
                                Tiket Saya
                            </a>
                            <hr>
                            <a href="{{ route('informasi.create')}}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                                </svg>
                                Informasi Dasar
                            </a>
                            <a href="{{ route('pengaturan.create')}}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                                </svg>
                                 Pengaturan                            
                                </a>
        <hr class="my-2 border-gray-100">
        <form action="#" method="POST">
            <button type="submit" class="w-full flex items-center px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                <i class="fa-solid fa-right-from-bracket mr-3"></i> Keluar
            </button>
        </form>
    </div>
</div>
        </div>
    </header>

            <header class="h-16 bg-white border-b flex items-center justify-between px-8 sticky top-0 z-30 shadow-sm">
            <div class="flex items-center gap-8">
                <h2 class="text-lg font-bold text-gray-800 tracking-tight">Tiket Saya</h2>
            </div>
            
            <div class="flex items-center gap-4">
                <button class="flex items-center gap-2 bg-[#b2b9c5] text-white px-4 py-1.5 rounded-lg text-xs font-bold hover:bg-gray-500 transition">
                    <i class="fa-solid fa-calendar-plus"></i>
                    Buat Event
                </button>

                <div class="flex items-center gap-3 bg-[#f1f4f9] px-3 py-1.5 rounded-full border border-gray-100 cursor-pointer hover:bg-gray-200 transition">
                    <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center text-[10px] text-white">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <span class="text-[11px] font-bold text-gray-700 uppercase tracking-tighter">M FAIZAL KUR...</span>
                    <i class="fa-solid fa-chevron-right text-[8px] text-gray-400"></i>
                </div>
            </div>
        </header>

        <main class="max-w-7xl mx-auto p-8">
            <div class="flex items-center gap-2 text-[10px] mb-8 font-bold tracking-tight text-gray-400">
                <span class="bg-gray-100 px-2 py-1 rounded text-gray-500">Kamu di sini</span>
                <span class="ml-2 text-gray-300">Tiket Saya</span>
            </div>

            <div class="border-b border-gray-200 mb-12">
                <div class="flex gap-16">
                    <button class="pb-4 text-sm font-bold text-gray-900 border-b-4 border-blue-600 relative">
                        Event Aktif
                    </button>
                    <button class="pb-4 text-sm font-bold text-gray-400 hover:text-gray-600 transition">
                        Event Lalu
                    </button>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center py-32">
                <div class="mb-6">
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-gray-400 opacity-60">
                        <path d="M15 5H9C4 5 2 7 2 12C2 17 4 19 9 19H15C20 19 22 17 22 12C22 7 20 5 15 5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9 13.5C10.1046 13.5 11 12.6046 11 11.5C11 10.3954 10.1046 9.5 9 9.5C7.89543 9.5 7 10.3954 7 11.5C7 12.6046 7.89543 13.5 9 13.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.99 12H15.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.99 12H18.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                <h3 class="text-gray-500 text-sm font-medium text-center mb-2">
                    Kamu belum memiliki tiket, silakan membeli tiket terlebih dahulu.
                </h3>
                
                <a href="/" class="text-blue-600 text-sm font-bold hover:underline transition">
                    Cari Event Sekarang
                </a>
            </div>
        </main>
    </main>
</html>
<script>
    const profileButton = document.getElementById('profile-button');
    const profileDropdown = document.getElementById('profile-dropdown');
    const dropdownIcon = document.getElementById('dropdown-icon');

    profileButton.addEventListener('click', function(e) {
        e.stopPropagation();
        profileDropdown.classList.toggle('hidden');
        // Bonus: icon panah berputar saat diklik
        dropdownIcon.classList.toggle('rotate-180');
    });

    // Menutup dropdown jika klik di luar area profil
    window.addEventListener('click', function() {
        if (!profileDropdown.classList.contains('hidden')) {
            profileDropdown.classList.add('hidden');
            dropdownIcon.classList.remove('rotate-180');
        }
    });
</script>
</body>