<x-app-layout>
    <div class="bg-gray-100 min-h-screen pb-20">
        
        <div class="max-w-7xl mx-auto px-4 py-8">

            {{-- FLEX UTAMA --}}
            <div class="flex flex-col md:flex-row gap-6">

                {{-- SIDEBAR FILTER --}}
                <div class="w-56 shrink-0">
                    <form action="{{ route('jelajah.create') }}" method="GET" id="filterForm">
                        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-5 sticky top-6">
                            
                            {{-- Header --}}
                            <div class="flex items-center justify-between mb-5">
                                <h2 class="text-lg font-bold text-gray-800">Filter</h2>
                                <a href="{{ route('jelajah.create') }}" 
                                   class="text-blue-500 hover:text-blue-700 transition">
                                    🔄
                                </a>
                            </div>

                            {{-- Lokasi --}}
                            <div class="py-3 border-t">
                                <label class="text-sm font-semibold text-gray-700 mb-2 block">Lokasi</label>
                                <select name="lokasi" onchange="this.form.submit()"
                                    class="w-full rounded-lg border-gray-300 text-sm focus:ring-blue-500 focus:border-blue-500">
                                    <option value="">Semua Lokasi</option>
                                    @foreach(['Jakarta', 'Bandung', 'Surabaya', 'Bali', 'Yogyakarta'] as $kota)
                                        <option value="{{ $kota }}" 
                                            {{ request('lokasi') == $kota ? 'selected' : '' }}>
                                            {{ $kota }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Tipe Event --}}
                            <div class="py-3 border-t">
                                <label class="text-sm font-semibold text-gray-700 mb-2 block">Tipe Event</label>
                                <select name="tipe" onchange="this.form.submit()"
                                    class="w-full rounded-lg border-gray-300 text-sm focus:ring-blue-500 focus:border-blue-500">
                                    <option value="">Semua Tipe</option>
                                    <option value="online" {{ request('tipe') == 'online' ? 'selected' : '' }}>Online</option>
                                    <option value="offline" {{ request('tipe') == 'offline' ? 'selected' : '' }}>Offline</option>
                                    <option value="hybrid" {{ request('tipe') == 'hybrid' ? 'selected' : '' }}>Hybrid</option>
                                </select>
                            </div>

                            {{-- Kategori Event --}}
                            <div class="py-3 border-t">
                                <label class="text-sm font-semibold text-gray-700 mb-2 block">Kategori</label>
                                <select name="kategori" onchange="this.form.submit()"
                                    class="w-full rounded-lg border-gray-300 text-sm focus:ring-blue-500 focus:border-blue-500">
                                    <option value="">Semua Kategori</option>
                                    <option value="seminar" {{ request('kategori') == 'seminar' ? 'selected' : '' }}>Seminar</option>
                                    <option value="workshop" {{ request('kategori') == 'workshop' ? 'selected' : '' }}>Workshop</option>
                                    <option value="konser" {{ request('kategori') == 'konser' ? 'selected' : '' }}>Konser</option>
                                    <option value="festival" {{ request('kategori') == 'festival' ? 'selected' : '' }}>Festival</option>
                                </select>
                            </div>

                            {{-- Waktu --}}
                            <div class="py-3 border-t">
                                <label class="text-sm font-semibold text-gray-700 mb-2 block">Waktu</label>
                                <select name="waktu" onchange="this.form.submit()"
                                    class="w-full rounded-lg border-gray-300 text-sm focus:ring-blue-500 focus:border-blue-500">
                                    <option value="">Semua Waktu</option>
                                    <option value="hari_ini" {{ request('waktu') == 'hari_ini' ? 'selected' : '' }}>Hari Ini</option>
                                    <option value="minggu_ini" {{ request('waktu') == 'minggu_ini' ? 'selected' : '' }}>Minggu Ini</option>
                                    <option value="bulan_ini" {{ request('waktu') == 'bulan_ini' ? 'selected' : '' }}>Bulan Ini</option>
                                </select>
                            </div>

                        </div>
                    </form>
                </div>

                {{-- KONTEN UTAMA --}}
                <div class="flex-1">

                    {{-- Header --}}
                    <div class="flex items-center justify-between mb-5">
                        <p class="text-sm text-gray-600">
                            Menampilkan <span class="font-bold">1 - {{ $semuaEvent->count() }}</span> 
                            Dari Total <span class="font-bold">{{ $semuaEvent->count() }}</span> Event
                        </p>

                        <select class="border border-gray-200 rounded-lg px-3 py-2 text-sm bg-white">
                            <option>Terbaru</option>
                            <option>Harga Terendah</option>
                        </select>
                    </div>

                    {{-- GRID --}}
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        @foreach($semuaEvent as $event)
                        <a href="{{ route('eventsshow.show', $event->id) }}" 
                           class="bg-white rounded-2xl border shadow-sm overflow-hidden hover:shadow-md block">

                            <img src="{{ asset('storage/' . $event->gambar) }}" 
                                 class="w-full h-36 object-cover">

                            <div class="p-3">
                                <h3 class="text-xs font-bold line-clamp-2">
                                    {{ $event->judul_event }}
                                </h3>

                                <p class="text-[11px] text-gray-400">
                                    {{ $event->tanggal 
                                        ? \Carbon\Carbon::parse($event->tanggal)->format('d M Y') 
                                        : '-' }}
                                </p>

                                <p class="font-bold text-blue-900">
                                    Rp {{ number_format($event->harga, 0, ',', '.') }}
                                </p>
                            </div>

                        </a>
                        @endforeach
                    </div>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>