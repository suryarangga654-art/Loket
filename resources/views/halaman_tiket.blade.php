<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach($semuaTiket as $t)
        <div class="bg-white rounded shadow p-4 border flex flex-col justify-between">
            <div>
                <h2 class="text-xl font-semibold">{{ $t->nama_tiket }}</h2>
                <p class="text-blue-600 font-bold">Rp {{ number_format($t->harga, 0, ',', '.') }}</p>
                <p class="text-sm text-gray-500">Sisa Stok: {{ $t->stok }}</p>
            </div>

            <div class="mt-4">
                <a href="/daftar-tiket/{{ $t->id }}" 
                   class="inline-block w-full text-center bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded transition">
                    Lihat Detail
                </a>
            </div>
            </div>
    @endforeach
</div>