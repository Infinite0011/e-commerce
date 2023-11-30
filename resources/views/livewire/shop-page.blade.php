<section>
    <div class="max-w-screen-2xl px-4 mx-auto sm:px-6 lg:px-8">
        <div class="gap-8 flex flex-col py-20">
            <h1 class="text-3xl font-bold">
                Discover Our Products
            </h1>
            <div class="relative">
                <div class="w-full flex flex-row gap-3 overflow-hidden">
                    <a href="{{ route('shop.view') }}" class="cursor-pointer whitespace-nowrap border border-sg-base-blue p-4 rounded-2xl bg-sg-base-blue text-[#FFF]">All Products(11)</a>
                    @foreach($this->collections as $collection)
                    <a href="{{ route('shop.view', ['collection' => $collection->id]) }}" class="cursor-pointer border border-[#000] p-4 rounded-2xl text-[#000] flex flex-row items-center justify-center gap-2">
                        <i class="fa fa-heartbeat w-6 h-6 text-[#000] text-base flex items-center justify-center"></i>
                        <span class="whitespace-nowrap">{{ $collection->translateAttribute('name') }}</span>
                    </a>
                    @endforeach
                </div>
                <div class="w-2/5 absolute h-full top-0 right-0 bg-gradient-to-l from-[#FFF] via-[#FFFFFFE0] flex justify-end items-center">
                    <i class="fa fa-angle-right text-4xl cursor-pointer"></i>
                </div>
            </div>
        </div>
        <div class="relative flex flex-row justify-between px-8 py-4">
            <div class="w-[766px] flex gap-4 justify-center flex-col">
                <h2 class="text-white text-3xl font-semibold">THE SUGARMD DIFFERENCE!</h2>
                <p class="text-xl font-normal text-[#AAC0FF99]">The SugarMD promise is to give you real results with potency and purity potency and purity you can trust.</p>
            </div>
            <div class="">
                <img class="h-[285px]" src="{{asset('assets/frontend/images/shop/banner.png')}}">
            </div>
            <img class="rounded-l-3xl -z-10 absolute top-0 left-0 h-full" src="{{asset('assets/frontend/images/shop/banner-bg.svg')}}">
            <img class="rounded-l-3xl -z-10 absolute top-0 right-1/4 w-[350px]" src="{{asset('assets/frontend/images/shop/banner-top-vec.svg')}}">
            <img class="rounded-l-3xl -z-10 absolute bottom-0 right-[43%] w-[280px]" src="{{asset('assets/frontend/images/shop/banner-bottom-vec.svg')}}">
            <span class="w-3.5 h-3.5 bg-[#69C3EB] absolute top-5 left-[14%] rounded-full opacity-40"></span>
            <span class="w-3.5 h-3.5 bg-[#69C3EB] absolute top-20 left-[42%] rounded-full opacity-40"></span>
            <span class="w-3.5 h-3.5 bg-[#69C3EB] absolute bottom-6 left-[63%] rounded-full opacity-70"></span>
        </div>
        <div class="grid grid-cols-1 gap-8 mt-8 sm:grid-cols-2 lg:grid-cols-3">
            @forelse($products as $product)
                <x-product-card :product="$product" />
            @empty
            @endforelse
        </div>
        <div class="pt-5">
            {{ $products->withQueryString()->links('pagination::simple-tailwind') }}
        </div>
    </div>
</section>
@section('description', $meta_description)
