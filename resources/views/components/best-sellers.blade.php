<section class="w-full flex flex-col mx-auto pt-[110px] px-[184px] pb-0 gap-20 overflow-hidden">
    <h2 class="font-bold text-[#212121] text-5xl leading-[62.4px] flex justify-between">
        Explore our best sellers
        <div class="flex gap-3">
            <div class="button-prev relative mt-0 top-0 left-0 w-16 rounded-full items-center justify-center flex h-16 bg-[#2A62FE]">
                <img src="{{asset('assets/frontend/images/WhiteArrowUpLeft.svg')}}">
            </div>
            <div class="button-next relative mt-0 top-0 left-0 w-16 rounded-full items-center justify-center flex h-16 bg-[#2A62FE]">
                <img src="{{asset('assets/frontend/images/WhiteArrowUpRight.svg')}}">
            </div>
        </div>
    </h2>
    <div class="flex flex-row gap-8 -mx-[515px]">
        <div class="swiper mySwiperInner w-full overflow-visible">
            <div class="swiper-wrapper">
                @foreach($this->best_sellers as $product)
                <div class="swiper-slide px-3">
                    <a href="{{ route('product.view', $product->defaultUrl->slug) }}" class="rounded-3xl border bg-[#ebf0f8] text-center cursor-pointer transition py-9 text-lg flex items-center justify-center">
                        <div class="flex-1 flex flex-col gap-4">
                            <div class="rounded-[33px] flex items-center justify-center bg-[#EBF0F8]">
                                @if ($product->thumbnail)
                                    <img class="object-cover transition-transform duration-300 group-hover:scale-105"
                                        src="{{ $product->thumbnail->getUrl('medium') }}"
                                        alt="{{ $product->translateAttribute('name') }}" />
                                @endif
                            </div>
                        </div>
                    </a>
                    <div class="flex flex-col gap-4 pt-4">
                        <span class="text-[#212121] text-[32px] leading-[36px] font-semibold">{{ $product->translateAttribute('name') }}</span>
                        <a href="{{ route('product.view', $product->defaultUrl->slug) }}" class="flex flex-row border border-[#2A62FE] rounded-[36px] w-[176px] gap-2.5 justify-center items-center cursor-pointer">
                            <p class="text-[#2A62FE] font-normal leading-[27px] text-lg">Learn more</p>
                            <img src="{{asset('assets/frontend/images/ArrowUpRight.svg')}}">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
        <!-- <div class="flex-1 flex flex-col gap-4">
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
    </div> -->
    <script>
        document.addEventListener('livewire:load', function () {

            var thumbs = new Swiper(".mySwiperInner", {
				loop: true,
				spaceBetween: 30,
				slidesPerView: 5,
				cssMode: true,
				navigation: {
					nextEl: ".button-next",
					prevEl: ".button-prev",
				},
				watchSlidesProgress: true,
				freeMode: true,
				breakpoints: {
					1024: {
						slidesPerView: 5
					},
					768: {
						slidesPerView: 4
					},
					640: {
						slidesPerView: 3,
					},
					320: {
						slidesPerView: 1,
					}
				}
			});
        })
    </script>
</section>