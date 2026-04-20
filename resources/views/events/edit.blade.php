<div class="max-w-3xl mx-auto px-6 py-10">
    <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm">

            {{-- Upload Banner --}}
            <div class="relative cursor-pointer group" onclick="document.getElementById('banner-input').click()">
                {{-- Background Pattern --}}
                <div id="banner-preview"
                    class="w-full h-64 bg-gray-300 flex flex-col items-center justify-center relative overflow-hidden"
                    style="background-image: url('https://placehold.co/724x340/cccccc/999999?text='); background-size: cover;">

                    {{-- Overlay saat hover --}}
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition"></div>

                    {{-- Icon + Teks --}}
                    <div class="relative z-10 flex flex-col items-center text-white">
                        <div class="w-12 h-12 rounded-full border-2 border-white flex items-center justify-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                        </div>
                        <p class="text-lg font-semibold">Unggah gambar/poster/banner</p>
                        <p class="text-sm text-gray-200 mt-1">Direkomendasikan 724 x 340px dan tidak lebih dari 2Mb</p>
                    </div>
                </div>

                <input id="banner-input" type="file" name="banner" accept="image/*" class="hidden"
                    onchange="previewBanner(event)">
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
                                    class="text-sm text-blue-400 placeholder-blue-300 border-0 focus:outline-none bg-transparent w-full">
                            </div>
                            <div class="flex items-center gap-2 text-blue-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <input type="time" name="waktu"
                                    class="text-sm text-blue-400 placeholder-blue-300 border-0 focus:outline-none bg-transparent w-full">
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

        {{-- Tombol Submit --}}
        <div class="flex justify-end mt-6">
            <button type="submit"
                class="px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl shadow transition">
                Lanjutkan
            </button>
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
            // Sembunyikan teks saat gambar sudah dipilih
            preview.querySelector('.z-10').style.display = 'none';
        }
        reader.readAsDataURL(file);
    }
}
</script>