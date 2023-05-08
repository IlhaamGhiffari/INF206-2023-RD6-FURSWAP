<x-app-layout>
    <x-slot name="header">
        <h2 class="grid justify-items-start font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    
        <div class="flex">
          <img src="\img\defaultProfile.png"class="flex-none drop-shadow-lg mt-24 ml-16 h-[300px] w-[300px] rounded-[20px] bg-white "></img>
     
            <form class="basis-full h-96 left-16 top-16 mt-16 px-auto" method="POST" action="{{ route('user.update', $user->id) }}">
                    @csrf
                    @method('PUT')
                <div class="mb-[25px]">
                    <label class="ml-[120px] mt-[25px]">Name:</label>
                    <input class="border border-black ml-28 w-10/12 h-[45px] rounded-[15px] px-5" type="text" name="name" value="{{ $user->name }}" />
                </div>

                <div class="mb-[25px]">
                    <label class="ml-[120px] mt-[25px]">Email:</label>
                    <input class="border border-black ml-28 w-10/12 h-[45px] rounded-[15px] px-5" type="email" name="email" value="{{ $user->email }}" />
                </div>
                
                <div class="mb-[25px]">
                    <label class="ml-[120px] mt-[25px]">Address:</label>
                    <input class="border border-black ml-28 w-10/12 h-[45px] rounded-[15px] px-5" type="address" name="address" value="{{ $user->address }}" />
                </div>
                
                <div class="mb-[25px]">
                    <label class="ml-[120px] mt-[25px]">Phone Number:</label>
                    <input class="border border-black ml-28 w-10/12 h-[45px] rounded-[15px] px-5" type="phone" name="phone" value="{{ $user->phone }}" />
                </div>

                    <button  class="flex bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded-[15px] mx-auto mt-10 " type="submit">Update</button>

                
            </form>
        </div>
        
        <div class="flex flex-col mt-16 px-16">
            <div class="w-52 h-16 bg-[#003f62] rounded-[15px] mb-4">
                <p class="text-2xl text-white mt-4 mx-auto w-[120px] h-[30px] ">List barang</p>
            </div>
                <div class="border border-black w-full h-[250px] mb-16 rounded-[30px] flex">
                    <img src="\img\defaultFurniture.jpeg" class="w-[200px] h-[200px] border border-black  rounded-[30px] mt-[20px] ml-[20px]" alt="">
                    <div class="bg-[#003f62] border border-black w-full text-white h-full rounded-[30px] ml-[20px] flex-col px-[20px] py-[20px]">
                        <div class="flex font-bold  text-xl mb-[30px]">Nama barang &emsp; : Furniture</div>
                        <div class="flex font-bold text-xl mb-[30px]">Merk barang &emsp; : Furniture</div>
                        <div class="flex font-bold text-xl mb-[30px]">Status barang &emsp; &ensp; : Sudah ditukarkan</div>
                        <div class="flex font-bold text-xl mb-[30px]">Tanggal transaksi &nbsp; : dd/mm/yy</div>
                   </div>
                </div>
                <div class="border border-black w-full h-[250px] mb-16 rounded-[30px] flex">
                    <img src="\img\defaultFurniture.jpeg" class="w-[200px] h-[200px] border border-black  rounded-[30px] mt-[20px] ml-[20px]" alt="">
                    <div class="bg-[#003f62] border border-black w-full text-white h-full rounded-[30px] ml-[20px] flex-col px-[20px] py-[20px]">
                        <div class="flex font-bold  text-xl mb-[30px]">Nama barang &emsp; : Furniture</div>
                        <div class="flex font-bold text-xl mb-[30px]">Merk barang &emsp; : Furniture</div>
                        <div class="flex font-bold text-xl mb-[30px]">Status barang &emsp; &ensp; : Sudah ditukarkan</div>
                        <div class="flex font-bold text-xl mb-[30px]">Tanggal transaksi &nbsp; : dd/mm/yy</div>
                   </div>
                </div>
                <div class="border border-black w-full h-[250px] mb-16 rounded-[30px] flex">
                    <img src="https://3.bp.blogspot.com/-8vavZUPxn_A/UgIbwyd2GbI/AAAAAAAABEs/pl9E4KOvk5w/s1600/furniture+rumah+minimalis+2013.jpg" class="w-[200px] h-[200px] border border-black  rounded-[30px] mt-[20px] ml-[20px]" alt="">
                    <div class="bg-[#003f62] border border-black w-full text-white h-full rounded-[30px] ml-[20px] flex-col px-[20px] py-[20px]">
                        <div class="flex font-bold  text-xl mb-[30px]">Nama barang &emsp; : Furniture</div>
                        <div class="flex font-bold text-xl mb-[30px]">Merk barang &emsp; : Furniture</div>
                        <div class="flex font-bold text-xl mb-[30px]">Status barang &emsp; &ensp; : Sudah ditukarkan</div>
                        <div class="flex font-bold text-xl mb-[30px]">Tanggal transaksi &nbsp; : dd/mm/yy</div>
                   </div>
                </div>
        
                <div class="border border-black w-full h-[250px] mb-16 rounded-[30px]"></div>
                <div class="border border-black w-full h-[250px] mb-16 rounded-[30px]"></div>
                <div class="border border-black w-full h-[250px] mb-16 rounded-[30px]"></div>
                <div class="border border-black w-full h-[250px] mb-16 rounded-[30px]"></div>
               
        </div>
</x-app-layout>