<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold mb-4">{{ $event->judul_event }}</h1>
            
            <div class="bg-white p-6 rounded-lg shadow">
                <p class="text-gray-600 mb-4">{{ $event->deskripsi }}</p>
                
                <div class="border-t pt-4">
                    <p><strong>📍 Lokasi:</strong> {{ $event->lokasi }}</p>
                    <p><strong>📅 Waktu:</strong> {{ $event->waktu_acara }}</p>
                </div>

<a href="{{ route('eventsshow.create') }}" class="...">
    ← Kembali ke Detail Event
</a>            </div>
        </div>
    </div>
</x-app-layout>