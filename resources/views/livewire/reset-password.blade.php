<section>
    <div class="flex flex-col px-6 mx-auto max-w-screen-2xl sm:px-10 justify-between pb-28">
        <div class="py-20">
            @livewire('components.redirect-back')
        </div>
        <div class="max-w-[530px] flex gap-8 mx-auto flex-col items-center">
            <div class="flex flex-col gap-4">
                <h1 class="text-5xl font-semibold text-center text-[#212121]">Reset your password</h1>
                <p class="text-lg font-normal text-center text-[#707070]">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="flex flex-col gap-6 items-center w-full">
                <div class="w-full">
                    <label for="email" class="flex items-center text-base font-medium text-gray-700">
                        <span class="block"></span>
                        <span class="block">
                            Email address
                        </span>
                    </label>
                    <x-hub::input.group for="email" class="!text-base" label="" :error="$errors->first('email')">
                        <x-hub::input.text class="p-4 pr-9 rounded-xl !text-base" id="email" wire:model="email" :error="$errors->first('email')" placeholder="Email address" type="text" />
                    </x-hub::input.group>
                </div>
                <button wire:click="send" class="rounded-xl bg-[#2A62FE] text-base leading-7 py-4 text-center w-full text-white font-semibold">Send link</button>
            </div>
            @if (session()->has('error'))
            <div class="px-0 text-[#F00] text-center">
                <span class="message-icon icon-close"></span>
                <strong>ERROR</strong>: {{ session('error') }}
            </div>
            @endif
            <p class="text-base font-medium text-[#707070] text-center">Don’t have an account? <a href="{{ route('register.view') }}" class="text-[#2A62FE] cursor-pointer">Create a free account</a></p>
        </div>
    </div>
</section>
@section('description', $meta_description)
