<div>
    <div class="flex justify-between items-center">
        <div class="flex items-center gap-4">
            <a href="{{ route('hub.blog.categories.view') }}"
            class="text-gray-600 rounded bg-gray-50 hover:bg-sky-500 hover:text-white">
                <x-hub::icon ref="chevron-left"
                            style="solid"
                            class="w-8 h-8" />
            </a>

            <h1 class="text-xl font-bold md:text-xl">
                @if ($category->id)
                    {{ $category->name }}
                @else
                    New Category
                @endif
            </h1>
        </div>
    </div>
    <div class="pb-24 mt-8 lg:gap-8 lg:flex lg:items-start">
        <div class="space-y-6 lg:flex-1">
            <div class="space-y-6">
                <div id="attributes">
                    <div class="space-y-4">
                        <form wire:submit.prevent="save">
                            <div class="shadow sm:rounded-md">
                                <div class="flex-col space-y-4 bg-white rounded px-4 py-5 sm:p-6">
                                    <header>
                                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                                            Details
                                        </h3>
                                    </header>
                                    <div class="space-y-4">
                                        <div>
                                            <x-hub::input.group for="name" label="Name" :error="$errors->first('category.name')">
                                                <x-hub::input.text id="name" wire:model="category.name" :error="$errors->first('category.name')" type="text" />
                                            </x-hub::input.group>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2 flex flex-row gap-4 mt-4 justify-end">
                                <x-hub::button type="submit">
                                    @if ($category->id)
                                        Save
                                    @else
                                        Create
                                    @endif
                                </x-hub::button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>