<section>
    <div class="bg-[#f4f8fd]">
        <header class="pt-4 pb-[200px] px-0 relative" style="background: #f4f8fd url(https://sugarmds.com/wp-content/themes/flatsome-child/wpp/wholesale/assets/images/rvheader_left.png) no-repeat left bottom;">
            <div class="max-w-[1350px] px-4 m-auto after:content-[''] after:absolute after:right-0 after:-top-4 after:w-1/2 after:h-[720px] after:bg-[url('https://sugarmds.com/wp-content/themes/flatsome-child/wpp/wholesale/assets/images/rvheader_right.jpg')] after:bg-no-repeat after:bg-center after:bg-cover">
                <a href="/" class="block max-w-[206px] mb-[114px]">
                    <img class="max-w-full h-auto" src="https://sugarmds.com/wp-content/themes/flatsome-child/wpp/wholesale/assets/images/rvlogo.png" alt="SugarMD">
                </a>
                <div class="max-w-lg ml-[100px]">
                    <h1 class="mb-3 text-[#3067fe] text-4xl font-bold leading-none">
                        <span class="block">Wholesale accounts</span>
                        <span class="block text-right">are <u>welcome!</u></span>
                    </h1>
                    <div class="font-medium text-xl text-[#33487b] max-w-[311px] ml-auto">
                        Contact us at <a href="mailto:wholesale@sugarmds.com">wholesale@sugarmd.com</a>
                    </div>
                </div>
            </div>
        </header>
        <div class="py-[240px] bg-[url('https://sugarmds.com/wp-content/themes/flatsome-child/wpp/wholesale/assets/images/rvinfo_right.png')] bg-no-repeat bg-[right_bottom_-50px]">
            <div class="flex gap-5 max-w-[1350px] px-4 mx-auto">
                <form wire:submit.prevent="save" class="px-20 py-14 bg-white border border-[3px] border-l-0 -mt-[320px] -ml-[100px] z-20 max-w-[850px]" method="POST">
                    <div class="font-bold text-2xl text-[#33487b] mb-[30px]">Lets meet!</div>
                    <div class="flex flex-col w-full gap-5">
                        <div class="flex flex-row w-full gap-5">
                            <div class="w-1/2">
                                <div>
                                    <div class="font-medium text-sm mb-2.5 text-[#222]">Full name*</div>
                                    <input wire:model="full_name" class="w-full" type="text" placeholder="Full name" name="full_name" value="">
                                </div>
                            </div>
                            <div class="w-1/2">
                                <div>
                                    <div class="font-medium text-sm mb-2.5 text-[#222]">Name of Business*</div>
                                    <input wire:model="business_name" class="w-full" type="text" placeholder="Name of Business" name="business_name" value="">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="font-medium text-sm mb-2.5 text-[#222]">Street address*</div>
                                <input wire:model="street_address" class="w-full" type="text" name="street_address" placeholder="Street address" value="">
                            </div>
                        </div>
                        <div class="flex flex-row w-full gap-5">
                            <div class="w-1/2">
                                <div>
                                    <div class="font-medium text-sm mb-2.5 text-[#222]">City/Town*</div>
                                    <input wire:model="city" class="w-full" type="text" name="city" placeholder="City/Town" value="">
                                </div>
                            </div>
                            <div class="w-1/4">
                                <div>
                                    <div class="font-medium text-sm mb-2.5 text-[#222]">State*</div>
                                    <select wire:model="state_of_business" class="w-full" name="state_of_business" id="">
                                        <option>Select State</option>
                                        @foreach($business_states as $state)
                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="w-1/4">
                                <div>
                                    <div class="font-medium text-sm mb-2.5 text-[#222]">Zip*</div>
                                    <input wire:model="zip_code" class="w-full" type="text" name="zip_code" placeholder="Zip" value="">
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row w-full gap-5">
                            <div class="w-1/2">
                                <div>
                                    <div class="font-medium text-sm mb-2.5 text-[#222]">Business email*</div>
                                    <input wire:model="business_email" class="w-full" type="text" name="business_email" placeholder="Business email" value="">
                                </div>
                            </div>
                            <div class="w-1/2">
                                <div>
                                    <div class="font-medium text-sm mb-2.5 text-[#222]">Phone</div>
                                    <input wire:model="business_phone" class="w-full" type="text" placeholder="Phone" name="business_phone" value="">
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row w-full gap-5">
                            <div class="w-1/2">
                                <div>
                                    <div class="font-medium text-sm mb-2.5 text-[#222]">EIN#*</div>
                                    <input wire:model="ein_number" class="w-full" type="text" name="ein_number" placeholder="EIN" value="">
                                </div>
                            </div>
                            <div class="w-1/2">
                                <div>
                                    <div class="font-medium text-sm mb-2.5 text-[#222]">Business type</div>
                                    <select wire:model="business_type" class="w-full" name="business_type" id="">
                                        <option>Select Business type</option>
                                        @foreach($business_types as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full block mt-5">
                        <input class="w-full" type="file" wire:model="photo">
                    </div>
                    <div class="mt-8">
                        <label class="flex items-center justify-center cursor-pointer text-[#222] text-base">
                            <input wire:model="term_condition" class="mr-1 cursor-pointer" type="checkbox" name="term_input" id="">Terms and
                            conditions
                        </label>
                    </div>
                    <input type="submit" value="Submit" class="w-full font-black uppercase cursor-pointer leading-10 bg-[#446084] text-white">
                </form>
                <div class="max-w-[535px]">
                        <div class="font-bold text-2xl text-[#3067fe] mb-10">
                        Brick and mortar or E -commerce store? Same great opportunity!
                    </div>
                    <div class="text-black gap-x-2.5 gap-y-12 grid grid-cols-2 justify-start mb-10">
                        <div class="bg-[url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgZmlsbD0ibm9uZSIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBzdHJva2U9IiMzMDY3RkUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLXdpZHRoPSIyIiBkPSJNMjAuODQgNC42MWE1LjUwMSA1LjUwMSAwIDAgMC03Ljc4IDBMMTIgNS42N2wtMS4wNi0xLjA2YTUuNTAxIDUuNTAxIDAgMCAwLTcuNzggNy43OGwxLjA2IDEuMDZMMTIgMjEuMjNsNy43OC03Ljc4IDEuMDYtMS4wNmE1LjUgNS41IDAgMCAwIDAtNy43OHYwWiIvPjwvc3ZnPg==)] bg-no-repeat bg-[center_left] pl-[34px] flex items-center">Pharmacies</div>
                        <div class="bg-[url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgZmlsbD0ibm9uZSIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBzdHJva2U9IiMzMDY3RkUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLXdpZHRoPSIyIiBkPSJNMjAuODQgNC42MWE1LjUwMSA1LjUwMSAwIDAgMC03Ljc4IDBMMTIgNS42N2wtMS4wNi0xLjA2YTUuNTAxIDUuNTAxIDAgMCAwLTcuNzggNy43OGwxLjA2IDEuMDZMMTIgMjEuMjNsNy43OC03Ljc4IDEuMDYtMS4wNmE1LjUgNS41IDAgMCAwIDAtNy43OHYwWiIvPjwvc3ZnPg==)] bg-no-repeat bg-[center_left] pl-[34px] flex items-center">Online retailers</div>
                        <div class="bg-[url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgZmlsbD0ibm9uZSIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBzdHJva2U9IiMzMDY3RkUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLXdpZHRoPSIyIiBkPSJNMjAuODQgNC42MWE1LjUwMSA1LjUwMSAwIDAgMC03Ljc4IDBMMTIgNS42N2wtMS4wNi0xLjA2YTUuNTAxIDUuNTAxIDAgMCAwLTcuNzggNy43OGwxLjA2IDEuMDZMMTIgMjEuMjNsNy43OC03Ljc4IDEuMDYtMS4wNmE1LjUgNS41IDAgMCAwIDAtNy43OHYwWiIvPjwvc3ZnPg==)] bg-no-repeat bg-[center_left] pl-[34px] flex items-center">Supermarkets</div>
                        <div class="bg-[url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgZmlsbD0ibm9uZSIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBzdHJva2U9IiMzMDY3RkUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLXdpZHRoPSIyIiBkPSJNMjAuODQgNC42MWE1LjUwMSA1LjUwMSAwIDAgMC03Ljc4IDBMMTIgNS42N2wtMS4wNi0xLjA2YTUuNTAxIDUuNTAxIDAgMCAwLTcuNzggNy43OGwxLjA2IDEuMDZMMTIgMjEuMjNsNy43OC03Ljc4IDEuMDYtMS4wNmE1LjUgNS41IDAgMCAwIDAtNy43OHYwWiIvPjwvc3ZnPg==)] bg-no-repeat bg-[center_left] pl-[34px] flex items-center">Distributors</div>
                    </div>
                    <div class="font-bold text-[#33487b] max-w-[412px]">
                        <div class="block">
                            Sell what people <u>know and love</u>
                        </div>
                        <div class="block text-right">through your sale channels</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white px-16 py-[111px]">
            <div class="max-w-[1350px] px-4 m-auto">
                <div class="font-bold text-3xl text-black mb-10">
                    Trusted by
                    <span class="text-[#3067fe]">companies<br>
                    of all sizes</span>
                </div>
                <div class="swiper mySwiperInner w-full overflow-visible">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://sugarmds.com/wp-content/uploads/2023/02/crosstown-pharmacy-logo-revised.webp" alt="Logotype">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://sugarmds.com/wp-content/themes/flatsome-child/wpp/wholesale/assets/images/rvlogo3.svg" alt="Logotype">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://sugarmds.com/wp-content/themes/flatsome-child/wpp/wholesale/assets/images/rvlogo4.svg" alt="Logotype">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://sugarmds.com/wp-content/themes/flatsome-child/wpp/wholesale/assets/images/rvlogo5.svg" alt="Logotype">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://sugarmds.com/wp-content/themes/flatsome-child/wpp/wholesale/assets/images/rvlogo6.svg" alt="Logotype">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://sugarmds.com/wp-content/uploads/2023/02/butterfield-logo.webp" alt="Logotype">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://sugarmds.com/wp-content/uploads/2023/02/crosstown-pharmacy-logo-revised.webp" alt="Logotype">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://sugarmds.com/wp-content/themes/flatsome-child/wpp/wholesale/assets/images/rvlogo3.svg" alt="Logotype">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://sugarmds.com/wp-content/themes/flatsome-child/wpp/wholesale/assets/images/rvlogo4.svg" alt="Logotype">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://sugarmds.com/wp-content/themes/flatsome-child/wpp/wholesale/assets/images/rvlogo5.svg" alt="Logotype">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://sugarmds.com/wp-content/themes/flatsome-child/wpp/wholesale/assets/images/rvlogo6.svg" alt="Logotype">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://sugarmds.com/wp-content/uploads/2023/02/butterfield-logo.webp" alt="Logotype">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://sugarmds.com/wp-content/uploads/2023/02/crosstown-pharmacy-logo-revised.webp" alt="Logotype">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://sugarmds.com/wp-content/themes/flatsome-child/wpp/wholesale/assets/images/rvlogo3.svg" alt="Logotype">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://sugarmds.com/wp-content/themes/flatsome-child/wpp/wholesale/assets/images/rvlogo4.svg" alt="Logotype">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://sugarmds.com/wp-content/themes/flatsome-child/wpp/wholesale/assets/images/rvlogo5.svg" alt="Logotype">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://sugarmds.com/wp-content/themes/flatsome-child/wpp/wholesale/assets/images/rvlogo6.svg" alt="Logotype">
                        </div>
                    </div>
                </div>
                <div class="rv-trust__logotypes slick-initialized slick-slider">
                    <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4488px; transform: translate3d(-1584px, 0px, 0px);"></div></div>
                </div>
            </div>
        </div>
        <div class="py-[100px]">
            <div class="max-w-[1350px] py-4 mx-auto">
                <div class="flex flex-row gap-5">
                    <div class="border w-1/4 border-2 border-[#ebf0f8] px-4 py-5">
                        <div class="mb-4">
                            <img src="https://sugarmds.com/wp-content/themes/flatsome-child/wpp/wholesale/assets/images/rvcard1.svg" alt="Icon">
                        </div>
                        <div class="font-bold text-2xl text-[#33487b] mb-2">Local business</div>
                        <div class="text-base text-black">
                        </div>
                    </div>
                    <div class="border w-1/4 border-2 border-[#ebf0f8] px-4 py-5">
                        <div class="mb-4">
                            <img src="https://sugarmds.com/wp-content/themes/flatsome-child/wpp/wholesale/assets/images/rvcard2.svg" alt="Icon">
                        </div>
                        <div class="font-bold text-2xl text-[#33487b] mb-2">Nationwide franchise</div>
                        <div class="text-base text-black">
                        </div>
                    </div>
                    <div class="border w-1/4 border-2 border-[#ebf0f8] px-4 py-5">
                        <div class="mb-4">
                            <img src="https://sugarmds.com/wp-content/themes/flatsome-child/wpp/wholesale/assets/images/rvcard3.svg" alt="Icon">
                        </div>
                        <div class="font-bold text-2xl text-[#33487b] mb-2">Online store</div>
                        <div class="text-base text-black">
                        </div>
                    </div>
                    <div class="border w-1/4 border-2 border-[#ebf0f8] px-4 py-5">
                        <div class="mb-4">
                            <img src="https://sugarmds.com/wp-content/themes/flatsome-child/wpp/wholesale/assets/images/rvcard4.svg" alt="Icon">
                        </div>
                        <div class="font-bold text-2xl text-[#33487b] mb-2">Amazon sellers</div>
                        <div class="text-base text-black">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('livewire:load', function () {

            var thumbs = new Swiper(".mySwiperInner", {
				loop: true,
				spaceBetween: 30,
				slidesPerView: 4,
				cssMode: true,
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
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
