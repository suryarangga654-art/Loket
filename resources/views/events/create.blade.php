<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Buat Event - LOKÉT</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">

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

    {{-- Form --}}
<div class="max-w-2xl mx-auto px-4 py-10">
            <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm">

                {{-- Upload Banner --}}
                <div class="relative cursor-pointer group" onclick="document.getElementById('banner-input').click()">
                    <div id="banner-preview"
                        class="w-full h-64 bg-gray-300 flex flex-col items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition"></div>
                        <div id="banner-text" class="relative z-10 flex flex-col items-center text-white">
                            <div class="w-12 h-12 rounded-full border-2 border-white flex items-center justify-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                            </div>
                            <p class="text-lg font-semibold">Unggah gambar/poster/banner</p>
                            <p class="text-sm text-gray-200 mt-1">Direkomendasikan 724 x 340px dan tidak lebih dari 2Mb</p>
                        </div>
                    </div>
                    <input id="banner-input" type="file" name="banner" accept="image/*" class="hidden" onchange="previewBanner(event)">
                </div>

                {{-- Form Fields --}}
                <div class="p-8">

                    {{-- Nama Event --}}
                    <input type="text" name="nama_event" placeholder="Nama Event*"
                        class="w-full text-2xl font-semibold text-gray-700 placeholder-gray-300 border-0 border-b border-gray-200 focus:outline-none focus:border-blue-500 pb-3 mb-4 bg-transparent">

                    {{-- Pilih Kategori --}}
                    <select name="kategori"
                        class="w-full text-base text-gray-400 border-0 border-b border-gray-200 focus:outline-none focus:border-blue-500 pb-3 mb-8 bg-transparent appearance-none">
                        <option value="" disabled selected>Pilih Kategori*</option>
                        <option>Festival & Pameran</option>
                        <option>Konser</option>
                        <option>Konferensi</option>
                        <option>Workshop</option>
                        <option>Pertunjukan</option>
                        <option>Atraksi</option>
                        <option>Social Gathering</option>
                        <option>Tur</option>
                        <option>Turnamen</option>
                    </select>

                    {{-- 3 Kolom --}}
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
                            <div class="space-y-3">
                                <div class="flex items-center gap-2 text-blue-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <input type="date" name="tanggal"
                                        class="text-sm text-blue-400 border-0 focus:outline-none bg-transparent w-full">
                                </div>
                                <div class="flex items-center gap-2 text-blue-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <input type="time" name="waktu"
                                        class="text-sm text-blue-400 border-0 focus:outline-none bg-transparent w-full">
                                </div>
                            </div>
                        </div>

                        {{-- Lokasi --}}
                        <div>
                            <p class="text-sm font-semibold text-gray-700 mb-3">Lokasi</p>
                            <div class="flex items-center gap-2 text-blue-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <input type="text" name="lokasi" placeholder="Pilih Lokasi"
                                    class="text-sm text-blue-400 placeholder-blue-400 border-0 focus:outline-none bg-transparent w-full">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

           

        </form>
    </div>

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
    {{-- Section Tiket --}}
{{-- Section Tiket --}}
<div class="max-w-2xl mx-auto px-4 pb-32">
<div class="bg-white rounded-2xl border border-gray-200 shadow-sm mt-6 p-8">
    {{-- Buat Tiket --}}
    <div class="grid grid-cols-3 gap-4 mb-10">
        @foreach([['label' => 'Berbayar'], ['label' => 'Bayar Sesukamu'], ['label' => 'Gratis']] as $tiket)
        <div class="flex items-center justify-between border border-dashed border-gray-300 rounded-xl px-4 py-4">
            <div class="flex items-center gap-3">
                {{-- Icon tiket --}}
                <div class="flex flex-col gap-1">
                    @foreach(range(1,4) as $i)
                    <div class="w-0.5 h-1.5 bg-gray-300 rounded"></div>
                    @endforeach
                </div>
                <div>
                    <p class="text-xs text-blue-500 font-semibold">Buat Tiket</p>
                    <p class="text-base font-bold text-gray-800">{{ $tiket['label'] }}</p>
                </div>
            </div>
            <button type="button" class="w-9 h-9 rounded-full border-2 border-gray-300 flex items-center justify-center text-gray-400 hover:border-blue-400 hover:text-blue-500 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
            </button>
        </div>
        @endforeach
    </div>

    {{-- Info Kontak --}}
    <div class="mb-10">
        <h3 class="text-xl font-bold text-blue-900 mb-1">Info Kontak</h3>
        <p class="text-sm text-blue-400 mb-6">Informasi kontak Event Creator yang dapat dihubungi oleh pembeli.</p>

        <div class="space-y-5">
            <div>
                <label class="text-sm font-semibold text-gray-700 mb-1 block">Nama Narahubung <span class="text-red-500">*</span></label>
                <input type="text" name="nama_narahubung" placeholder="Nama narahubung"
                    class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-blue-400 focus:ring-1 focus:ring-blue-400">
            </div>

            <div>
                <label class="text-sm font-semibold text-gray-700 mb-1 block">Email <span class="text-red-500">*</span></label>
                <input type="email" name="email_kontak" placeholder="Email yang dapat dihubungi"
                    class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-blue-400 focus:ring-1 focus:ring-blue-400">
            </div>

            <div>
                <label class="text-sm font-semibold text-gray-700 mb-1 block">No. Ponsel <span class="text-red-500">*</span></label>
                <div class="flex gap-2">
                    <div class="flex items-center gap-1 px-3 py-3 border border-gray-200 rounded-xl text-sm text-gray-700 cursor-pointer hover:border-blue-400 transition w-28 justify-between">
                        <span>🇮🇩 +62</span>
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>
                    <input type="tel" name="no_ponsel"
                        class="flex-1 px-4 py-3 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-blue-400 focus:ring-1 focus:ring-blue-400">
                </div>
            </div>
        </div>
    </div>

    {{-- Formulir & Pengaturan --}}
    <div class="grid grid-cols-2 gap-10">

        {{-- Formulir Data Pemesan --}}
        <div>
            <h3 class="text-xl font-bold text-blue-900 mb-4">Formulir Data Pemesan</h3>
            <ul class="space-y-2 text-sm text-blue-500 font-medium mb-4">
                @foreach(['Nama Lengkap', 'Email', 'Nomor Handphone', 'Nomor Identitas Diri', 'Tanggal Lahir', 'Jenis Kelamin'] as $field)
                <li class="flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-blue-400 inline-block"></span>
                    {{ $field }}
                </li>
                @endforeach
            </ul>
            <div class="bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-xs text-gray-500 flex items-start gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0 text-gray-400 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span>Kamu dapat menambah <a href="#" class="text-blue-600 font-bold underline">Formulir Data Tambahan</a> di Dashboard event.</span>
            </div>
        </div>

        {{-- Pengaturan Tambahan --}}
        <div>
            <h3 class="text-xl font-bold text-blue-900 mb-4">Pengaturan Tambahan</h3>
            <div class="space-y-6">

                <div class="flex items-start justify-between gap-4">
                    <div>
                        <p class="text-sm font-semibold text-gray-800">Jumlah maks. tiket per transaksi</p>
                        <p class="text-xs text-gray-400 mt-0.5">Jumlah maksimal tiket yang dapat dibeli dalam 1 transaksi</p>
                    </div>
                    <select class="border border-gray-200 rounded-lg px-3 py-2 text-sm text-gray-700 focus:outline-none focus:border-blue-400 shrink-0">
                        @foreach([1,2,3,4,5,10] as $n)
                        <option {{ $n == 5 ? 'selected' : '' }}>{{ $n }} Tiket</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex items-start justify-between gap-4">
                    <div>
                        <p class="text-sm font-semibold text-gray-800">1 akun email - 1 kali transaksi</p>
                        <p class="text-xs text-gray-400 mt-0.5">1 akun email hanya dapat melakukan 1 kali transaksi pembelian tiket.</p>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer shrink-0">
                        <input type="checkbox" name="satu_email" class="sr-only peer">
                        <div class="w-10 h-6 bg-gray-200 peer-checked:bg-blue-500 rounded-full transition peer-focus:outline-none after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:after:translate-x-4"></div>
                    </label>
                </div>

                <div class="flex items-start justify-between gap-4">
                    <div>
                        <p class="text-sm font-semibold text-gray-800">1 tiket - 1 data pemesan</p>
                        <p class="text-xs text-gray-400 mt-0.5">1 tiket hanya dapat digunakan untuk 1 data pemesan, data antar tiket tidak boleh sama.</p>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer shrink-0">
                        <input type="checkbox" name="satu_tiket" class="sr-only peer">
                        <div class="w-10 h-6 bg-gray-200 peer-checked:bg-blue-500 rounded-full transition peer-focus:outline-none after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:after:translate-x-4"></div>
                    </label>
                </div>

            </div>
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
        <button type="button"
            class="px-6 py-2.5 border-2 border-gray-300 text-gray-700 font-bold rounded-xl hover:bg-gray-50 transition text-sm">
            Simpan Draf
        </button>
        <button type="submit"
            class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl shadow transition text-sm">
            Buat Event Sekarang
        </button>
    </div>
</div>

</body>
</html>