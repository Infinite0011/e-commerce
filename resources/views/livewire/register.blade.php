<section>
    <div class="flex flex-row px-6 mx-auto max-w-screen-2xl sm:px-10 justify-between py-28">
        <div class="w-1/3 flex flex-col justify-between gap-6">
            <div class="flex flex-col gap-6">
                <h1 class="text-4xl font-semibold text-sg-base">Create an account</h1>
                <p class="text-lg font-normal text-sg-gray">Morem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="flex flex-col gap-6">
                <div class="flex flex-col gap-2.5">
                    <x-hub::input.group for="name" label="Full Name" :error="$errors->first('name')">
                        <x-hub::input.text class="p-4 pr-9 rounded-xl" id="name" wire:model="name" :error="$errors->first('name')" placeholder="Full Name" type="text" />
                    </x-hub::input.group>
                </div>
                <div class="flex flex-col gap-2.5">
                    <x-hub::input.group for="email" label="Email address" :error="$errors->first('email')">
                        <x-hub::input.text class="p-4 pr-9 rounded-xl" id="email" wire:model="email" :error="$errors->first('email')" placeholder="Email address" type="text" />
                    </x-hub::input.group>
                </div>
                <div class="flex flex-col gap-2.5 relative">
                    <x-hub::input.group for="password" label="Password" :error="$errors->first('password')">
                        <x-input.password class="p-4 pr-9 rounded-xl" id="password" wire:model="password" :error="$errors->first('password')" placeholder="Password" type="password" />
                    </x-hub::input.group>
                </div>
                <label class="flex items-center text-sm rounded-sm cursor-pointer">
                    <x-hub::input.checkbox class="rounded-sm border-[#D3D3D3]" wire:model.debounce.500ms="agreed" />
                    <span class="ml-2">I agree to SugarMD <a class="text-sg-base-blue cursor-pointer">Terms of Service</a> and <a class="text-sg-base-blue cursor-pointer">Privacy Policy</a></span>
                </label>
                <button wire:click.prevent="registerStore" class="text-base font-semibold text-white bg-sg-base-blue w-full p-4 rounded-xl cursor-pointer text-center">Sign up</button>
                <a class="text-base font-semibold text-sg-base bg-#2A62FE w-full p-4 rounded-xl cursor-pointer flex flex-row items-center justify-center border border-[#E4E4E7] gap-2">
                    <img class="w-6 h-6" src="{{asset('assets/frontend/images/auth/google-icon.svg')}}">
                    Sign up with Google
                </a>
                @if (session()->has('error'))
                <div class="px-0 text-[#F00] text-center">
                    <span class="message-icon icon-close"></span>
                    <strong>ERROR</strong>: {{ session('error') }}
                </div>
                @endif
            </div>
            <div class="text-center">
                Already have an account? <a href="{{ route('login.view') }}" class="text-sg-base-blue cursor-pointer">Login</a>
            </div>
        </div>
        <div class="w-1/2 pl-5 flex">
            <div class="py-11 bg-gradient-radial rounded-3xl from-[#EBF0F800] to-[#EBF0F8CC] flex items-center">
                <div class="w-4/5 px-20 mx-auto flex flex-col gap-6 items-center">
                    <div>
                        <img class="w-full" src="{{asset('assets/frontend/images/auth/banner.png')}}">
                    </div>
                    <h2 class="text-2xl font-semibold text-center">Meet Our Medicinal Herbal Supplements & Vitamins</h2>
                    <p class="text-base font-normal text-center text-gray-500">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
                    <div class="flex flex-row gap-3.5">
                        <span class="h-1.5 w-20 bg-sg-base-blue rounded-full"></span>
                        <span class="h-1.5 w-11 bg-white rounded-full"></span>
                        <span class="h-1.5 w-11 bg-white rounded-full"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@section('description', $meta_description)
