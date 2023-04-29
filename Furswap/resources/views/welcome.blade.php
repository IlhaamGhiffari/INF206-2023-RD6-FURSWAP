<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
      <script src="https://cdn.tailwindcss.com"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</head>
<body>
    <!-- NavBar -->
    <x-navbar/>

    <div class="flex items-center justify-center">

    <!--carousel start-->
            <div id="default-carousel" class="relative w-2/3 shadow-lg rounded-xl grid grid-cols-2" data-carousel="slide">
                <div class="grid grid-rows-2 grid-cols-2">
                    <strong class="text-[#003F62] text-[3rem] flex justify-center col-span-2 items-end">Sofa Oriental</strong>
                    <button class="flex justify-end bg-[#EDA415] rounded-3xl m-auto p-3 max-h-[4rem] text-white text-3xl items-center">Tawar</button>
                    <button class="flex justify-start bg-[#EDA415] rounded-3xl m-auto p-3 max-h-[4rem] text-white text-3xl items-center ">Lihat</button>
                </div>
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{asset('images/sofa.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{asset('images/sofa.jpg')}}"  class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{asset('images/sofa.jpg')}}"  class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{asset('images/sofa.jpg')}}"  class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{asset('images/sofa.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
    <!--carousel end-->

            
            <button class="flex items-center">
                    <img class="scale-[0.5]" src="{{asset('images/plus-sign.png')}}">
            </button>
        </div>
    
    <div class="mx-10">
        <strong class="text-[#003F62] mx-auto flex justify-start text-[3rem]">Barang Bekas</strong>
        <div class="flex">
            <div class=" mx-auto my-10 card rounded-xl w-96 h-96 bg-white drop-shadow-lg flex justify-center">
                <img class="p-2" src="{{asset('images/sofa.jpg')}}">
            </div>
            <div class=" mx-auto my-10 card rounded-xl w-96 h-96 bg-white drop-shadow-lg flex justify-center">
                <img class="p-1" src="{{asset('images/sofa.jpg')}}">
            </div>
            <div class=" mx-auto my-10 card rounded-xl w-96 h-96 bg-white drop-shadow-lg flex justify-center">
                <img class="p-1"src="{{asset('images/sofa.jpg')}}">
            </div>
            <div class=" mx-auto my-10 card rounded-xl w-96 h-96 bg-white drop-shadow-lg flex justify-center">
                <img class="p-1" src="{{asset('images/sofa.jpg')}}">
            </div>
        </div>
    </div>
</body>
</html>