<section>
    <div class="flex max-w-screen-2xl px-4 mx-auto sm:px-6 lg:px-8 pt-10">
        @livewire('components.dashboard-left-panel')
        <div class="p-4 flex-grow">
            <div class="px-8 pt-8">
                <form>
                    <p class="mb-2">
                        <label class="mb-1.5 text-[#222] block text-sm font-bold" for="reg_username">Username&nbsp;<span class="required">*</span></label>
                        <input type="text" class="mb-4 px-3 bg-white border border-[#ddd] shadow-inner text-[#333] text-base h-10 max-w-full w-full align-middle focus:!shadow-[inset_0_2px_4px_0_rgb(0,0,0,0.05)]" wire:model="name" autocomplete="username" value="">
                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                    </p>
                    <p class="mb-2">
                        <label class="mb-1.5 text-[#222] block text-sm font-bold" for="reg_email">Email address&nbsp;<span class="required">*</span></label>
                        <input type="email" class="mb-4 px-3 bg-white border border-[#ddd] shadow-inner text-[#333] text-base h-10 max-w-full w-full align-middle focus:!shadow-[inset_0_2px_4px_0_rgb(0,0,0,0.05)]" wire:model="email" autocomplete="email" value="">
                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                    </p>
                    <!-- <p class="mb-2">
                        <label class="mb-1.5 text-[#222] block text-sm font-bold" for="reg_phone">Phone&nbsp;<span class="required">*</span></label>
                        <input type="text" class="mb-4 px-3 bg-white border border-[#ddd] shadow-inner text-[#333] text-base h-10 max-w-full w-full align-middle focus:!shadow-[inset_0_2px_4px_0_rgb(0,0,0,0.05)]" wire:model="phone">
                        @error('phone') <span class="text-danger error">{{ $message }}</span>@enderror
                    </p> -->
                    <p class="mb-2">
                        <label class="mb-1.5 text-[#222] block text-sm font-bold" for="reg_password">Password&nbsp;<span class="required">*</span></label>
                        <span class="password-input"><input type="password" class="mb-4 px-3 bg-white border border-[#ddd] shadow-inner text-[#333] text-base h-10 max-w-full w-full align-middle focus:!shadow-[inset_0_2px_4px_0_rgb(0,0,0,0.05)]" wire:model="password" autocomplete="new-password"><span class="show-password-input"></span></span>
                        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                    </p>
                    <p class="mb-2">
                        <button type="submit" class="bg-[#446084] text-[#FFF] text-base uppercase px-5 h-10" name="update" value="Update" wire:click.prevent="update">Update</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
@section('description', $meta_description)
