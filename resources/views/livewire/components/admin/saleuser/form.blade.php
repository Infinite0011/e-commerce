<div>
    <div class="flex justify-between items-center">
        <div class="flex items-center gap-4">
            <a href="{{ route('hub.blogs.view') }}"
            class="text-gray-600 rounded bg-gray-50 hover:bg-sky-500 hover:text-white">
                <x-hub::icon ref="chevron-left"
                            style="solid"
                            class="w-8 h-8" />
            </a>

            <h1 class="text-xl font-bold md:text-xl">
                @if ($blog->id)
                    {{ $blog->title }}
                @else
                    New Blog
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
                                            <label for="description" class="flex items-center text-sm font-medium text-gray-700 py-1">
                                                <span class="block">
                                                    Title<br>
                                                </span>
                                            </label>
                                            <input name="title" wire:model="title" class="form-input block w-full border-gray-300 rounded-md shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm disabled:opacity-50 disabled:cursor-not-allowed" type="text" maxlength="255">
                                        </div>
                                        <div>
                                            <label for="description" class="flex items-center text-sm font-medium text-gray-700 py-1">
                                                <span class="block">
                                                    Description<br>
                                                </span>
                                            </label>
                                            <x-hub::input.richtext
                                                name="description_input"
                                                id="description_input"
                                                wire:model.defer="description"
                                                :initial-value="$description"
                                                class="mt-4"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shadow sm:rounded-md">
                                <div class="flex-col space-y-4 bg-white rounded px-4 py-5 sm:p-6">
                                    <header>
                                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                                            Images
                                        </h3>
                                    </header>
                                    <div class="space-y-4">
                                        <div class="relative cursor-pointer">
                                            <div class="w-full cursor-pointer p-8 filepond--panel-root text-center" for="upload-photo">Upload file</div>
                                            <input wire:model="photo" class="w-full opacity-0 absolute top-0 cursor-pointer p-8" type="file" name="photo" id="upload-photo" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shadow sm:rounded-md">
                                <div class="flex-col space-y-4 bg-white rounded px-4 py-5 sm:p-6">
                                    <header>
                                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                                            Variants
                                        </h3>
                                    </header>
                                    <div class="space-y-4">
                                        <div>
                                            <label for="description" class="flex items-center text-sm font-medium text-gray-700 py-1">
                                                <span class="block">
                                                    Category<br>
                                                </span>
                                            </label>
                                            <input wire:model="category" name="category" class="form-input block w-full border-gray-300 rounded-md shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm disabled:opacity-50 disabled:cursor-not-allowed" type="text" maxlength="255">
                                        </div>
                                        <div>
                                            <label for="description" class="flex items-center text-sm font-medium text-gray-700 py-1">
                                                <span class="block">
                                                    Tag<br>
                                                </span>
                                            </label>
                                            <input wire:model="tag" name="tag" class="form-input block w-full border-gray-300 rounded-md shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm disabled:opacity-50 disabled:cursor-not-allowed" type="text" maxlength="255">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2 flex flex-row gap-4 mt-4 justify-end">
                                @include('partials.blogs.status-bar')
                                <x-hub::button type="submit">
                                    @if ($blog->id)
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