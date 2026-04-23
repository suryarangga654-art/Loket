<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Buat Event - LOKÉT</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

    {{-- Form Start --}}
    {{-- PENTING: Tag Form harus membungkus seluruh halaman sampai ke tombol paling bawah --}}
    <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data">
        @csrf

        {{-- Navbar --}}
        <nav class="bg-white border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
                <a href="/" class="flex items-center gap-2">
                    <svg class="w-7 h-7 text-blue-900" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M3 3h8v8H3V3zm0 10h8v8H3v-8zm10-10h8v8h-8V3zm0 10h2v2h-2v-2zm4 0h4v2h-4v-2zm-4 4h2v4h-2v-4zm4-2h4v6h-4v-6z"/>
                    </svg>
                    <span class="text-blue-900 font-black text-xl tracking-tight">LOKÉT</span>
                </a>
                <a href="#" class="text-xs font-bold text-yellow-700 tracking-widest uppercase hover:text-yellow-600 transition">
                    Bantuan
                </a>
            </div>
        </nav>

        {{-- Form Content --}}
        <div class="max-w-2xl mx-auto px-4 py-10">
            
            {{-- Notifikasi Sukses --}}
            @if(session('success'))
                <div class="bg-green-500 text-white p-4 rounded-xl mb-6 font-bold text-center">
                    ✅ {{ session('success') }}
                </div>
            @endif

            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm">

                {{-- Upload Banner --}}
                <div class="relative cursor-pointer group" onclick="document.getElementById('banner-input').click()">
                    <div id="banner-preview"
                        class="w-full h-64 bg-gray-300 flex flex-col items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition"></div>
                        <div id="banner-text" class="relative z-10 flex flex-col items-center text-white text-center px-4">
                            <div class="w-12 h-12 rounded-full border-2 border-white flex items-center justify-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                            </div>
                            <p class="text-lg font-semibold">Unggah gambar/poster/banner</p>
                            <p class="text-sm text-gray-200 mt-1">Direkomendasikan 724 x 340px dan tidak lebih dari 2Mb</p>
                        </div>
                    </div>
                    {{-- Input Banner --}}
                    <input id="banner-input" type="file" name="banner" accept="image/*" class="hidden" required onchange="previewBanner(event)">
                </div>

                {{-- Form Fields --}}
                <div class="p-8">

                    {{-- Nama Event --}}
                    <input type="text" name="nama_event" placeholder="Nama Event*" required
                        class="w-full text-2xl font-semibold text-gray-700 placeholder-gray-300 border-0 border-b border-gray-200 focus:outline-none focus:border-blue-500 pb-3 mb-4 bg-transparent">

                    {{-- Pilih Kategori --}}
                    <select name="kategori" required
                        class="w-full text-base text-gray-400 border-0 border-b border-gray-200 focus:outline-none focus:border-blue-500 pb-3 mb-8 bg-transparent appearance-none">
                        <option value="" disabled selected>Pilih Kategori*</option>
                        <option>Festival & Pameran</option>
                        <option>Konser</option>
                        <option>Konferensi</option>
                        <option>Workshop</option>
                    </select>

                    <div class="grid grid-cols-3 gap-8">
                        {{-- Diselenggarakan Oleh --}}
                        <div>
                            <p class="text-sm font-semibold text-gray-700 mb-3">Diselenggarakan Oleh</p>
                            <button type="button" onclick="document.getElementById('logo-input').click()"
                                class="w-12 h-12 rounded-full border-2 border-gray-300 flex items-center justify-center hover:border-blue-400 hover:text-blue-400 transition text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                                </svg>
                            </button>
                            <input id="logo-input" type="file" name="logo_organizer" accept="image/*" class="hidden">
                        </div>

                        {{-- Tanggal & Waktu --}}
                        <div>
                            <p class="text-sm font-semibold text-gray-700 mb-3">Tanggal & Waktu</p>
                            <div class="space-y-3 text-blue-400">
                                <div class="flex items-center gap-2">
                                    <input type="date" name="tanggal" required class="text-sm border-0 focus:outline-none bg-transparent w-full">
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="time" name="waktu" required class="text-sm border-0 focus:outline-none bg-transparent w-full">
                                </div>
                            </div>
                        </div>

                        {{-- Lokasi --}}
                        <div>
                            <p class="text-sm font-semibold text-gray-700 mb-3">Lokasi</p>
                            <input type="text" name="lokasi" placeholder="Pilih Lokasi" required
                                class="text-sm text-blue-400 placeholder-blue-400 border-0 focus:outline-none bg-transparent w-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Section Tiket --}}
        <div class="max-w-2xl mx-auto px-4 pb-32">
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-8">
                <h3 class="text-xl font-bold text-blue-900 mb-6">Info Kontak</h3>
                <div class="space-y-5">
                    <div>
                        <label class="text-sm font-semibold text-gray-700 mb-1 block">Nama Narahubung <span class="text-red-500">*</span></label>
                        <input type="text" name="nama_narahubung" placeholder="Nama narahubung" required
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-blue-400">
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-gray-700 mb-1 block">Email <span class="text-red-500">*</span></label>
                        <input type="email" name="email_kontak" placeholder="Email" required
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-blue-400">
                    </div>
                </div>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 px-8 py-4 flex items-center justify-between z-50">
            <p class="text-sm text-gray-600">
                <span class="font-black text-gray-800">Yeay!</span> Tinggal selangkah lagi dan event kamu berhasil dibuat.
            </p>
            <div class="flex gap-3">
                <button type="button" class="px-6 py-2.5 border-2 border-gray-300 text-gray-700 font-bold rounded-xl hover:bg-gray-50 transition text-sm">
                    Simpan Draf
                </button>
                {{-- Tombol Submit --}}
                <button type="submit" class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl shadow transition text-sm">
                    Buat Event Sekarang
                </button>
            </div>
        </div>
    </form>

    <script>
    function previewBanner(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('banner-preview');
                preview.style.backgroundImage = `url('${e.target.result}')`;
                preview.style.backgroundSize = 'cover';
                preview.style.backgroundPosition = 'center';
                document.getElementById('banner-text').style.display = 'none';
            }
            reader.readAsDataURL(file);
        }
    }
    </script>
</body>
</html>