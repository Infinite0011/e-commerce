<section>
    <div class="flex flex-col px-6 mx-auto max-w-screen-2xl sm:px-10 justify-between pb-28">
        <div class="py-20">
            <div class="flex">
                <a class="border cursor-pointer border-[#2A62FE] rounded-full p-1" href="{{ route('home') }}">
                    <img class="w-9 h-9" src="{{asset('assets/frontend/images/ArrowUpLeft.svg')}}">
                </a>
            </div>
        </div>
        <div class="max-w-[530px] flex gap-8 mx-auto flex-col items-center">
            <div class="flex flex-col gap-4">
                <h1 class="text-5xl font-semibold text-center text-[#212121]">Create new password</h1>
                <p class="text-lg font-normal text-center text-[#707070]">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="flex flex-col gap-6 items-center w-full">
                <div class="w-full">
                    <label for="password" class="flex items-center text-base font-medium text-gray-700">
                        <span class="block"></span>
                        <span class="block">
                            New Password
                        </span>
                    </label>
                    <x-hub::input.group for="password" class="!text-base" label="" :error="$errors->first('password')">
                        <x-input.password class="p-4 pr-9 rounded-xl !text-base" id="password" wire:model="password" :error="$errors->first('password')" placeholder="New Password" type="text" />
                    </x-hub::input.group>
                </div>
                <div class="w-full">
                    <label for="password_confirmation" class="flex items-center text-base font-medium text-gray-700">
                        <span class="block"></span>
                        <span class="block">
                            Confirm Password
                        </span>
                    </label>
                    <x-hub::input.group for="password_confirmation" class="!text-base" label="" :error="$errors->first('password_confirmation')">
                        <x-input.password class="p-4 pr-9 rounded-xl !text-base" id="password_confirmation" wire:model="password_confirmation" :error="$errors->first('password_confirmation')" placeholder="Confirm Password" type="text" />
                    </x-hub::input.group>
                </div>
                <button wire:click="resetPassword" class="rounded-xl bg-[#2A62FE] text-base leading-7 py-4 text-center w-full text-white font-semibold">Reset Password</button>
            </div>
            @if (session()->has('error'))
            <div class="px-0 text-[#F00] text-center">
                <span class="message-icon icon-close"></span>
                <strong>ERROR</strong>: {{ session('error') }}
            </div>
            @endif
        </div>
    </div>
</section>
@section('description', $meta_description)
