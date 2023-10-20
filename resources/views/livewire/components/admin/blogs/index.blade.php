<div class="flex-col space-y-4">
    <div class="flex items-center justify-between">
        <strong class="text-lg font-bold md:text-2xl">
            Blogs
        </strong>

        <div class="text-right">
            <x-hub::button tag="a"
                           href="{{ route('hub.blogs.create') }}">
                Create Blog</x-hub::button>
        </div>
    </div>

    @livewire('components.admin.blogs.table')
</div>
