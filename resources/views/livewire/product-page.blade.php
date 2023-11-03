<section>
    <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
        <div class="grid items-start grid-cols-1 gap-8 md:grid-cols-2">
            <div class="grid grid-cols-2 gap-4 md:grid-cols-1">
                @if ($this->image)
                    <div class="aspect-w-1 aspect-h-1">
                        <img class="object-cover rounded-xl"
                             src="{{ $this->image->getUrl('large') }}"
                             alt="{{ $this->product->translateAttribute('name') }}" />
                    </div>
                @endif

                <div class="grid grid-cols-2 gap-4 sm:grid-cols-4">
                    @foreach ($this->images as $image)
                        <div class="aspect-w-1 aspect-h-1"
                             wire:key="image_{{ $image->id }}">
                            <img loading="lazy"
                                 class="object-cover rounded-xl"
                                 src="{{ $image->getUrl('small') }}"
                                 alt="{{ $this->product->translateAttribute('name') }}" />
                        </div>
                    @endforeach
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <h1 class="text-xl font-bold">
                        {{ $this->product->translateAttribute('name') }}
                    </h1>
                </div>

                <p class="mt-1 text-sm text-gray-500">
                    {{ $this->variant->sku }}
                </p>

                <article class="mt-4 text-gray-700">
                    {!! $this->product->translateAttribute('description') !!}
                </article>

                <div class="w-full inline-flex rounded-md shadow-sm" role="group">
                    <button type="button" data-id="1" class="{{ $this->orderType == '1' ? 'bg-gray-300' : 'bg-white' }} order-type w-1/2 px-4 py-2 text-sm font-medium text-gray-900 border border-gray-200 rounded-l-lg hover:bg-gray-300 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Subscribe & Save up to 20%{{$this->orderType}}
                    </button>
                    <button type="button" data-id="2" class="{{ $this->orderType == '2' ? 'bg-gray-300' : 'bg-white' }} order-type w-1/2 px-4 py-2 text-sm font-medium text-gray-900 border-t border-b rounded-r-md border-r border-gray-200 hover:bg-gray-300 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        One Time Purchase
                    </button>
                </div>

                <div class="{{ $this->orderType == '1' ? '' : 'hidden' }} subscription-body w-full pt-5 inline-flex rounded-md shadow-sm" role="group">
                    <button type="button" data-id="1" class="{{ $this->subscription == '1' ? 'bg-gray-300' : 'bg-white' }} subscription w-1/3 px-4 py-2 text-sm font-medium text-gray-900 border border-gray-200 rounded-l-lg hover:bg-gray-300 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        6 Bottles - 20% off<br>Every 6 months
                    </button>
                    <button type="button" data-id="2" class="{{ $this->subscription == '2' ? 'bg-gray-300' : 'bg-white' }} subscription w-1/3 px-4 py-2 text-sm font-medium text-gray-900 border-t border-b border-gray-200 hover:bg-gray-300 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        3 Bottles - 15% off<br>Every 3 months
                    </button>
                    <button type="button" data-id="3" class="{{ $this->subscription == '3' ? 'bg-gray-300' : 'bg-white' }} subscription w-1/3 px-4 py-2 text-sm font-medium text-gray-900 border border-gray-200 rounded-r-md hover:bg-gray-300 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        1 Bottle - 10% off<br>Every month
                    </button>
                </div>

                <div class="{{ $this->orderType == '2' ? '' : 'hidden' }} one-time-purchase-body w-full pt-5 inline-flex rounded-md shadow-sm" role="group">
                    <button type="button" data-id="1" class="{{ $this->subscription == '1' ? 'bg-gray-300' : 'bg-white' }} subscription w-1/3 px-4 py-2 text-sm font-medium text-gray-900 border border-gray-200 rounded-l-lg hover:bg-gray-300 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        6 Bottles - 15% off
                    </button>
                    <button type="button" data-id="2" class="{{ $this->subscription == '2' ? 'bg-gray-300' : 'bg-white' }} subscription w-1/3 px-4 py-2 text-sm font-medium text-gray-900 border-t border-b border-gray-200 hover:bg-gray-300 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        3 Bottles - 10% off
                    </button>
                    <button type="button" data-id="3" class="{{ $this->subscription == '3' ? 'bg-gray-300' : 'bg-white' }} subscription w-1/3 px-4 py-2 text-sm font-medium text-gray-900 border border-gray-200 rounded-r-md hover:bg-gray-300 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        1 Bottle
                    </button>
                </div>

                <form class="mt-4">
                    <div>
                        <x-product-price class="ml-4 font-medium" :variant="$this->variant" :product="$this->product" :subscription="$this->subscription" :orderType="$this->orderType" />
                    </div>

                    <div class="max-w-xs mt-8">
                        <livewire:components.add-to-cart :purchasable="$this->variant" :orderType="$this->orderType" :subscription="$this->subscription"
                                                         :wire:key="$this->variant->id">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('livewire:load', function () {

            let orderType = @this.orderType;
            let subscription = @this.subscription;

            $(document).on('click', '.subscription', function (e) {
                e.preventDefault();
                subscription = $(this).data('id');
                Livewire.emit('setSubscription', subscription);
            })

            $(document).on('click', '.order-type', function (e) {
                e.preventDefault();

                orderType = $(this).data('id');
                Livewire.emit('setOrderType', orderType);
            })
        })
    </script>
</section>
@section('description', $meta_description)
