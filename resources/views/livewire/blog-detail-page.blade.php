<div class="w-full border-b border-b-[#EBF0F8] py-16 flex justify-center">
    <div class="flex flex-col gap-8 w-[1560px]">
        <div>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center text-xs font-normal leading-[18px] text-[#707070] hover:text-[#2A62FE]">
                            Blog
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <a href="#" class="inline-flex items-center text-xs font-normal leading-[18px] text-[#707070] hover:text-[#2A62FE]">Diabetic Diet</a>
                        </div>
                    </li>
                    <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="inline-flex items-center text-xs font-semibold leading-[18px] text-[#212121] hover:text-[#2A62FE] cursor-pointer">Article</span>
                    </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="flex flex-row justify-between h-[430px]">
            <div class="flex flex-col justify-between w-[632px]">
                <div class="flex flex-col gap-6">
                    <div>
                        <span class="bg-[#2A62FE] rounded-[1000px] px-4 py-1 text-white">Diabetic Diet</span>
                    </div>
                    <h2 class="font-bold text-5xl leading-[62.4px]">Proven Ways to Prevent Sugar Spikes</h2>
                    <p class="font-normal text-base leading-6 text-[#707070]">Are you tired of the rollercoaster ride of sugar spikes and crashes? You’re not alone. Managing blood sugar levels can be a daunting task, but it’s crucial for your overall health and well-being. In this article, we’ll explore proven ways to prevent sugar spikes that are both effective and easy to incorporate into your daily routine.</p>
                </div>
                <div class="flex flex-row justify-between">
                    <div class="flex flex-col gap-1">
                        <p class="font-semibold text-lg leading-[23.4px] text-[#212121]">Dr. Ahmet Ergin</p>
                        <div class="flex flex-row gap-2">
                            <p class="font-normal text-base leading-6 text-[#707070]">20 Jan 2022</p>
                            <p class="text-[#707070] opacity-30">●</p>
                            <p class="font-normal text-base leading-6 text-[#707070]">17 min read</p>
                        </div>
                    </div>
                    <div class="flex flex-row gap-4">
                        <button type="button" class="w-12 h-12 rounded-xl border border-[#2A62FE]">
                            <i class="fa fa-share-alt text-[#2A62FE] text-2xl"></i>
                        </button>
                        <button type="button" class="w-12 h-12 rounded-xl border border-[#2A62FE]">
                            <i class="fa fa-print text-[#2A62FE] text-2xl"></i>
                        </button>
                    </div>
                </div>
            </div>
            <img src="{{asset('assets/frontend/images/sugar.png')}}" class="w-[764px]">
        </div>
    </div>
</div>
<div class="w-full py-16 flex flex-row justify-center gap-40">
    <div class="w-[1024px]">
        {!! $blog->description !!}
    </div>
    <div class="w-[364px] bg-[#EDF4FF] rounded-xl px-6 py-6 flex flex-col gap-6 h-[72px]">
        <button data-dropdown-toggle="content" type="button">
            <div class="text-[#212121] font-semibold text-lg leading-[23.4px] text-center items-center flex flex-row justify-between">
                <span>Table of contents</span>
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </div>
        </button>
        <div id="content" class="hidden bg-[#EDF4FF] w-[364px] rounded-b-xl">
            <ul class="pb-6">
                <li>
                    <a class="block py-4 text-sm font-normal leading-[21px] text-[#212121] hover:text-[#2A62FE] border-b border-b-[#CFE2FF] mx-6 cursor-pointer">Balanced Meals for Steady Blood Sugar</a>
                </li>
                <li>
                    <a class="block py-4 text-sm font-normal leading-[21px] text-[#212121] hover:text-[#2A62FE] border-b border-b-[#CFE2FF] mx-6 cursor-pointer">Fiber-Rich Foods for Stability</a>
                </li>
                <li>
                    <a class="block py-4 text-sm font-normal leading-[21px] text-[#212121] hover:text-[#2A62FE] border-b border-b-[#CFE2FF] mx-6 cursor-pointer">Apple Cider Vinegar to Reduce Blood Sugar</a>
                </li>
                <li>
                    <a class="block py-4 text-sm font-normal leading-[21px] text-[#212121] hover:text-[#2A62FE] border-b border-b-[#CFE2FF] mx-6 cursor-pointer">SugarMD GlucoDefense</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="w-full mt-28 flex justify-center">
    <div class="flex flex-col w-[1560px]">
        <div class="mb-16">
            <span class="font-bold text-[32px] leading-[41.6px] text-[#212121]">SIMILAR ARTICLES</span>
        </div>
        <div class="flex flex-row justify-between gap-8">
            <div class="flex flex-col flex-1 gap-5">
                <img src="{{asset('assets/frontend/images/similar1.png')}}" class="rounded-[32px]">
                <div class="flex flex-row gap-2">
                    <p class="font-normal text-base leading-6 text-[#707070]">Jonathan Smith</p>
                    <p class="text-[#707070] opacity-30">●</p>
                    <p class="font-normal text-base leading-6 text-[#707070]">20 Jan 2022</p>
                    <p class="text-[#707070] opacity-30">●</p>
                    <p class="font-normal text-base leading-6 text-[#707070]">17 min read</p>
                </div>
                <div class="flex flex-col gap-2">
                    <a class="flex flex-row justify-between items-start cursor-pointer">
                        <div class="text-2xl text-[#212121] font-semibold leading-[31.2px] w-3/4">Best Blood Pressure Diet (Dash diet is it worth it?)</div>
                        <img src="{{asset('assets/frontend/images/vector.svg')}}" class="text-lg">
                    </a>
                    <p class="font-normal text-[#707070] text-base leading-6">Blood pressure is more than just numbers—it’s a critical indicator of your overall health and well-being. One of the most talked-about…</p>
                </div>
                <div class="flex flex-row gap-1.5 flex-wrap">
                    <span class="font-normal text-sm leading-[21px] text-[#212121] rounded-[1000px] py-1 px-4 border border-[#707070]">blood pressure</span>
                    <span class="font-normal text-sm leading-[21px] text-[#212121] rounded-[1000px] py-1 px-4 border border-[#707070]">best diets</span>
                    <span class="font-normal text-sm leading-[21px] text-[#212121] rounded-[1000px] py-1 px-4 border border-[#707070]">best diabetic diets</span>
                    <span class="font-normal text-sm leading-[21px] text-[#212121] rounded-[1000px] py-1 px-4 border border-[#707070]">food for a healty diet</span>
                    <span class="font-normal text-sm leading-[21px] text-[#212121] rounded-[1000px] py-1 px-4 border border-[#707070]">best blood pressure diet</span>
                </div>
            </div>
            <div class="flex flex-col flex-1 gap-5">
                <img src="{{asset('assets/frontend/images/similar2.png')}}" class="rounded-[32px]">
                <div class="flex flex-row gap-2">
                    <p class="font-normal text-base leading-6 text-[#707070]">Jonathan Smith</p>
                    <p class="text-[#707070] opacity-30">●</p>
                    <p class="font-normal text-base leading-6 text-[#707070]">20 Jan 2022</p>
                    <p class="text-[#707070] opacity-30">●</p>
                    <p class="font-normal text-base leading-6 text-[#707070]">17 min read</p>
                </div>
                <div class="flex flex-col gap-2">
                    <a class="flex flex-row justify-between items-start cursor-pointer">
                        <div class="text-2xl text-[#212121] font-semibold leading-[31.2px] w-3/4">What Occurs When There is a Chronic Deficiency in Sleep?</div>
                        <img src="{{asset('assets/frontend/images/vector.svg')}}" class="text-lg">
                    </a>
                    <p class="font-normal text-[#707070] text-base leading-6">Ever wondered what happens to your body and mind when you consistently miss out on those precious Z’s? Well, you’re in the right…</p>
                </div>
                <div class="flex flex-row gap-1.5 flex-wrap">
                    <span class="font-normal text-sm leading-[21px] text-[#212121] rounded-[1000px] py-1 px-4 border border-[#707070]">sleep</span>
                    <span class="font-normal text-sm leading-[21px] text-[#212121] rounded-[1000px] py-1 px-4 border border-[#707070]">sleeplessness</span>
                    <span class="font-normal text-sm leading-[21px] text-[#212121] rounded-[1000px] py-1 px-4 border border-[#707070]">sleep deficiency</span>
                    <span class="font-normal text-sm leading-[21px] text-[#212121] rounded-[1000px] py-1 px-4 border border-[#707070]">sleepless problems</span>
                    <span class="font-normal text-sm leading-[21px] text-[#212121] rounded-[1000px] py-1 px-4 border border-[#707070]">how to improve sleep</span>
                </div>
            </div>
            <div class="flex flex-col flex-1 gap-5">
                <img src="{{asset('assets/frontend/images/similar3.png')}}" class="rounded-[32px]">
                <div class="flex flex-row gap-2">
                    <p class="font-normal text-base leading-6 text-[#707070]">Jonathan Smith</p>
                    <p class="text-[#707070] opacity-30">●</p>
                    <p class="font-normal text-base leading-6 text-[#707070]">20 Jan 2022</p>
                    <p class="text-[#707070] opacity-30">●</p>
                    <p class="font-normal text-base leading-6 text-[#707070]">17 min read</p>
                </div>
                <div class="flex flex-col gap-2">
                    <a class="flex flex-row justify-between items-start cursor-pointer">
                        <div class="text-2xl text-[#212121] font-semibold leading-[31.2px] w-3/4">Proven Ways to Prevent Sugar Spikes</div>
                        <img src="{{asset('assets/frontend/images/vector.svg')}}" class="text-lg">
                    </a>
                    <p class="font-normal text-[#707070] text-base leading-6">Are you tired of the rollercoaster ride of sugar spikes and crashes? You’re not alone. Managing blood sugar levels can be a daunting…</p>
                </div>
                <div class="flex flex-row gap-1.5 flex-wrap">
                    <span class="font-normal text-sm leading-[21px] text-[#212121] rounded-[1000px] py-1 px-4 border border-[#707070]">diabetic diet</span>
                    <span class="font-normal text-sm leading-[21px] text-[#212121] rounded-[1000px] py-1 px-4 border border-[#707070]">sugar spikes</span>
                    <span class="font-normal text-sm leading-[21px] text-[#212121] rounded-[1000px] py-1 px-4 border border-[#707070]">reduce blood sugar</span>
                    <span class="font-normal text-sm leading-[21px] text-[#212121] rounded-[1000px] py-1 px-4 border border-[#707070]">lower blood sugar</span>
                    <span class="font-normal text-sm leading-[21px] text-[#212121] rounded-[1000px] py-1 px-4 border border-[#707070]">proven ways to prevent sugar spikes</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="w-full mt-28 flex justify-center">
    <div class="flex flex-col w-[1560px]">
        <div class="mb-16">
            <span class="font-bold text-[32px] leading-[41.6px] text-[#212121]">CHECK OUT TOP RATED PRODUCTS</span>
        </div>
        <div class="flex flex-row justify-between gap-8">
            <div class="flex flex-col flex-1 gap-5">
                <div class="h-[570px] bg-[#E1EFF8] rounded-[33px] flex justify-center items-center">
                    <img src="{{asset('assets/frontend/images/sugarMD.png')}}">
                </div>
                <div class="flex flex-col gap-2">
                    <div class="flex flex-row gap-2">
                        <i class="fa fa-star text-[32px] text-[#FEA92A]"></i>
                        <i class="fa fa-star text-[32px] text-[#FEA92A]"></i>
                        <i class="fa fa-star text-[32px] text-[#FEA92A]"></i>
                        <i class="fa fa-star text-[32px] text-[#FEA92A]"></i>
                        <i class="fa fa-star text-[32px] text-[#FEA92A]"></i>
                    </div>
                    <div>
                        <a class="text-[26px] text-[#212121] font-semibold leading-[39px] w-3/4 cursor-pointer">SugarMD Seamoss Complex</a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col flex-1 gap-5">
                <div class="h-[570px] bg-[#E1EFF8] rounded-[33px] flex justify-center items-center">
                    <img src="{{asset('assets/frontend/images/sugarMD.png')}}">
                </div>
                <div class="flex flex-col gap-2">
                    <div class="flex flex-row gap-2">
                        <i class="fa fa-star text-[32px] text-[#FEA92A]"></i>
                        <i class="fa fa-star text-[32px] text-[#FEA92A]"></i>
                        <i class="fa fa-star text-[32px] text-[#FEA92A]"></i>
                        <i class="fa fa-star text-[32px] text-[#FEA92A]"></i>
                        <i class="fa fa-star text-[32px] text-[#FEA92A]"></i>
                    </div>
                    <div>
                        <a class="text-[26px] text-[#212121] font-semibold leading-[39px] w-3/4 cursor-pointer">SugarMD Seamoss Complex</a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col flex-1 gap-5">
                <div class="h-[570px] bg-[#E1EFF8] rounded-[33px] flex justify-center items-center">
                    <img src="{{asset('assets/frontend/images/sugarMD.png')}}">
                </div>
                <div class="flex flex-col gap-2">
                    <div class="flex flex-row gap-2">
                        <i class="fa fa-star text-[32px] text-[#FEA92A]"></i>
                        <i class="fa fa-star text-[32px] text-[#FEA92A]"></i>
                        <i class="fa fa-star text-[32px] text-[#FEA92A]"></i>
                        <i class="fa fa-star text-[32px] text-[#FEA92A]"></i>
                        <i class="fa fa-star text-[32px] text-[#FEA92A]"></i>
                    </div>
                    <div>
                        <a class="text-[26px] text-[#212121] font-semibold leading-[39px] w-3/4 cursor-pointer">SugarMD Seamoss Complex</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>