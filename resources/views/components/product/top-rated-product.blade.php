<section x-data="{
  read_more: false
}">
    <div class="flex flex-row bg-sg-product-green-1 gap-9">
        <div class="w-1/2 pl-[180px] py-[112px] flex flex-col gap-10">
            <div class="flex flex-col gap-3.5">
                <h1 class="text-[44px] font-bold text-sg-base">
                    About the product
                </h1>
                <p class="text-lg font-normal text-sg-gray-1">
                    SugarMD’s Organic Seamoss Complex is a nutrient-packed supplement that combines Organic Irish Moss, Organic Bladderwrack, Organic Burdock, and BioPerine to boost your body’s performance and overall wellness.
                </p>
            </div>
            <div class="flex flex-col gap-8">
                <div class="flex flex-col gap-4">
                    <h3 class="text-[26px] font-normal text-sg-base">Clinical Data</h3>
                    <div class="flex flex-row gap-2">
                        <div class="flex flex-1 flex-col gap-2 rounded-2xl py-4 px-2 bg-white">
                            <h2 class="text-[40px] font-semibold text-sg-base text-center">1.67x</h2>
                            <p class="text-base font-medium text-sg-base text-center">Lorem ipsum</p>
                            <p class="text-sm font-normal text-sg-base text-center">Yorem ipsum dolor sit amet</p>
                        </div>
                        <div class="flex flex-1 flex-col gap-2 rounded-2xl py-4 px-2 bg-white">
                            <h2 class="text-[40px] font-semibold text-sg-base text-center">1.67x</h2>
                            <p class="text-base font-medium text-sg-base text-center">Lorem ipsum</p>
                            <p class="text-sm font-normal text-sg-base text-center">Yorem ipsum dolor sit amet</p>
                        </div>
                        <div class="flex flex-1 flex-col gap-2 rounded-2xl py-4 px-2 bg-white">
                            <h2 class="text-[40px] font-semibold text-sg-base text-center">1.67x</h2>
                            <p class="text-base font-medium text-sg-base text-center">Lorem ipsum</p>
                            <p class="text-sm font-normal text-sg-base text-center">Yorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="text-[26px] font-normal text-sg-base">Description</h3>
                    <div class="flex flex-col gap-8">
                        <p x-show="read_more == false" class="text-base font-normal text-sg-gray-1">Irish Moss is a nutritious seaweed that is rich in vitamins and minerals such as calcium, magnesium, and iodine that helps support a healthy immune system and strengthens your bones.</p>
                        <p class="text-base font-normal text-sg-gray-1 flex flex-col gap-3" x-show="read_more == true">
                            <span>
                                Irish Moss is a nutritious seaweed that is rich in vitamins and minerals such as calcium, magnesium, and iodine that helps support a healthy immune system and strengthens your bones.
                            </span>
                            <span>
                                Bladderwrack is another type of seaweed that contains high levels of iodine, which is essential for thyroid function. Together with burdock root, a natural blood purifier, and BioPerine, a black pepper extract that enhances nutrient absorption, SugarMD’s Organic Seamoss Complex provides a powerful combination of natural ingredients to promote optimal health. Experience the benefits of these organic ingredients with SugarMD’s Organic Seamoss Complex today.
                            </span>
                        </p>
                        <p class="text-base font-semibold text-sg-base" x-show="read_more == true">
                            It is important to understand that the information provided on this supplement is not intended to diagnose, treat, cure, or prevent any disease. The statements made have not been evaluated by the FDA and should not be relied on as medical advice.
                        </p>
                        <p class="text-base font-normal text-sg-gray-1 flex flex-col gap-3" x-show="read_more == true">
                            <span>
                                While the product has undergone rigorous testing and quality control, results may vary and individual response cannot be guaranteed. It is also important to be aware of any potential interactions with medications or existing medical conditions before taking this supplement.
                            </span>
                            <span>
                                It is recommended to consult with a trusted healthcare professional before beginning any new supplement regimen. We take the safety and effectiveness of our product seriously and strive to provide transparent and accurate information for our customers.
                            </span>
                        </p>
                    </div>
                    <div>
                        <button x-on:click="read_more = true" x-show="read_more == false" class="px-4 py-3 leading-none text-lg font-normal text-sg-product-green border border-sg-product-green rounded-full">Read more</button>
                        <button x-on:click="read_more = false" x-show="read_more == true" class="px-4 py-3 leading-none text-lg font-normal text-sg-product-green border border-sg-product-green rounded-full">Read less</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/2">
            <img class="w-full" src="{{ asset('assets/frontend/images/product/about.png') }}">
        </div>
    </div>
</section>