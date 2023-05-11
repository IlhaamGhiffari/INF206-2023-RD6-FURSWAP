<x-app-layout>

<table class="table">
    <thead>
        <tr>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Jumlah</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>tersedia</th>
            <th class="Actions">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($produks as $produk)
        <tr>
            <td>{{ $produk->nama }}</td>
            <td>{{ $produk->jenis }}</td>
            <td>{{ $produk->jumlah }}</td>
            <td>{{ $produk->Deskripsi }}</td>
            <td><img src="{{ asset('fotoBarang/'.$produk->foto) }}" alt="" class="w-96"></td>
            <td>{{ $produk->tersedia ? 'Yes' : 'No' }}</td>
        </tr>
    @empty
    @endforelse


</x-app-layout>