<?php
use App\Models\produk;
use Illuminate\Support\Facades\Auth;
$user = Auth::user();
$allProduct = $user->products;
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    
        <div class="flex">
          <img src="\img\defaultProfile.png"class="flex-none mt-16 ml-16 h-[300px] w-[300px] rounded-[25px] bg-white border-[0.5px] border-black"></img>
     
              <form class="basis-full h-96 left-16 top-16 mt-16 px-auto" method="POST" action="{{ route('user.update', $user->id) }}">
                    @csrf
                    @method('PUT')
                    
                    <div class="ml-32 w-10/12 rounded-[30px] mt-[25px]">Nama</div>
                    <input class="border border-black ml-28 w-10/12 h-[45px] rounded-[15px] px-5" type="text" name="name" value="{{ $user->name }}" />
                    <div class="ml-32 w-10/12 rounded-[30px] mt-[25px]">Email</div>
                    <input class="border border-black ml-28 w-10/12 h-[45px] rounded-[15px]  px-5" type="email" name="email" value="{{ $user->email }}" />
                    <div class="ml-32 w-10/12 rounded-[30px] mt-[25px]">Alamat</div>
                   
                    <input class="border border-black ml-28 w-10/12 h-[45px] rounded-[15px] px-5" type="address" name="address" value="{{ $user->address }}" />
                    <div class="ml-32 w-10/12 rounded-[30px] mt-[25px]">No. HP</div>
                   
                    <input class="border border-black ml-28 w-10/12 h-[45px] rounded-[15px]  px-5" type="phone" name="phone" value="{{ $user->phone }}" />
                    
                    <button  class="flex bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded-[45px] mx-auto mt-10 " type="submit">Update</button>
                
                </form>
        </div>

     
        <div class="mt-52 w-11/12 mx-auto">
            @foreach ($allProduct as $product)
            <div class="border border-black w-full h-[250px] mb-16 rounded-[30px] flex">
                <img src="{{ asset('fotoBarang/' . $product->foto) }}" class="w-[200px] h-[200px] border border-black  rounded-[30px] mt-[20px] ml-[20px]" alt="">
                <div class="bg-[#003f62] border border-black w-full text-white h-full rounded-[30px] ml-[20px] flex-col px-[20px] py-[20px]">
                    <div class="flex font-bold  text-xl mb-[30px]">Nama barang &emsp; : {{ $product->nama }}</div>
                    <div class="flex font-bold text-xl mb-[30px]">Jens barang &emsp; : {{ $product->jenis }}e</div>
                    <div class="flex font-bold text-xl mb-[30px]">Jumlah barang &emsp; &ensp; : {{ $product->jumlah }}</div>
                    <div class="flex font-bold text-xl mb-[30px]">Deskripsi barang &emsp; &ensp; : {{ $product->deskripsi}}</div>
               </div>
            </div>
            @endforeach
        </div>
        
</x-app-layout>