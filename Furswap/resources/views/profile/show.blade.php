<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
<div class="container mx-auto px-4 py-4">
    <div class="flex flex-wrap -mx-4">
        <div class="w-full md:w-1/3 px-4 mb-8">
            <div class="bg-white shadow rounded-lg overflow-hidden py-3">
                <div class="p-4">
                    <div class="flex justify-center">
                        <img src="https://i.pravatar.cc/150" class="w-32 h-32 rounded-lg left-0 top-0">
                    </div>
                    <div class="mt-4 text-center pb-3">
                        <h3 class="text-lg font-medium">Name</h3>
                        <p class="text-gray-600">name@example.com</p>
                    </div>
                </div>
                <div class="border-t border-gray-200 bg-gray-50 p-4">
                    <h4 class="text-gray-600 text-lg mb-4 pl-3">Barang Furnitur yang Dimiliki</h4>
                    <ul class="divide-y divide-gray-200">
                        <li class="py-4">
                            <div class="pl-5 flex items-center">
                                <img src="https://picsum.photos/id/237/150/150" class="w-16 h-16 rounded-md pl-5">
                                <div class="ml-4">
                                    <h5 class="text-lg font-medium">Meja Kayu</h5>
                                    <p class="text-gray-600">Meja kayu besar dengan kondisi bagus</p>
                                    <p class="text-green-600 font-medium">Tawaran Terbuka</p>
                                </div>
                            </div>
                        </li>
                        <li class="py-4">
                            <div class="flex items-center">
                                <img src="https://picsum.photos/id/238/150/150" class="w-16 h-16 rounded-md">
                                <div class="ml-4">
                                    <h5 class="text-lg font-medium">Kursi Lipat</h5>
                                    <p class="text-gray-600">Kursi lipat warna hijau</p>
                                    <p class="text-red-600 font-medium">Tawaran Ditutup</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="border-t border-gray-200 bg-gray-50 p-4">
                    <h4 class="text-gray-600 text-lg mb-4">Barang Furnitur yang Dicari</h4>
                    <ul class="divide-y divide-gray-200">
                        <li class="py-4">
                            <div class="flex items-center">
                                <img src="https://picsum.photos/id/239/150/150" class="w-16 h-16 rounded-md">
                                <div class="ml-4">
                                    <h5 class="text-lg font-medium">Lemari Kayu</h5>
                                    <p class="text-gray-600">Lemari kayu dengan ukuran sedang</p>
                                    <p class="text-green-600 font-medium">Tawaran Terbuka</p>
                                </div>
                            </div>
                        </li>
                        <li class="py-4">
            <h4 class="text-gray-600 text-lg mb-4">Riwayat Tukar-menukar</h4>
            <ul class="divide-y divide-gray-200">
                <li class="py-4">
                    <div class="flex items-center">
                        <div class="mr-4">
                            <span class="inline-block w-8 h-8 rounded-full bg-green-500 text-white text-center font-medium leading-8">1</span>
                        </div>
                        <div>
                            <p class="text-gray-600">Tukar-menukar dengan John Smith</p>
                            <p class="text-gray-500 text-sm">23 Oktober 2022</p>
                        </div>
                    </div>
                </li>
                <li class="py-4">
                    <div class="flex items-center">
                        <div class="mr-4">
                            <span class="inline-block w-8 h-8 rounded-full bg-green-500 text-white text-center font-medium leading-8">2</span>
                        </div>
                        <div>
                            <p class="text-gray-600">Tukar-menukar dengan Jane Doe</p>
                            <p class="text-gray-500 text-sm">2 September 2022</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</x-app-layout>