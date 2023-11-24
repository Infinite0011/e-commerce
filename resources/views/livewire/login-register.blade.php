<section>
    <div class="relative bg-[#f7f7f7] border-b border-t border-[#ececec]">
        <div class="py-4 min-h-[60px] relative flex flex-row text-left">
            <div class="flex-1 flex justify-center">
                <h1 class="uppercase mb-0 font-bold text-2xl text-[#555]">My Account</h1>
            </div>
        </div>
    </div>

    <div class="py-8 mb-8">
        <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8" role="main">
            <div class="woocommerce-notices-wrapper">
                <ul class="text-center m-0 pb-2" role="alert">
                    <li class="mb-2 list-none">
                        @if (session()->has('error'))
                        <div class="px-0 text-[#b20000]">
                            <span class="message-icon icon-close"></span>
                            <strong>ERROR</strong>: {{ session('error') }}
                        </div>
                        @endif
                        @if (session()->has('message'))
                        <div class="px-0 text-[#00b200]">
                            <span class="message-icon icon-close"></span>
                            <strong>Success</strong>: {{ session('message') }}
                        </div>
                        @endif
                    </li>
                </ul>
            </div>
            <div class="-mx-8 mb-0 w-full flex">
                <div class="w-1/2 px-8">
                    <div>
                        <h3 class="uppercase text-xl font-bold tracking-wider mb-2.5">Login</h3>
                        <form>
                            <p class="mb-2">
                                <label class="mb-1.5 text-[#222] block text-sm font-bold" for="username">Username or email address&nbsp;<span class="required">*</span></label>
                                <input type="text" class="mb-4 px-3 bg-white border border-[#ddd] shadow-inner text-[#333] text-base h-10 max-w-full w-full align-middle focus:!shadow-[inset_0_2px_4px_0_rgb(0,0,0,0.05)]" wire:model="email" autocomplete="username" value="">
                                @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                            </p>
                            <p class="mb-2">
                                <label class="mb-1.5 text-[#222] block text-sm font-bold" for="password">Password&nbsp;<span class="required">*</span></label>
                                <span class="password-input"><input class="mb-4 px-3 bg-white border border-[#ddd] shadow-inner text-[#333] text-base h-10 max-w-full w-full align-middle focus:!shadow-[inset_0_2px_4px_0_rgb(0,0,0,0.05)]" type="password" wire:model="password" autocomplete="current-password"><span class="show-password-input"></span></span>
                                @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                            </p>
                            <p class="mb-2">
                                <label class="mb-3.5 text-[#222] block text-sm font-bold flex items-center">
                                    <input class="inline text-base mr-2.5" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Remember me</span>
                                </label>
                                <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="f8437889b5"><input type="hidden" name="_wp_http_referer" value="/my-account/">
                                <button type="submit" class="bg-[#446084] text-[#FFF] text-base uppercase px-5 h-10" name="login" value="Log in" wire:click.prevent="login">Log in</button>
                            </p>
                            <p class="mb-2">
                                <a class="text-[#334862]" href="https://sugarmds.com/my-account/lost-password/">Lost your password?</a>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="w-1/2 px-8 border-l border-[#ececec]">
                    <div>
                        <h3 class="uppercase text-xl font-bold tracking-wider mb-2.5">Register</h3>
                        <form>
                            <p class="mb-2">
                                <label class="mb-1.5 text-[#222] block text-sm font-bold" for="reg_username">Username&nbsp;<span class="required">*</span></label>
                                <input type="text" class="mb-4 px-3 bg-white border border-[#ddd] shadow-inner text-[#333] text-base h-10 max-w-full w-full align-middle focus:!shadow-[inset_0_2px_4px_0_rgb(0,0,0,0.05)]" wire:model="name" autocomplete="username" value="">
                                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                            </p>
                            <p class="mb-2">
                                <label class="mb-1.5 text-[#222] block text-sm font-bold" for="reg_email">Email address&nbsp;<span class="required">*</span></label>
                                <input type="email" class="mb-4 px-3 bg-white border border-[#ddd] shadow-inner text-[#333] text-base h-10 max-w-full w-full align-middle focus:!shadow-[inset_0_2px_4px_0_rgb(0,0,0,0.05)]" wire:model="nemail" autocomplete="email" value="">
                                @error('nemail') <span class="text-danger error">{{ $message }}</span>@enderror
                            </p>
                            <!-- <p class="mb-2">
                                <label class="mb-1.5 text-[#222] block text-sm font-bold" for="reg_phone">Phone&nbsp;<span class="required">*</span></label>
                                <input type="text" class="mb-4 px-3 bg-white border border-[#ddd] shadow-inner text-[#333] text-base h-10 max-w-full w-full align-middle focus:!shadow-[inset_0_2px_4px_0_rgb(0,0,0,0.05)]" wire:model="phone">
                                @error('phone') <span class="text-danger error">{{ $message }}</span>@enderror
                            </p> -->
                            <p class="mb-2">
                                <label class="mb-1.5 text-[#222] block text-sm font-bold" for="reg_password">Password&nbsp;<span class="required">*</span></label>
                                <span class="password-input"><input type="password" class="mb-4 px-3 bg-white border border-[#ddd] shadow-inner text-[#333] text-base h-10 max-w-full w-full align-middle focus:!shadow-[inset_0_2px_4px_0_rgb(0,0,0,0.05)]" wire:model="npassword" autocomplete="new-password"><span class="show-password-input"></span></span>
                                @error('npassword') <span class="text-danger error">{{ $message }}</span>@enderror
                            </p>
                            <p class="mb-2">
                                <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="a728290975"><input type="hidden" name="_wp_http_referer" value="/my-account/">
                                <button type="submit" class="bg-[#446084] text-[#FFF] text-base uppercase px-5 h-10" name="register" value="Register" wire:click.prevent="registerStore">Register</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@section('description', $meta_description)
