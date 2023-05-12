<x-app-layout>
    <body>
        <div class="grid grid-cols-2">
            <div class="mx-auto my-10 card rounded-xl p-14 w-[35rem] h-[35rem] bg-white drop-shadow-lg flex justify-center items-center">
                @if ($product->foto)
                    <div>
                        <img class="w-full h-full object-contain"  src="{{ asset('fotoBarang/' . $product->foto) }}" alt="Product Photo">
                    </div>
                @endif
            </div>
            <div class="my-10 justify-start">
                <div class="text-7xl"> {{ $product->nama }}</div>
                <div class="text-3xl"><strong>Type:</strong> {{ $product->jenis }}</div>
                <div class="text-3xl"><strong>Jumlah Barang:</strong> {{ $product->jumlah }}</div>
                <div class="text-2xl"><strong>Deskripsi:</strong> {{ $product->deskripsi }}</div>
                <div class="text-2xl"><strong>Oleh:</strong> {{ $product->user->name }}</div>
            </div>
        </div>
        <a href="{{url('/Chat')}}" class="bg-[#EDA415] mx-auto w-32 h-16 text-3xl flex justify-center items-center text-white rounded-xl">
            Tawar
        </a>
    </body>
</x-app-layout>
