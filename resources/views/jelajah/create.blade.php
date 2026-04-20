<x-app-layout>

<div class="bg-gray-100 min-h-screen pb-20">

       {{-- Konten Jelajah Event --}}
        <div class="max-w-7xl mx-auto px-4 py-8">
            <div class="flex gap-6">

                {{-- Sidebar Filter --}}
                <div class="w-56 shrink-0">
                    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-5 sticky top-6">

                        <div class="flex items-center justify-between mb-5">
                            <h2 class="text-lg font-bold text-gray-800">Filter</h2>
                            <button class="text-blue-500 hover:text-blue-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                                </svg>
                            </button>
                        </div>

                        {{-- Event Online --}}
                        <div class="py-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-sm font-semibold text-gray-700">Event Online</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer">
                                <div class="w-10 h-6 bg-gray-200 peer-checked:bg-blue-500 rounded-full transition after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:after:translate-x-4"></div>
                            </label>
                        </div>

                        {{-- Lokasi --}}
                        <div class="py-4 border-t border-gray-100" x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center justify-between w-full text-sm font-semibold text-gray-700">
                                Lokasi
                                <svg class="w-4 h-4 text-gray-400 transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div x-show="open" class="mt-3 space-y-2">
                                @foreach(['Jakarta', 'Bandung', 'Surabaya', 'Bali', 'Yogyakarta'] as $kota)
                                <label class="flex items-center gap-2 text-sm text-gray-600 cursor-pointer hover:text-blue-600">
                                    <input type="checkbox" class="rounded border-gray-300 text-blue-500 focus:ring-blue-400">
                                    {{ $kota }}
                                </label>
                                @endforeach
                            </div>
                        </div>

                        {{-- Tipe Event --}}
                        <div class="py-4 border-t border-gray-100" x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center justify-between w-full text-sm font-semibold text-gray-700">
                                Tipe Event
                                <svg class="w-4 h-4 text-gray-400 transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div x-show="open" class="mt-3 space-y-2">
                                @foreach(['Online', 'Offline', 'Hybrid'] as $tipe)
                                <label class="flex items-center gap-2 text-sm text-gray-600 cursor-pointer hover:text-blue-600">
                                    <input type="checkbox" class="rounded border-gray-300 text-blue-500 focus:ring-blue-400">
                                    {{ $tipe }}
                                </label>
                                @endforeach
                            </div>
                        </div>

                        {{-- Kategori Event --}}
                        <div class="py-4 border-t border-gray-100" x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center justify-between w-full text-sm font-semibold text-gray-700">
                                Kategori Event
                                <svg class="w-4 h-4 text-gray-400 transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div x-show="open" class="mt-3 space-y-2">
                                @foreach(['Konser', 'Workshop', 'Festival', 'Konferensi', 'Pertunjukan'] as $kat)
                                <label class="flex items-center gap-2 text-sm text-gray-600 cursor-pointer hover:text-blue-600">
                                    <input type="checkbox" class="rounded border-gray-300 text-blue-500 focus:ring-blue-400">
                                    {{ $kat }}
                                </label>
                                @endforeach
                            </div>
                        </div>

                        {{-- Waktu --}}
                        <div class="py-4 border-t border-gray-100" x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center justify-between w-full text-sm font-semibold text-gray-700">
                                Waktu
                                <svg class="w-4 h-4 text-gray-400 transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div x-show="open" class="mt-3 space-y-2">
                                @foreach(['Hari ini', 'Besok', 'Minggu ini', 'Bulan ini'] as $waktu)
                                <label class="flex items-center gap-2 text-sm text-gray-600 cursor-pointer hover:text-blue-600">
                                    <input type="radio" name="waktu" class="border-gray-300 text-blue-500 focus:ring-blue-400">
                                    {{ $waktu }}
                                </label>
                                @endforeach
                            </div>
                        </div>

                        {{-- Harga --}}
                        <div class="py-4 border-t border-gray-100">
                            <p class="text-xs text-gray-400 font-semibold mb-2">Harga</p>
                            <div class="flex items-center justify-between bg-gray-100 rounded-lg px-3 py-2">
                                <span class="text-sm font-bold text-gray-700">Berbayar</span>
                                <button class="text-red-400 hover:text-red-600 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Konten Kanan --}}
                <div class="flex-1">

                    {{-- Header --}}
                    <div class="flex items-center justify-between mb-5">
                        <p class="text-sm text-gray-600">
                            Menampilkan <span class="font-bold">1 - 8</span> Dari Total <span class="font-bold">280</span>
                        </p>
                        <div class="flex items-center gap-2">
                            <span class="text-sm text-gray-500">Urutkan:</span>
                            <select class="border border-gray-200 rounded-lg px-3 py-2 text-sm text-gray-700 focus:outline-none focus:border-blue-400 bg-white">
                                <option>Waktu Mulai (Terdekat)</option>
                                <option>Harga Terendah</option>
                                <option>Harga Tertinggi</option>
                                <option>Terbaru</option>
                            </select>
                        </div>
                    </div>

                    {{-- Grid Event --}}
                    @php
                    $events = [
                        ['title' => 'High Performance Leadership: Leading Team and Driving Result', 'date' => '14 Apr 2026', 'price' => 'Rp2.500.000', 'org' => 'Akselerasi Indonesia', 'img' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=400'],
                        ['title' => 'Certified International Supply Chain Professional (CISCP)', 'date' => '13 Apr - 15 Apr 2026', 'price' => 'Rp5.000.000', 'org' => 'PT. Husin Intelligence Group', 'img' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=400'],
                        ['title' => 'Cerita Miskinku - Coming Soon', 'date' => '15 Apr 2026', 'price' => 'Rp25.000', 'org' => 'Standup Cinere', 'img' => 'https://images.unsplash.com/photo-1485846234645-a62644f84728?q=80&w=400'],
                        ['title' => 'WOW Brand 2026: Branding in the Age of AI', 'date' => '16 Apr 2026', 'price' => 'Rp666.000', 'org' => 'Marketeers', 'img' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=400'],
                        ['title' => 'PIE Musical: Finding Nemo KIDS', 'date' => '16 Apr 2026', 'price' => 'Rp100.000', 'org' => 'Jakarta Intercultural School', 'img' => 'https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?q=80&w=400'],
                        ['title' => 'Renewed Faith - A Worship Night Experience', 'date' => '16 Apr 2026', 'price' => 'Rp50.000', 'org' => 'Kingdom Sound', 'img' => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?q=80&w=400'],
                        ['title' => 'Workshop Supply Chain & Logistik 2026', 'date' => '17 Apr 2026', 'price' => 'Rp1.500.000', 'org' => 'Supply Chain Indonesia', 'img' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=400'],
                        ['title' => 'Intensif SNBT by Mantappu Academy', 'date' => '02 Feb - 22 Apr 2026', 'price' => 'Rp399.000', 'org' => 'Mantappu Academy', 'img' => 'https://images.unsplash.com/photo-1515187029135-18ee286d815b?q=80&w=400'],
                    ];
                    @endphp

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        @foreach($events as $event)
                        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden hover:shadow-md transition cursor-pointer">
                            <img src="{{ $event['img'] }}" class="w-full h-36 object-cover">
                            <div class="p-3">
                                <h3 class="text-xs font-bold text-gray-800 line-clamp-2 h-8 mb-2">{{ $event['title'] }}</h3>
                                <p class="text-[11px] text-gray-400 mb-1">{{ $event['date'] }}</p>
                                <p class="text-sm font-black text-gray-800 mb-3">{{ $event['price'] }}</p>
                                <div class="border-t border-gray-100 pt-2 flex items-center gap-2">
                                    <div class="w-5 h-5 rounded-full bg-blue-100 flex items-center justify-center text-[8px] font-bold text-blue-600 shrink-0">
                                        {{ strtoupper(substr($event['org'], 0, 1)) }}
                                    </div>
                                    <span class="text-[10px] text-gray-500 font-medium truncate">{{ $event['org'] }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{-- Pagination --}}
                    <div class="flex items-center justify-end gap-1 mt-8">
                        <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 hover:bg-gray-50 transition bg-white">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        @foreach([1,2,3,4,5] as $page)
                        <button class="w-8 h-8 flex items-center justify-center rounded-lg text-sm font-semibold transition
                            {{ $page === 1 ? 'bg-blue-600 text-white' : 'bg-white border border-gray-200 text-gray-600 hover:bg-gray-50' }}">
                            {{ $page }}
                        </button>
                        @endforeach
                        <span class="text-gray-400 text-sm px-1">...</span>
                        <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-sm font-semibold text-gray-600 hover:bg-gray-50 bg-white transition">35</button>
                        <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 hover:bg-gray-50 bg-white transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>


   </x-app-layout>
      