<x-app-layout>
    <div class="bg-gray-100 min-h-screen pb-20">
        <div class="max-w-4xl mx-auto px-4 py-8">
            
            {{-- Tombol Kembali --}}
            <a href="{{ route('jelajah.create') }}" class="text-blue-600 font-semibold mb-4 inline-block">
                ← Kembali ke Jelajah
            </a>

            <div class="bg-white rounded-3xl shadow-sm overflow-hidden">
                {{-- Banner Event --}}
                <img src="{{ asset('storage/' . $event->gambar) }}" class="w-full h-80 object-cover">

                <div class="p-8">
                    <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $event->judul_event }}</h1>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <p class="text-gray-500 text-sm">Lokasi</p>
                            <p class="font-semibold text-lg">{{ $event->lokasi }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Tanggal</p>
                            <p class="font-semibold text-lg">
                                {{ \Carbon\Carbon::parse($event->tanggal)->format('d F Y') }}
                            </p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Kategori</p>
                            <span class="inline-block bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium mt-1">
                                {{ ucfirst($event->kategori) }}
                            </span>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Harga Tiket</p>
                            <p class="text-2xl font-bold text-blue-900">
                                Rp {{ number_format($event->harga, 0, ',', '.') }}
                            </p>
                        </div>
                    </div>

                    <div class="mt-8 pt-8 border-t border-gray-100">
                        <button class="w-full bg-blue-600 text-white py-4 rounded-xl font-bold text-lg hover:bg-blue-700 transition">
                            Beli Tiket Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>