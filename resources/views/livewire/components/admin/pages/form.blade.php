<div>
    <div class="flex justify-between items-center">
        <div class="flex items-center gap-4">
            <a href="{{ route('hub.pages.view') }}"
            class="text-gray-600 rounded bg-gray-50 hover:bg-sky-500 hover:text-white">
                <x-hub::icon ref="chevron-left"
                            style="solid"
                            class="w-8 h-8" />
            </a>

            <h1 class="text-xl font-bold md:text-xl uppercase">
                @if ($pageInformation->id)
                    {{ $pageInformation->page_slug }}
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
                                            <label for="meta_description" class="flex items-center text-sm font-medium text-gray-700 py-1">
                                                <span class="block">
                                                    Meta Description<br>
                                                </span>
                                            </label>
                                            <input name="meta_description" wire:model="pageInformation.meta_description" class="form-input block w-full border-gray-300 rounded-md shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm disabled:opacity-50 disabled:cursor-not-allowed" type="text" maxlength="255">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2 flex flex-row gap-4 mt-4 justify-end">
                                <x-hub::button type="submit">
                                        Save
                                </x-hub::button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>