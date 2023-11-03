<section>
    <div class="overflow-y-hidden py-8" role="main">
        <div class="px-0 flex flex-wrap w-full m-auto max-w-screen-xl">
            <div class="mb-0 px-8 pb-8 max-w-full basis-full m-0 relative w-full">
                <div>
                    @foreach($blogs as $blog)
                    <article class="mb-[45px] border-b border-neutral-200 block">
                        <div class="transition-opacity">
                            <header class="block">
                                <div class="mb-8 max-h-[350px] relative">
                                    <a href="https://sugarmds.com/the-insulin-resistance-diet-reverse-insulin-resistance-now/">
                                        <img width="724" height="483" src="/storage/{{ $blog->image }}" class="max-h-[350px] w-full object-cover opacity-100 transition-opacity inline-block max-w-full align-middle" alt="Legumes" decoding="async" fetchpriority="high" sizes="(max-width: 724px) 100vw, 724px">
                                    </a>
                                    <div class="absolute top-0 m-0 p-0 text-2xl left-0 table h-[70px] w-[70px] z-20 font-bold leading-none text-white text-center whitespace-nowrap align-baseline">
                                        <div class="text-white bg-[#2a62fe] border border-2 border-[#2a62fe] table-cell font-extrabold h-full p-0.5 text-center transition-colors align-middle whitespace-nowrap w-full">
                                            <span>{{ date("j", strtotime($blog->created_at)) }}</span><br>
                                            <span>{{ date("M", strtotime($blog->created_at)) }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="pb-5 text-center">
                                    <h2 class="mb-3 text-left font-normal text-[#2a62fe] text-2xl">
                                        <a href="{{ route('blog.detail', ['id' => $blog->id]) }}" rel="bookmark" class="transition-colors">{{ $blog->title }}</a>
                                    </h2>
                                    <div class="mb-2.5 h-px max-w-full bg-neutral-200 w-full"></div>
                                    <div class="text-lg uppercase font-light text-[#1c2235] normal-case text-left m-auto">
                                        <span>Posted on <a href="{{ route('blog.detail', ['id' => $blog->id]) }}" rel="bookmark" class="text-[#0d6efd] no-underline bg-white">
                                            <time datetime="2022-12-11T08:00:06-06:00">{{ date("F j, Y", strtotime($blog->created_at)) }}</time>
                                        </a></span>
                                        <span>by <span>
                                            <a class="text-[#0d6efd] no-underline bg-white" href="https://sugarmds.com/author/ahmet/">Ahmet Ergin, MD Endocrinologist</a>
                                        </span></span>
                                    </div>
                                </div>
                            </header>
                            <div>
                                <div class="pb-1 text-left pt-6">
                                    <div class="text-left">
                                    <p class="text-left mb-0 overflow-hidden text-ellipsis" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">{{ strip_tags($blog->description) }}
                                    </p>
                                    <div class="text-left">
                                        <a class="text-white bg-[#0d6efd] mt-5 text-base px-4 inline-block mx-0 text-left border border-2 leading-10 uppercase" href="{{ route('blog.detail', ['id' => $blog->id]) }}">Continue reading <span>→</span></a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <footer class="text-xs pt-1.5 pb-2">
                                <span>
                                    <i class="fa fa-tag"></i>
                                    <a class="lowercase underline ml-1.5 text-[#334862]" href="https://sugarmds.com/category/the-best-diabetic-diet/" rel="category tag">Diabetic diet</a>, <a class="lowercase underline ml-1.5 text-[#334862]" href="https://sugarmds.com/category/insulin-resistance-and-prediabetes/" rel="category tag">Insulin resistance and prediabetes</a>
                                </span>
                                <span>&nbsp;|&nbsp;</span>
                                <span>
                                    <i class="fa fa-hashtag"></i>
                                    <a class="lowercase underline ml-1.5 text-[#334862]" href="https://sugarmds.com/tag/insulin-resistance-diet/" rel="tag">insulin resistance diet</a>
                                </span>
                            </footer>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@section('description', $meta_description)
