@props(['blog'])

<article class="block group">
    <div class="transition-opacity">
        <header class="block">
            <div class="mb-8 max-h-[350px] relative">
                <img width="724" height="483" src="/storage/{{ $blog->image }}" class="h-[300px] w-full object-cover opacity-100 transition-opacity inline-block max-w-full align-middle rounded-2xl" alt="Legumes" decoding="async" fetchpriority="high" sizes="(max-width: 724px) 100vw, 724px">
            </div>
            <div class="flex flex-col gap-3">
                <div class="flex items-center space-x-2 text-sm text-[#707070]">
                    <p class="">Jonathan Smith</p>
                    <div class="h-1 w-1 rounded-full bg-gray-500"></div>
                    <p class="">20 Jan 2022</p>
                    <div class="h-1 w-1 rounded-full bg-gray-500"></div>
                    <p class="">17 min</p>
                </div>
                <div class="flex flex-col gap-2">
                    <a href="{{ route('blog.detail', ['id' => $blog->id]) }}" class="text-2xl">
                        {{ $blog->title }}
                    </a>
                    <p class="text-sm text-[#707070]" style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;">
                        {{ strip_tags($blog->description) }}
                    </p>
                </div>
                <div class="flex flex-row flex-wrap gap-2">
                    <span class="text-xs lowercase border rounded-full px-2 py-0.5">Diabetic diet</span>
                    <span class="text-xs lowercase border rounded-full px-2 py-0.5">Insulin resistance and prediabetes</span>
                    <span class="text-xs lowercase border rounded-full px-2 py-0.5">insulin resistance diet</span>
                </div>
            </div>
        </header>
    </div>
</article>