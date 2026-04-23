<h1>Detail Tiket: {{ $tiket->nama_tiket }}</h1>
<p>Harga: Rp {{ number_format($tiket->harga, 0, ',', '.') }}</p>
<p>Sisa Stok: {{ $tiket->stok }}</p>
<a href="/daftar-tiket">Kembali</a>