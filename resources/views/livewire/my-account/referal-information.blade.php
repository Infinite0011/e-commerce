<section>
    <div class="flex max-w-screen-2xl px-4 mx-auto sm:px-6 lg:px-8 pt-10">
        @livewire('components.dashboard-left-panel')
        <div class="pl-8 pr-4 flex-grow">
            <p class="mb-5 text-[#777] uppercase">
                Ways to share
            </p>
            <div class="flex gap-5 flex-row">
                <div class="flex flex-col gap-5 border items-center p-8 w-1/3">
                    <p class="mb-5 text-[#777]">
                        Your personal referal code
                    </p>
                    <h2>{{ $referalInformation->code }}</h2>
                    <a class="mr-2.5 border rounded-md block py-3 px-8 text-center transition text-[#334862]" href="{{ route('my-orders.view') }}">Copy code</a>
                </div>
                <div class="flex flex-col gap-5 border items-center p-8 w-1/3">
                    <p class="mb-5 text-[#777]">
                        Your personal referal code
                    </p>
                    <h2 class="px-5 overflow-hidden whitespace-nowrap">https://sugarmds.com/?referal={{ $referalInformation->code }}</h2>
                    <a class="mr-2.5 border rounded-md block py-3 px-8 text-center transition text-[#334862]" href="{{ route('my-orders.view') }}">Copy link</a>
                </div>
                <div class="flex flex-col gap-5 border items-center p-8 w-1/3">
                    <p class="mb-5 text-[#777]">
                        Your personal referal code
                    </p>
                    <h2></h2>
                    <a class="mr-2.5 border rounded-md block py-3 px-8 text-center transition text-[#334862]" href="{{ route('my-orders.view') }}">Download</a>
                </div>
            </div>
        </div>
    </div>
</section>