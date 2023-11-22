<section>
    <div class="relative bg-[#f7f7f7] border-b border-t border-[#ececec]">
        <div class="py-4 min-h-[60px] relative flex flex-row text-left">
            <div class="flex-1 flex justify-center">
                <h1 class="uppercase mb-0 font-bold text-2xl text-[#555]">Phone Verification</h1>
            </div>
        </div>
    </div>

    <div class="py-8 mb-8">
        <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8" role="main">
            <div class="-mx-8 mb-0 w-full flex">
                <div class="w-full px-8">
                    <div>
                        <form>
                            <p class="mb-2">
                                <label class="mb-1.5 text-[#222] block text-sm font-bold" for="verify_code">Verify Code&nbsp;<span class="required">*</span></label>
                                <input type="text" class="mb-4 px-3 bg-white border border-[#ddd] shadow-inner text-[#333] text-base h-10 max-w-full w-full align-middle focus:!shadow-[inset_0_2px_4px_0_rgb(0,0,0,0.05)]" wire:model="code">
                                @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                            </p>
                            <p class="mb-2">
                                <button type="submit" class="bg-[#446084] text-[#FFF] text-base uppercase px-5 h-10" name="send" value="Send Code" wire:click.prevent="verifyCode">Send Code</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
