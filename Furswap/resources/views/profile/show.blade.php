<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
        <div class="flex">
          <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"class="flex-none mt-[125px] ml-16 h-[300px] w-[300px] rounded-[25px] bg-white border-[0.5px] border-black"></img>
     
              <div class="basis-full h-96 left-16 top-16 mt-16 px-auto">
                    <p class="w-[120px] h-[30px] mx-auto font-bold font-sans text-2xl">Info Akun</p>
                    <input class="border border-black ml-28 w-10/12 h-[45px] rounded-[30px] mt-[25px] px-5" value="{{ $user->name }}" type="text">
                    <input class="border border-black ml-28 w-10/12 h-[45px] rounded-[30px] mt-[25px] px-5" value="{{ $user->address}}" type="text">
                    <input class="border border-black ml-28 w-10/12 h-[45px] rounded-[30px] mt-[25px] px-5" value="{{ $user->email}}" type="text">
                    <input class="border border-black ml-28 w-10/12 h-[45px] rounded-[30px] mt-[25px] px-5" value="{{ $user->phone}}" type="text">
                    
                    <button class="flex bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded-[45px] mx-auto mt-10 ">Save</button>
                </div>
        </div>
        
        <div class="flex flex-col mt-16 px-16">
            <div class="w-52 h-16 bg-[#003f62] rounded-[15px] mb-4">
                <p class="text-2xl text-white mt-4 mx-auto w-[120px] h-[30px] ">List barang</p>
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
                <div class="border border-black w-full h-[250px] mb-16 rounded-[30px] flex">
                    <img src="https://3.bp.blogspot.com/-8vavZUPxn_A/UgIbwyd2GbI/AAAAAAAABEs/pl9E4KOvk5w/s1600/furniture+rumah+minimalis+2013.jpg" class="w-[200px] h-[200px] border border-black  rounded-[30px] mt-[20px] ml-[20px]" alt="">
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