<x-app-layout>
    <div class="max-w-3xl mx-auto py-10">
        <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label class="block mb-4">
                <span class="font-bold">Nama Event</span>
                <input type="text" name="nama_event" class="mt-1 block w-full rounded-lg border" required>
            </label>

            <label class="block mb-4">
                <span class="font-bold">Kategori</span>
                <input type="text" name="kategori" class="mt-1 block w-full rounded-lg border" required>
            </label>

            <label class="block mb-4">
                <span class="font-bold">Harga</span>
                <input type="number" name="harga" class="mt-1 block w-full rounded-lg border" required>
            </label>

            <label class="block mb-4">
                <span class="font-bold">Lokasi</span>
                <input type="text" name="lokasi" class="mt-1 block w-full rounded-lg border" required>
            </label>

            <label class="block mb-4">
                <span class="font-bold">Tanggal</span>
                <input type="date" name="tanggal" class="mt-1 block w-full rounded-lg border">
            </label>

            <label class="block mb-4">
                <span class="font-bold">Banner</span>
                <input type="file" name="banner" class="mt-1 block w-full" required>
            </label>

            <button type="submit" class="px-6 py-3 bg-blue-600 text-white rounded-lg">Buat Event</button>
        </form>
    </div>
</x-app-layout>