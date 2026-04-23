<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Tambah Event</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-3xl mx-auto py-12 px-4">
        <div class="bg-white rounded-2xl shadow-sm p-8 border border-gray-200">
            <h1 class="text-2xl font-black uppercase italic mb-6">Tambah Event Baru</h1>

            @if(session('success'))
                <div class="bg-green-500 text-white p-4 rounded-xl mb-6 font-bold text-center">
                    ✅ {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                
                <div>
                    <label class="block text-xs font-bold uppercase text-gray-500 mb-1">Judul Event</label>
                    <input type="text" name="judul_event" required 
                           class="w-full border-gray-300 border rounded-lg p-3 focus:ring-blue-500 focus:border-blue-500" 
                           placeholder="Contoh: Konser Musik Pop">
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase text-gray-500 mb-1">Poster Event</label>
                    <label for="gambar" class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer hover:border-blue-400 hover:bg-blue-50 transition">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-gray-600 justify-center">
                                <span class="relative font-medium text-blue-600">Klik untuk upload gambar</span>
                                <input id="gambar" type="file" name="gambar" class="sr-only" required onchange="tampilNama(this)">
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, JPEG (Max 2MB)</p>
                            <p id="nama-file" class="text-sm text-blue-700 font-bold mt-2 italic"></p>
                        </div>
                    </label>
                </div>

                <button type="submit" class="w-full bg-blue-700 hover:bg-blue-800 text-white font-black uppercase italic py-4 rounded-xl shadow-lg transition active:scale-95">
                    Simpan Event & Gambar
                </button>
            </form>
        </div>
    </div>

    <script>
        function tampilNama(input) {
            const label = document.getElementById('nama-file');
            if (input.files && input.files[0]) {
                label.textContent = "File terpilih: " + input.files[0].name;
            }
        }
    </script>
</body>
</html>