@props(['product'])

<div class="block group"
   href="{{ route('product.view', $product->defaultUrl->slug) }}">
    <div class="overflow-hidden rounded-3xl aspect-w-1 aspect-h-1">
        @if ($product->thumbnail)
            <img class="object-cover transition-transform duration-300 group-hover:scale-105"
                 src="{{ $product->thumbnail->getUrl('medium') }}"
                 alt="{{ $product->translateAttribute('name') }}" />
        @endif
    </div>

    <div class="flex flex-col gap-4 pt-4">
        <div class="flex flex-row">
            <img class="h-8" src="{{asset('assets/frontend/images/shop/star.svg')}}">
            <img class="h-8" src="{{asset('assets/frontend/images/shop/star.svg')}}">
            <img class="h-8" src="{{asset('assets/frontend/images/shop/star.svg')}}">
            <img class="h-8" src="{{asset('assets/frontend/images/shop/star.svg')}}">
            <img class="h-8" src="{{asset('assets/frontend/images/shop/star.svg')}}">
        </div>
        <span class="text-sg-base text-[26px] leading-[36px] font-semibold line-clamp-1">{{ $product->translateAttribute('name') }}</span>
        <a href="{{ route('product.view', $product->defaultUrl->slug) }}" class="flex flex-row border border-sg-base-blue rounded-[36px] w-[176px] gap-2.5 justify-center items-center cursor-pointer">
            <p class="text-sg-base-blue font-normal leading-[27px] text-lg">Learn more</p>
            <img src="{{asset('assets/frontend/images/ArrowUpRight.svg')}}">
        </a>
    </div>
</div>
