<?php
use App\Models\produk;
$allproduct = produk::all();
?>
<x-app-layout>
    <div>
        <h1>Product List</h1>

        @foreach ($allproduct as $product)
            <div>
                <h3>{{ $product->nama }}</h3>
                <p>Type: {{ $product->jenis }}</p>
                <p>Quantity: {{ $product->jumlah }}</p>
                <p>Description: {{ $product->deskripsi }}</p>
                <a href="{{ route('produk.show', $product->id) }}">View Details</a>
            </div>
            <hr>
        @endforeach
    </div>
</x-app-layout>
