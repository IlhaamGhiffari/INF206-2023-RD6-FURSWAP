<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0" style="background-image: url({{url('images/BG.png')}})">
    <div>
        <img class="container scale-[0.75] col-start-2" src="{{asset('images/logo_blck.png')}}">
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
