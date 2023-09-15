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
            <div class="-mx-8 mb-0 w-full flex">
                <div class="w-1/2 px-8">
                    <div>
                        <h3 class="uppercase text-xl font-bold tracking-wider mb-2.5">Login</h3>
                        <form method="post">
                            <p class="mb-2">
                                <label class="mb-1.5 text-[#222] block text-sm font-bold" for="username">Username or email address&nbsp;<span class="required">*</span></label>
                                <input type="text" class="mb-4 px-3 bg-white border border-[#ddd] shadow-inner text-[#333] text-base h-10 max-w-full w-full align-middle focus:!shadow-[inset_0_2px_4px_0_rgb(0,0,0,0.05)]" name="username" id="username" autocomplete="username" value="">
                            </p>
                            <p class="mb-2">
                                <label class="mb-1.5 text-[#222] block text-sm font-bold" for="password">Password&nbsp;<span class="required">*</span></label>
                                <span class="password-input"><input class="mb-4 px-3 bg-white border border-[#ddd] shadow-inner text-[#333] text-base h-10 max-w-full w-full align-middle focus:!shadow-[inset_0_2px_4px_0_rgb(0,0,0,0.05)]" type="password" name="password" id="password" autocomplete="current-password"><span class="show-password-input"></span></span>
                            </p>
                            <p class="mb-2">
                                <label class="mb-3.5 text-[#222] block text-sm font-bold flex items-center">
                                    <input class="inline text-base mr-2.5" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Remember me</span>
                                </label>
                                <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="f8437889b5"><input type="hidden" name="_wp_http_referer" value="/my-account/">
                                <button type="submit" class="bg-[#446084] text-[#FFF] text-base uppercase px-5 h-10" name="login" value="Log in">Log in</button>
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
                        <form method="post">
                            <p class="mb-2">
                                <label class="mb-1.5 text-[#222] block text-sm font-bold" for="reg_username">Username&nbsp;<span class="required">*</span></label>
                                <input type="text" class="mb-4 px-3 bg-white border border-[#ddd] shadow-inner text-[#333] text-base h-10 max-w-full w-full align-middle focus:!shadow-[inset_0_2px_4px_0_rgb(0,0,0,0.05)]" name="username" id="reg_username" autocomplete="username" value="">
                            </p>
                            <p class="mb-2">
                                <label class="mb-1.5 text-[#222] block text-sm font-bold" for="reg_email">Email address&nbsp;<span class="required">*</span></label>
                                <input type="email" class="mb-4 px-3 bg-white border border-[#ddd] shadow-inner text-[#333] text-base h-10 max-w-full w-full align-middle focus:!shadow-[inset_0_2px_4px_0_rgb(0,0,0,0.05)]" name="email" id="reg_email" autocomplete="email" value="">
                            </p>
                            <p class="mb-2">
                                <label class="mb-1.5 text-[#222] block text-sm font-bold" for="reg_password">Password&nbsp;<span class="required">*</span></label>
                                <span class="password-input"><input type="password" class="mb-4 px-3 bg-white border border-[#ddd] shadow-inner text-[#333] text-base h-10 max-w-full w-full align-middle focus:!shadow-[inset_0_2px_4px_0_rgb(0,0,0,0.05)]" name="password" id="reg_password" autocomplete="new-password"><span class="show-password-input"></span></span>
                            </p>
                            <p class="mb-2">
                                <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="a728290975"><input type="hidden" name="_wp_http_referer" value="/my-account/">
                                <button type="submit" class="bg-[#446084] text-[#FFF] text-base uppercase px-5 h-10" name="register" value="Register">Register</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <div>
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>
    @if($registerForm)
        <form>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Name :</label>
                        <input type="text" wire:model="name" class="form-control">
                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Email :</label>
                        <input type="text" wire:model="email" class="form-control">
                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Password :</label>
                        <input type="password" wire:model="password" class="form-control">
                        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button class="btn text-white btn-success" wire:click.prevent="registerStore">Register</button>
                </div>
                <div class="col-md-12">
                    <a class="text-primary" wire:click.prevent="register"><strong>Login</strong></a>
                </div>
            </div>
        </form>
    @else
        <form>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Email :</label>
                        <input type="text" wire:model="email" class="form-control">
                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Password :</label>
                        <input type="password" wire:model="password" class="form-control">
                        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button class="btn text-white btn-success" wire:click.prevent="login">Login</button>
                </div>
                <div class="col-md-12">
                    Don't have account? <a class="btn btn-primary text-white" wire:click.prevent="register"><strong>Register Here</strong></a>
                </div>
            </div>
        </form>
    @endif
</div> -->