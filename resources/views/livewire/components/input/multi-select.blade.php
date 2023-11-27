<div class="w-full md:w-1/2 flex flex-col items-center h-64 mx-auto">
    <style>
        .top-100 {top: 100%}
        .bottom-100 {bottom: 100%}
        .max-h-select {
            max-height: 300px;
        }
    </style>
    <div class="w-full">
        <div class="flex flex-col items-center relative">
            <div class="w-full  svelte-1l8159u">
                <div class="my-2 p-1 flex border border-gray-200 bg-white rounded svelte-1l8159u">
                    <div class="flex flex-auto flex-wrap gap-1" wire:click.prevent="openDropdown">
                        @foreach ($selected as $option)
                        <div wire:click.stop="" class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-full text-gray-700 bg-gray-100 border border-gray-300 ">
                            <div class="text-xs font-normal leading-none max-w-full flex-initial">{{ $option['name'] }}</div>
                            <div class="flex flex-auto flex-row-reverse">
                                <div>
                                    <svg wire:click="remove({{ $option['id'] }})" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x cursor-pointer hover:text-gray-400 rounded-full w-4 h-4 ml-2">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-200 svelte-1l8159u">
                        <button wire:click.prevent="" class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up w-4 h-4">
                                <polyline points="18 15 12 9 6 15"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="@if( !$open ) hidden @endif absolute shadow top-100 bg-white z-40 w-full lef-0 rounded max-h-select overflow-y-auto svelte-5uyqqj">
                <div class="flex flex-col w-full">
                    @foreach($options as $option)
                    <div wire:click="select('{{ $option }}')" class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-gray-100">
                        <div class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative hover:border-gray-100">
                            <div class="w-full items-center flex">
                                <div class="mx-2 leading-6  ">{{ $option->name }} </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>