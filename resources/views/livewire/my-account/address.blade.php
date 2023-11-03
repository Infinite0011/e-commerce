<section>
    <div class="flex max-w-screen-2xl px-4 mx-auto sm:px-6 lg:px-8 pt-10">
        @livewire('components.dashboard-left-panel')
        <div class="pl-8 pr-4 flex-grow">
            <p class="mb-5 text-[#777]">
                The following addresses will be used on the checkout page by default.
            </p>
            <div class="flex">
                <div class="w-1/2">
                    <header>
                        <h3 class="font-bold text-xl text-[#555] mb-2.5">Billing address</h3>
                        <a class="text-[#334862]" href="{{ route('edit-address-form.view', ['type' => 'billing']) }}" class="edit">{{ $billing ? 'Edit' : 'Add'}}</a>
                    </header>
                    @if($billing)
                    <address class="mb-4 not-italic text-[#777]">
                        {{ $billing->first_name }} {{ $billing->last_name }}<br>
                        {{ $billing->company_name }}<br>company_name
                        {{ $billing->line_one }}<br>
                        {{ $billing->city }}, ND {{ $billing->postcode }}
                    </address>
                    @else
                    <address class="mb-4 not-italic text-[#777]">
                        You have not set up this type of address yet.
                    </address>
                    @endif
                </div>
                <div class="pl-8 w-1/2">
                    <header>
                        <h3 class="font-bold text-xl text-[#555] mb-2.5">Shipping address</h3>
                        <a class="text-[#334862]" href="{{ route('edit-address-form.view', ['type' => 'shipping']) }}" class="edit">{{ $shipping ? 'Edit' : 'Add'}}</a>
                    </header>
                    @if($shipping)
                    <address class="mb-4 not-italic text-[#777]">
                        {{ $shipping->first_name }} {{ $shipping->last_name }}<br>
                        {{ $shipping->company_name }}<br>company_name
                        {{ $shipping->line_one }}<br>
                        {{ $shipping->city }}, ND {{ $shipping->postcode }}
                    </address>
                    @else
                    <address class="mb-4 not-italic text-[#777]">
                        You have not set up this type of address yet.
                    </address>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@section('description', $meta_description)