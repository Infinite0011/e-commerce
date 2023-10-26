<section>
    <div class="flex max-w-screen-2xl px-4 mx-auto sm:px-6 lg:px-8 pt-10">
        @livewire('components.dashboard-left-panel')
        <div class="p-4 flex-grow">
            <div class="pb-4">
                <table class="w-full divide-y divide-gray-200">
                    <thead class="bg-white">
                        <tr class="border-b">
                            <th class="px-4 py-3 text-sm font-medium text-left text-gray-700 whitespace-nowrap">
                                <span class="capitalize">
                                    Status
                                </span>
                            </th>
                            <th class="px-4 py-3 text-sm font-medium text-left text-gray-700 whitespace-nowrap">
                                <span class="capitalize">
                                    Reference
                                </span>
                            </th>
                            <th class="px-4 py-3 text-sm font-medium text-left text-gray-700 whitespace-nowrap">
                                <span class="capitalize">
                                    Currency
                                </span>
                            </th>
                            <th class="px-4 py-3 text-sm font-medium text-left text-gray-700 whitespace-nowrap">
                                <span class="capitalize">
                                    Total
                                </span>
                            </th>
                            <th class="px-4 py-3 text-sm font-medium text-left text-gray-700 whitespace-nowrap">
                                <span class="capitalize">
                                    Date
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
                        @foreach ($orders as $order)
                        <tr class="bg-white even:bg-gray-50" wire:key="table_row_78">
                            <td class="px-4 py-3 whitespace-nowrap text-xs sm:text-sm text-gray-700" sort="sort" wire:key="column_status_78">
                                <span class="inline-block px-2 py-1 text-xs text-white rounded" style="background: #6a67ce;">
                                    <span class="whitespace-nowrap">{{ $order->status }}</span>
                                </span>
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-xs sm:text-sm text-gray-700" sort="sort" wire:key="column_reference_78">
                                <div>
                                    <a href="#" class="text-sky-600 hover:underline">
                                        {{ $order->reference }}
                                    </a>
                                </div>
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-xs sm:text-sm text-gray-700" sort="sort" wire:key="column_phone_78">
                                <div>
                                {{ $order->currency_code }}
                                </div>
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-xs sm:text-sm text-gray-700" sort="sort" wire:key="column_total_78">
                                <div>
                                {{ $order->total->formatted() }}
                                </div>
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-xs sm:text-sm text-gray-700" sort="sort" wire:key="column_date_78">
                                <div>
                                {{ $order->placed_at }}
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $orders->links() }}
        </div>
    </div>
</section>