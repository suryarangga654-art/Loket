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
    <a href="{{ route('jelajah.create') }}" 
       class="flex items-center px-6 py-3 transition {{ request()->routeIs('jelajah.create') ? 'bg-blue-600 text-white font-semibold' : 'text-gray-300 hover:bg-[#253a63]' }}">
        <i class="fa-solid fa-compass mr-3"></i> Jelajah Event
    </a>

    <a href="{{ route('tiket.create') }}" 
       class="flex items-center px-6 py-3 transition {{ request()->routeIs('tiket.create') ? 'bg-blue-600 text-white font-semibold' : 'text-gray-300 hover:bg-[#253a63]' }}">
        <i class="fa-solid fa-ticket mr-3"></i> Tiket Saya
    </a>

    <div class="px-6 mt-8 mb-2 text-[10px] uppercase font-bold tracking-wider text-gray-500">Akun</div>

    <a href="{{ route('informasi.create') }}" 
       class="flex items-center px-6 py-3 transition {{ request()->routeIs('informasi.create') ? 'bg-blue-600 text-white font-semibold' : 'text-gray-300 hover:bg-[#253a63]' }}">
        <i class="fa-solid fa-user mr-3 text-sm"></i> Informasi Dasar
    </a>

    <a href="{{ route('pengaturan.create')}}" class="flex items-center px-6 py-3 hover:bg-[#253a63] transition text-gray-300">
        <i class="fa-solid fa-gear mr-3 text-sm"></i> Pengaturan
    </a>
     <div class="px-6 mt-8 mb-2 text-[10px] uppercase font-bold tracking-wider text-gray-500">Mode User</div>
                <a href="{{ route('kelola-akses.create')}}" class="flex items-center px-6 py-3 hover:bg-[#253a63] transition">
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

<main class="flex-1 flex flex-col h-screen overflow-y-auto bg-white">
    
    <header class="h-16 bg-white border-b flex items-center justify-between px-8 sticky top-0 z-10">
        <h2 class="text-xl font-bold text-gray-800">Profil Kamu</h2>
        <div class="flex items-center space-x-4">
            <button class="bg-[#94a3b8] text-white px-4 py-2 rounded-md flex items-center text-sm font-medium">
                <i class="fa-solid fa-calendar-plus mr-2"></i> Buat Event
            </button>
           <div class="relative">
    <div id="profile-button" class="flex items-center bg-gray-100 px-3 py-1.5 rounded-full border cursor-pointer hover:bg-gray-200 transition">
        <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center text-[10px] text-white mr-2">
            <i class="fa-solid fa-user"></i>
        </div>
        <span class="text-sm font-medium text-gray-700">M FAIZAL KUR...</span>
        <i id="dropdown-icon" class="fa-solid fa-chevron-down text-[10px] ml-2 text-gray-400 transition-transform duration-200"></i>
    </div>

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

    <div class="p-8 max-w-5xl">
        <nav class="flex items-center text-xs text-gray-400 mb-8 space-x-2">
            <span class="bg-gray-100 px-2 py-1 rounded text-gray-500">Kamu di sini</span>
            <span class="text-blue-500">Akun</span>
        </nav>

        <h3 class="text-lg font-bold text-gray-800 border-b pb-4 mb-8">Informasi Personal</h3>

        <form action="#" method="POST" class="space-y-8">
            
            <div class="flex items-start space-x-8">
                <div class="flex-shrink-0">
                    <p class="text-sm font-bold text-gray-700 mb-1">Gambar Profile</p>
                    <p class="text-xs text-gray-500 mb-4">Avatar dan foto sampul adalah gambar pertama yang akan dilihat di akun profilmu.</p>
                    <div class="relative inline-block">
                        <img src="https://via.placeholder.com/100" alt="Avatar" class="w-24 h-24 rounded-full bg-orange-100 object-cover border-2 border-orange-200">
                    </div>
                </div>
                <div class="pt-8">
                    <p class="text-sm font-bold text-gray-700">Avatar</p>
                    <p class="text-xs text-gray-400">Gunakan gambar persegi beresolusi tinggi maksimal 1MB</p>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-y-6 max-w-3xl">
                
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Email</label>
                    <input type="email" value="suryarangga654@gmail.com" class="w-full border-b border-gray-300 py-2 focus:border-blue-500 outline-none text-gray-700 transition" readonly>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Nomor Ponsel <span class="text-red-500">*</span></label>
                    <div class="flex items-center border-b border-gray-300 focus-within:border-blue-500 transition">
                        <div class="flex items-center space-x-2 pr-4 py-2 cursor-pointer">
                            <img src="https://flagcdn.com/w20/id.png" alt="ID" class="w-5">
                            <span class="text-gray-700">+62</span>
                            <i class="fa-solid fa-sort-down text-[10px] pb-1 text-gray-400"></i>
                        </div>
                        <input type="text" value="8979136118" class="flex-1 py-2 outline-none text-gray-700">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Nama Depan <span class="text-red-500">*</span></label>
                    <input type="text" value="M FAIZAL KURNIAWAN" class="w-full border-b border-gray-300 py-2 focus:border-blue-500 outline-none text-gray-700 transition uppercase">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Nama Belakang</label>
                    <input type="text" value="PUTRA" class="w-full border-b border-gray-300 py-2 focus:border-blue-500 outline-none text-gray-700 transition uppercase">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Tanggal Lahir <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <input type="text" value="2009-02-09" class="w-full border-b border-gray-300 py-2 focus:border-blue-500 outline-none text-gray-700 transition">
                        <i class="fa-regular fa-calendar absolute right-2 top-3 text-gray-400"></i>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-3">Jenis Kelamin <span class="text-red-500">*</span></label>
                    <div class="flex items-center space-x-6">
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" name="gender" value="Laki-laki" class="hidden peer" checked>
                            <div class="w-5 h-5 border-2 border-gray-300 rounded-full flex items-center justify-center peer-checked:border-orange-500 transition">
                                <div class="w-2.5 h-2.5 bg-orange-500 rounded-full scale-0 peer-checked:scale-100 transition"></div>
                            </div>
                            <span class="ml-2 text-sm text-gray-700">Laki - laki</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" name="gender" value="Perempuan" class="hidden peer">
                            <div class="w-5 h-5 border-2 border-gray-300 rounded-full flex items-center justify-center peer-checked:border-orange-500 transition">
                                <div class="w-2.5 h-2.5 bg-orange-500 rounded-full scale-0 peer-checked:scale-100 transition"></div>
                            </div>
                            <span class="ml-2 text-sm text-gray-700">Perempuan</span>
                        </label>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="mt-auto bg-gray-50 p-6 border-t flex justify-end">
        <button class="bg-blue-600 text-white px-10 py-2.5 rounded-lg font-bold hover:bg-blue-700 transition shadow-md">
            Simpan
        </button>
    </div>
</main>
<script>
    // Pastikan DOM sudah siap
    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('nav a');

        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                // 1. Ambil href-nya
                const href = this.getAttribute('href');

                // 2. Jika href-nya cuma "#", cegah loncat ke atas
                if (href === '#' || href === '') {
                    e.preventDefault();
                }

                // 3. Bersihkan semua warna biru dari menu lain
                navLinks.forEach(l => {
                    // Hapus class active
                    l.classList.remove('bg-blue-600', 'text-white', 'font-semibold');
                    // Kembalikan ke warna standar
                    l.classList.add('text-gray-300', 'hover:bg-[#253a63]');
                });

                // 4. Pasang warna biru ke yang baru diklik
                this.classList.add('bg-blue-600', 'text-white', 'font-semibold');
                this.classList.remove('text-gray-300', 'hover:bg-[#253a63]');
            });
        });
    });
</script>
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