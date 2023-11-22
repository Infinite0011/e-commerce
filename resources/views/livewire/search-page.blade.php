<section>
    <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-row justify-between">
            <h1 class="text-3xl font-bold">
                Search Results
                @if (isset($term))
                    for <u>{{ $term }}</u>
                @endif
            </h1>
            <div>
                <input type="text" class="mb-4 px-3 bg-white border border-[#ddd] shadow-inner text-[#333] text-base h-10 max-w-full w-80 align-middle focus:!shadow-[inset_0_2px_4px_0_rgb(0,0,0,0.05)]" wire:model.defer="query" placeholder="Search" value="{{ $query }}" wire:change="searchQueryChanged">
            </div>
        </div>
        <div class="pt-6">
            <h1 class="text-3xl font-bold">Products</h1>
            <div class="grid grid-cols-1 gap-8 mt-8 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($this->results as $result)
                    <x-product-card :product="$result" />
                @endforeach
            </div>
        </div>
        <div class="pt-6">
            <h1 class="text-3xl font-bold">Blogs</h1>
            <div class="grid grid-cols-1 gap-8 mt-8 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($this->blogResults as $blogResult)
                    <x-blog-card :blog="$blogResult" />
                @endforeach
            </div>
        </div>
    </div>
</section>
@section('description', $meta_description)
