<!-- <section>
    <div class="relative w-[496px]" data-carousel="static">
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('assets/frontend/images/similar1.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="{{asset('assets/frontend/images/similar2.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('assets/frontend/images/similar3.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('assets/frontend/images/sugar.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('assets/frontend/images/welcome.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>

        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</section> -->

<section class="w-full flex flex-col mx-auto pt-[110px] px-[184px] pb-0 gap-20">
    <h2 class="font-bold text-[#212121] text-5xl leading-[62.4px] w-[736px]">Explore our best sellers</h2>
    <div class="flex flex-row gap-8">
        <div class="flex-1 flex flex-col gap-4">
            <div class="h-[570px] rounded-[33px] flex items-center justify-center bg-[#EBF0F8]">
                <img src="{{asset('assets/frontend/images/Benfotiamine.png')}}">
            </div>
            <div class="flex flex-col gap-4">
                <span class="text-[#212121] text-[32px] leading-[48px] font-semibold">Benfotiamine</span>
                <a class="flex flex-row border border-[#2A62FE] rounded-[36px] w-[176px] gap-2.5 justify-center items-center cursor-pointer">
                    <p class="text-[#2A62FE] font-normal leading-[27px] text-lg">Learn more</p>
                    <img src="{{asset('assets/frontend/images/ArrowUpRight.svg')}}">
                </a>
            </div>
        </div>
        <div class="flex-1 flex flex-col gap-4">
            <div class="h-[570px] rounded-[33px] flex items-center justify-center bg-[#EBF0F8]">
                <img src="{{asset('assets/frontend/images/Seamoss_Complex.png')}}">
            </div>
            <div class="flex flex-col gap-4">
                <span class="text-[#212121] text-[32px] leading-[48px] font-semibold">Seamoss Complex</span>
                <a class="flex flex-row border border-[#2A62FE] rounded-[36px] w-[176px] gap-2.5 justify-center items-center cursor-pointer">
                    <p class="text-[#2A62FE] font-normal leading-[27px] text-lg">Learn more</p>
                    <img src="{{asset('assets/frontend/images/ArrowUpRight.svg')}}">
                </a>
            </div>
        </div>
        <div class="flex-1 flex flex-col gap-4">
            <div class="h-[570px] rounded-[33px] flex flex-row items-center justify-center bg-[#EBF0F8]">
                <img src="{{asset('assets/frontend/images/Super_Berberine.png')}}">
            </div>
            <div class="flex flex-col gap-4">
                <span class="text-[#212121] text-[32px] leading-[48px] font-semibold">Super Berberine</span>
                <a class="flex flex-row border border-[#2A62FE] rounded-[36px] w-[176px] gap-2.5 justify-center items-center cursor-pointer">
                    <p class="text-[#2A62FE] font-normal leading-[27px] text-lg">Learn more</p>
                    <img src="{{asset('assets/frontend/images/ArrowUpRight.svg')}}">
                </a>
            </div>
        </div>
    </div>
</section>