<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    @livewire('navigation-menu')


    <div class="container mx-auto w-4/5">
        <form method="POST" action="{{ config('') }}/produks" enctype="multipart/form-data">
            @csrf
            <div class="flex text-3xl justify-center ">Tambahkan Produk</div>

            <div class="form-input">
                <x-label2 for="nama" value="{{ __('Nama Produk') }}" />
                <x-input2 id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')"
                    required autocomplete="nama" />
            </div>

            <div class="form-input">
                <x-label2 for="jenis" value="{{ __('Jenis Produk') }}" />
                <x-input2 id="jenis" class="block mt-1 w-full" type="text" name="jenis" :value="old('jenis')"
                    required autocomplete="jenis" />
            </div>

            <div class="form-input">
                <x-label2 for="jumlah" value="{{ __('Jumlah Produk') }}" />
                <x-input2 id="jumlah" class="block mt-1 w-full" type="number" name="jumlah" :value="old('jumlah')"
                    required autocomplete="jumlah" />
            </div>

            <div class="form-input">
                <x-label2 for="deskripsi" value="{{ __('Deskripsi Produk') }}" />
                <x-input2 id="deskripsi" class="block mt-1 w-full" type="text" name="deskripsi" :value="old('deskripsi')"
                    required autocomplete="deskripsi" />
            </div>

            <div class="form-input">
                <x-label2 for="foto" value="{{ __('Foto Produk') }}" />
                <x-input2 id="foto" class="block mt-1 w-full" type="file" name="foto" :value="old('foto')"
                    required autocomplete="foto" />
            </div>



            <button class="border border-black mt-10 p-2 rounded bg-[#003F62] text-white">Submit</button>
        </form>

    </div>

</body>

</html>
