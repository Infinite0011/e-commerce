<section>
    <div class="flex max-w-screen-2xl px-4 mx-auto sm:px-6 lg:px-8 pt-10">
        @livewire('components.dashboard-left-panel')
        <div class="p-4 flex-grow">
            <div class="pb-4">
                @if ($subscriptions->count() > 0)
                <table class="w-full divide-y divide-gray-200">
                    <thead class="bg-white">
                        <tr class="border-b">
                            <th class="px-4 py-3 text-sm font-medium text-left text-gray-700 whitespace-nowrap">
                            </th>
                            <th class="px-4 py-3 text-sm font-medium text-left text-gray-700 whitespace-nowrap">
                                <span class="capitalize">
                                    name
                                </span>
                            </th>
                            <th class="px-4 py-3 text-sm font-medium text-left text-gray-700 whitespace-nowrap">
                                <span class="capitalize">
                                Total
                                </span>
                            </th>
                        </tr>
                        <tr x-show="selectedRows.length" style="display: none;">
                            <td colspan="50" class="p-0">
                                <div class="relative px-3 py-2 -my-px text-sm text-sky-700 border-sky-200 border-y bg-sky-50">
                                    Selected <span x-text="selectedRows.length">0</span> of 50
                                    results.
                                </div>
                            </td>
                        </tr>
                    </thead>
                    <tbody class="relative">
                        @foreach ($subscriptions as $subscription)
                        <tr class="bg-white even:bg-gray-50" wire:key="table_row_78">
                            <td class="px-4 py-3 whitespace-nowrap text-xs sm:text-sm text-gray-700" sort="sort" wire:key="column_status_78">
                                @if ($thumbnail = $subscription->product?->thumbnail)
                                    <x-hub::thumbnail :src="$thumbnail->getUrl('small')" />
                                @else
                                    <x-hub::icon ref="photograph"
                                                class="w-16 h-16 text-gray-300" />
                                @endif
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-xs sm:text-sm text-gray-700" sort="sort" wire:key="column_reference_78">
                                <div>
                                    <a href="#" class="text-sky-600 hover:underline">
                                        {{ $subscription->product->translateAttribute('name') }}
                                    </a>
                                </div>
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-xs sm:text-sm text-gray-700" sort="sort" wire:key="column_phone_78">
                                <div>
                                    {{ $subscription->orderLine->sub_total->formatted }}
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class="flex flex-col">
                    <span class="text-gray-500">
                        You have no active subscriptions.
                    </span>
                    <a href="{{ route('shop.view') }}" class="uppercase w-full py-5 border flex justify-center cursor-pointer hover:bg-gray-300 transition text-xs font-bold">Browse products</a>
                </div>
                @endif
            </div>
            {{ $subscriptions->links() }}
        </div>
    </div>
</section>
@section('description', $meta_description)
