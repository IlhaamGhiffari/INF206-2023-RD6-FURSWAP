<div class="grid grid-cols-10 bg-[#003F62] items-center p-5">
        <a href="{{url('/dashboard')}}"><img class="container scale-[0.75] col-start-2" src="{{asset('images/logo.png')}}"></a>
    <form class="max-w-[1000px] col-start-3 col-end-5">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 " placeholder="Search Mockups, Logos..." required>
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-[#EDA415] hover:bg-[#F79427] focus:ring-[#EDA415] focus:outline-none font-medium rounded-lg text-sm px-4 py-2">Search</button>
            </div>
    </form>
    <a href="{{url('/Chat')}}"  class="col-start-7 text-white font-semibold">Chat</a>
    <div class="col-start-8 max-w-auto text-white items-start font-semibold">transaksi</div>
    <div class="col-start-9 col-span-2 gap-28 justify-center text-white">@if (Route::has('login'))
            @auth
                <a href="{{ url('/produks') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mx-10">Masuk</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-white  dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Daftar</a>
                @endif
            @endauth
    @endif
    </div>
</div>