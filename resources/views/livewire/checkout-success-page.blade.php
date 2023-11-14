<section class="bg-white">
    <div class="max-w-screen-xl px-4 py-32 mx-auto sm:px-6 lg:px-8 lg:py-48">
        <div class="max-w-xl mx-auto text-center">
            <span class="text-xs font-medium text-center bg-orange-100 text-orange-700 px-3 py-1.5 rounded-lg">
                This was a test order
            </span>

            <div class="my-5 px-6 py-8 space-y-4 bg-white border border-gray-100 lg:relative lg:top-8 rounded-xl lg:order-last">
                <h3 class="font-medium">
                    Order Summary
                </h3>

                <div class="flow-root">
                    <div class="-my-4 divide-y divide-gray-100">
                        @foreach ($cart->lines as $line)
                            <div class="flex items-center py-4"
                                 wire:key="cart_line_{{ $line->id }}">
                                <img class="object-cover w-16 h-16 rounded"
                                     src="{{ $line->purchasable->getThumbnail()->getUrl() }}" />

                                <div class="flex-1 ml-4">
                                    <p class="text-sm font-medium">
                                        {{ $line->purchasable->getDescription() }}
                                    </p>

                                    <span class="block mt-1 text-xs text-gray-500">
                                        {{ $line->quantity }} @ {{ $line->subTotal->formatted() }}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="flow-root">
                    <dl class="-my-4 text-sm divide-y divide-gray-100">
                        <div class="flex flex-wrap py-4">
                            <dt class="w-1/2 font-medium">
                                Sub Total
                            </dt>

                            <dd class="w-1/2 text-right">
                                {{ $cart->subTotal->formatted() }}
                            </dd>
                        </div>

                        @if ($this->shippingOption)
                            <div class="flex flex-wrap py-4">
                                <dt class="w-1/2 font-medium">
                                    {{ $this->shippingOption->getDescription() }}
                                </dt>

                                <dd class="w-1/2 text-right">
                                    {{ $this->shippingOption->getPrice()->formatted() }}
                                </dd>
                            </div>
                        @endif

                        @foreach ($cart->taxBreakdown as $tax)
                            <div class="flex flex-wrap py-4">
                                <dt class="w-1/2 font-medium">
                                    {{ $tax['description'] }}
                                </dt>

                                <dd class="w-1/2 text-right">
                                    {{ $tax['total']->formatted() }}
                                </dd>
                            </div>
                        @endforeach

                        <div class="flex flex-wrap py-4">
                            <dt class="w-1/2 font-medium">
                                Total
                            </dt>

                            <dd class="w-1/2 text-right">
                                {{ $cart->total->formatted() }}
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>

            <h1 class="mt-8 text-3xl font-extrabold sm:text-5xl">
                <span class="block"
                      role="img">
                    🥳
                </span>

                <span class="block mt-1 text-blue-500">
                    Order Successful!
                </span>
            </h1>

            <p class="mt-4 font-medium sm:text-lg">
                Your order reference number is

                <strong>
                    {{ $order->reference }}
                </strong>
            </p>

            <a class="inline-block px-8 py-3 mt-8 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:ring-1 hover:ring-blue-600"
               href="{{ route('cart-invoice-download', ['id' => $cart->id]) }}">
                Download Invoice
            </a>

            <a class="inline-block px-8 py-3 mt-8 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:ring-1 hover:ring-blue-600"
               href="{{ url('/') }}">
                Back Home
            </a>
        </div>
    </div>
</section>
@section('description', $meta_description)
