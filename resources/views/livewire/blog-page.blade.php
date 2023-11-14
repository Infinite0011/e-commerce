<section>
    <div class="overflow-y-hidden py-8" role="main">
        <div class="px-0 flex flex-wrap w-full m-auto max-w-screen-xl">
            <div class="flex flex-col gap-5 w-full">
                <h1 class="text-5xl font-bold">Discover Our Blog</h1>
                <div class="flex flex-row w-full justify-between items-center">
                    <div class="flex flex-row gap-2">
                        <span class="border rounded px-4 py-1 bg-[#2A62FE]">
                            All Categories (24)
                        </span>
                        <span class="border rounded px-4 py-1">
                            Diabetic Diet
                        </span>
                        <span class="border rounded px-4 py-1">
                            Sugar Diet
                        </span>
                        <span class="border rounded px-4 py-1">
                            Proper Sleep
                        </span>
                        <span class="border rounded px-4 py-1">
                            Diabetic Supplements
                        </span>
                    </div>
                    <div class="border rounded min-w-[250px] min-h-[30px] px-4 py-1">Search ...</div>
                </div>
                <div class="mt-5">
                    <article class="mb-[60px] block">
                        <div class="transition-opacity">
                            <header class="block">
                                <div class="mb-8 max-h-[350px] relative">
                                    <a href="https://sugarmds.com/the-insulin-resistance-diet-reverse-insulin-resistance-now/">
                                        <img width="724" height="483" src="/storage/{{ $latest_blog->image }}" class="max-h-[350px] w-full object-cover opacity-100 transition-opacity inline-block max-w-full align-middle rounded-3xl" alt="Legumes" decoding="async" fetchpriority="high" sizes="(max-width: 724px) 100vw, 724px">
                                    </a>
                                    <div class="bg-gradient-to-t absolute text-white bottom-0 left-0 right-0 from-[#000000D0] to-[#FFFFFF00] rounded-b-3xl py-5 px-5 flex flex-col gap-1">
                                        <div class="flex items-center space-x-2 text-base">
                                            <p class="">Jonathan Smith</p>
                                            <div class="h-1 w-1 rounded-full bg-gray-500"></div>
                                            <p class="">20 Jan 2022</p>
                                            <div class="h-1 w-1 rounded-full bg-gray-500"></div>
                                            <p class="">17 min</p>
                                        </div>
                                        <a href="{{ route('blog.detail', ['id' => $latest_blog->id]) }}" class="text-3xl font-bold">
                                            {{ $latest_blog->title }}
                                        </a>
                                        <p class="text-base">
                                            {{ strip_tags($latest_blog->description) }}
                                        </p>
                                        <div>
                                            <span class="text-base lowercase border rounded-full px-2 py-0.5">Diabetic diet</span>
                                            <span class="text-base lowercase border rounded-full px-2 py-0.5 ml-1.5">Insulin resistance and prediabetes</span>
                                            <span class="text-base lowercase border rounded-full px-2 py-0.5 ml-1.5">insulin resistance diet</span>
                                        </div>
                                    </div>
                                </div>
                            </header>
                        </div>
                    </article>
                </div>
            </div>

            <div class="flex flex-col gap-5 w-full">
                <h1 class="text-3xl font-bold uppercase">Trending</h1>
                <div class="flex flex-row flex-wrap -mx-3">
                    @foreach($trending_blogs as $blog)
                        @livewire('components.blog.list-item', ['blog' => $blog])
                    @endforeach
                </div>
            </div>

            <div class="flex flex-col gap-5 w-full">
                <h1 class="text-3xl font-bold uppercase">You might be interested</h1>
                <div class="flex flex-row flex-wrap -mx-3">
                    @foreach($interesting_blogs as $blog)
                        @livewire('components.blog.list-item', ['blog' => $blog])
                    @endforeach
                </div>
            </div>

            <div class="flex flex-col gap-5 w-full">
                <h1 class="text-3xl font-bold uppercase">All articles</h1>
                <div class="flex flex-row flex-wrap -mx-3">
                    @foreach($blogs as $blog)
                        @livewire('components.blog.list-item', ['blog' => $blog])
                    @endforeach
                </div>
                {{ $blogs->links('pagination::simple-tailwind') }}
            </div>
        </div>
    </div>
</section>
@section('description', $meta_description)
