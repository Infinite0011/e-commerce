<section class="w-full flex flex-col mx-auto pt-[110px] px-[184px] pb-0 gap-16">
    <h2 class="font-bold text-sg-base text-5xl leading-[62.4px]">Blog posts</h2>
    <div class="flex flex-row gap-8">
        @foreach($this->blogs as $blog)
            @livewire('components.blog.list-item', ['blog' => $blog])
        @endforeach
    </div>
</section>