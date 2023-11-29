<section class="bg-[#32908B19]">
    <div class="flex flex-col gap-40">
        <div class="max-w-screen-2xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
            <p class="mt-0.5 text-sm text-gray-400 truncate pb-4 flex flex-row gap-2">
                <a href="{{ route('home') }}">Home</a> / <a href="{{ route('shop.view') }}">Shop</a> / <span class="text-black font-semibold">{{ $this->product->translateAttribute('name') }}</span>
            </p>
            <div class="flex flex-row">
                <div class="w-1/2 flex flex-col gap-4 pr-8">
                    @if ($this->image)
                        <div class="aspect-w-1 aspect-h-1">
                            <img class="object-cover rounded-2xl"
                                src="{{ $this->image->getUrl('large') }}"
                                alt="{{ $this->product->translateAttribute('name') }}" />
                        </div>
                    @endif

                    <div class="px-16">
                        <div class="swiper mySwiperInner w-full overflow-visible relative">
                            <div class="z-50 g-button-next absolute top-[40%] -right-[46px]">
                                <img src="{{asset('assets/frontend/images/GreenRightArrow.svg')}}">
                            </div>
                            <div class="z-50 g-button-prev absolute top-[40%] -left-[48px]">
                                <img src="{{asset('assets/frontend/images/GreenLeftArrow.svg')}}">
                            </div>
                            <div class="swiper-wrapper justify-center">
                                @foreach ($this->images as $image)
                                <div class="swiper-slide" wire:key="image_{{ $image->id }}">
                                    <div>
                                        <img
                                            class="object-cover rounded-xl"
                                            src="{{ $image->getUrl('small') }}"
                                            alt="{{ $this->product->translateAttribute('name') }}" />
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-1/2 flex flex-col gap-14">
                    <div>
                        <div class="flex items-center justify-between">
                            <h1 class="text-5xl font-bold">
                                {{ $this->product->translateAttribute('name') }}
                            </h1>
                        </div>
                        <p class="mt-2 text-2xl text-gray-500 pb-3">
                            {{ $this->product->translateAttribute('capsule_count') }} Capsules
                        </p>
                        <div class="flex flex-row items-center">
                            <div class="flex flex-row">
                                <img class="h-8" src="{{asset('assets/frontend/images/shop/star.svg')}}">
                                <img class="h-8" src="{{asset('assets/frontend/images/shop/star.svg')}}">
                                <img class="h-8" src="{{asset('assets/frontend/images/shop/star.svg')}}">
                                <img class="h-8" src="{{asset('assets/frontend/images/shop/star.svg')}}">
                                <img class="h-8" src="{{asset('assets/frontend/images/shop/half-star.svg')}}">
                            </div>
                            <span class="text-2xl font-semibold pl-4">4.6</span>
                            <span class="text-sm underline pl-2">873 Reviews</span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-5">
                        <h2 class="text-2xl font-semibold">Choose the best option for you:</h2>
                        <div>
                            @if($subscription['subscription']['child'])
                            <div class="w-full inline-flex rounded-md" role="group">
                                <button type="button" data-id="1" wire:click="$set('selectedOptionValues.{{ $subscription['subscription']['child'][0]['option_id'] }}', {{ $subscription['subscription']['child'][0]['id'] }})" class="{{ $this->orderType == '1' ? 'bg-[#32908B19] border-b-2 border-[#32908B] text-[#32908B]' : 'text-[#707070]' }} order-type w-1/2 px-4 py-4 text-lg font-medium rounded-t-xl hover:bg-[#32908B19] hover:text-[#32908B] leading-none">
                                    Subscribe & Save up to 20%
                                </button>
                                <button type="button" data-id="2" wire:click="$set('selectedOptionValues.{{ $subscription['one-time']['child'][0]['option_id'] }}', {{ $subscription['one-time']['child'][0]['id'] }})" class="{{ $this->orderType == '2' ? 'bg-[#32908B19] border-b-2 border-[#32908B] text-[#32908B]' : 'text-[#707070]' }} order-type w-1/2 px-4 py-4 text-lg font-medium rounded-t-xl hover:bg-[#32908B19] hover:text-[#32908B] leading-none">
                                    One Time Purchase
                                </button>
                            </div>

                            <div class="bg-white px-4 pt-5">
                                <h3 class="text-lg font-semibold text-[#212121]">Choose the package:</h3>
                                <div class="{{ $this->orderType == '1' ? '' : 'hidden' }} subscription-body w-full pt-3.5 inline-flex rounded-md gap-2.5" role="group">
                                    @foreach($subscription['subscription']['child'] as $child)
                                    <div class="{{ (isset($this->selectedOptionValues[$child['option_id']]) && $this->selectedOptionValues[$child['option_id']] == $child['id']) ? 'border-[#32908B]' : 'border-[#32908B19]' }} relative bg-[#32908B19] subscription w-1/3 px-4 py-2 text-sm font-medium text-gray-900 border-2 rounded-lg flex flex-row items-center gap-2 min-h-[80px]">
                                        <?php
                                            $bottle_unit = $child['quantity'] > 1 ? 'bottles' : 'bottle';
                                            $month_unit = $child['duration'] > 1 ? 'months' : 'month';
                                        ?>
                                        <input wire:click="$set('selectedOptionValues.{{ $child['option_id'] }}', {{ $child['id'] }})" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-[#32908B] bg-white border-gray-300">
                                        <div class="flex flex-col ">
                                            <span class="text-lg font-semibold text-[#212121]">{{ $child['quantity'] . ' ' . $bottle_unit }}</span>
                                            @if ($child['duration'])
                                            <span class="text-sm font-normal text-[#707070]">{{ 'Every ' . $child['duration'] . ' ' . $month_unit }}</span>
                                            @endif
                                        </div>
                                        @if ($child['discount'] && $child['discount'] != 0)
                                        <div class="absolute top-0.5 right-0.5 rounded bg-[#32908B] px-1.5 py-0.5 text-white">
                                            {{ $child['discount'] }}%-off
                                        </div>
                                        @endif
                                    </div>
                                    @endforeach
                                </div>

                                <div class="{{ $this->orderType == '2' ? '' : 'hidden' }} one-time-purchase-body w-full pt-3.5 inline-flex rounded-md gap-2.5" role="group">
                                    @foreach($subscription['one-time']['child'] as $child)
                                    <div class="{{ (isset($this->selectedOptionValues[$child['option_id']]) && $this->selectedOptionValues[$child['option_id']] == $child['id']) ? 'border-[#32908B]' : 'border-[#32908B19]' }} relative bg-[#32908B19] subscription w-1/3 px-4 py-2 text-sm font-medium text-gray-900 border-2 rounded-lg flex flex-row items-center gap-2 min-h-[80px]">
                                        <?php
                                            $bottle_unit = $child['quantity'] > 1 ? 'bottles' : 'bottle';
                                            $month_unit = $child['duration'] > 1 ? 'months' : 'month';
                                        ?>
                                        <input wire:click="$set('selectedOptionValues.{{ $child['option_id'] }}', {{ $child['id'] }})" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-[#32908B] bg-white border-gray-300">
                                        <div class="flex flex-col ">
                                            <span class="text-lg font-semibold text-[#212121]">{{ $child['quantity'] . ' ' . $bottle_unit }}</span>
                                            @if ($child['duration'])
                                            <span class="text-sm font-normal text-[#707070]">{{ 'Every ' . $child['duration'] . ' ' . $month_unit }}</span>
                                            @endif
                                        </div>
                                        @if ($child['discount'] && $child['discount'] != 0)
                                        <div class="absolute top-0.5 right-0.5 rounded bg-[#32908B] px-1.5 py-0.5 text-white">
                                            {{ $child['discount'] }}%-off
                                        </div>
                                        @endif
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                            <form class="pt-4 bg-white px-4 pb-5 rounded-b-xl">
                                <h3 class="text-lg text-[#707070] font-semibold">Total</h3>
                                <div>
                                    <x-product-price class="font-medium" :variant="$this->variant" :product="$this->product" :subscription="$this->subscription" :orderType="$this->orderType" />
                                </div>
                                @if($selectedOptionValues)
                                <div class="max-w-xs mt-8" wire:key="component-{{ $selectedOptionValues['1001'] }}-{{ $orderType }}">
                                    <livewire:components.add-to-cart :purchasable="$this->variant" :orderType="$orderType" :selectedOptionValue="$selectedOptionValues" :subscription="$subscription"
                                                                    wire:key="component-{{$this->variant->id}}-{{ $selectedOptionValues['1001'] }}-{{ $orderType }}">
                                </div>
                                @else
                                <div class="max-w-xs mt-8" wire:key="component-{{$this->variant->id}}">
                                    <livewire:components.add-to-cart :purchasable="$this->variant" :orderType="$orderType" :selectedOptionValue="$selectedOptionValues" :subscription="$subscription"
                                                                    wire:key="component-{{$this->variant->id}}">
                                </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-20">
                <div class="flex flex-row gap-8">
                    <x-product.healthy-item title="thyroid" icon="{{ asset('assets/frontend/images/product/hexagon-cell.svg') }}" />
                    <x-product.healthy-item title="bones" icon="{{ asset('assets/frontend/images/product/joints-bone.svg') }}" />
                    <x-product.healthy-item title="brain" icon="{{ asset('assets/frontend/images/product/brain.svg') }}" />
                    <x-product.healthy-item title="immune system" icon="{{ asset('assets/frontend/images/product/medical-shield.svg') }}" />
                </div>
            </div>
        </div>
        <div>
            <x-product.about-product />
        </div>
        <div class="max-w-screen-2xl px-4 py-12 mx-auto sm:px-6 lg:px-8"></div>
        <div class="max-w-screen-2xl px-4 py-12 mx-auto sm:px-6 lg:px-8"></div>
        <div class="max-w-screen-2xl px-4 py-12 mx-auto sm:px-6 lg:px-8"></div>
    </div>
    <script>
        document.addEventListener('livewire:load', function () {

            let orderType = @this.orderType;

            $(document).on('click', '.order-type', function (e) {
                e.preventDefault();

                orderType = $(this).data('id');
                Livewire.emit('setOrderType', orderType);
            })

            var thumbs = new Swiper(".mySwiperInner", {
				// loop: true,
				spaceBetween: 15,
				slidesPerView: 5,
				cssMode: true,
				navigation: {
					nextEl: ".g-button-next",
					prevEl: ".g-button-prev",
				},
				watchSlidesProgress: true,
				freeMode: true,
				breakpoints: {
					1024: {
						slidesPerView:5
					},
					768: {
						slidesPerView: 3
					},
					640: {
						slidesPerView: 2,
					},
					320: {
						slidesPerView: 1,
					}
				}
			});
        })
    </script>
</section>
@section('description', $meta_description)
