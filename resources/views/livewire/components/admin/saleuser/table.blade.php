<div>
    <div class="lt-overflow-hidden lt-border lt-border-gray-200 lt-rounded-lg">
        <div class="lt-w-full lt-divide-y lt-divide-gray-200">
            <div class="lt-p-4 lt-bg-gray-100">
                <div class="lt-flex lt-items-center lt-gap-2 sm:lt-gap-4">
                    <div class="lt-flex-1">
                        <div class="lt-relative">
                            <label for="Search" class="lt-absolute lt-inset-y-0 lt-left-0 lt-grid lt-w-10 lt-place-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lt-w-4 lt-h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                                </svg>
                                <span class="lt-sr-only">
                                    Search
                                </span>
                            </label>
                            <input type="text" id="Search" placeholder="Search" wire:model.debounce.500ms="query" class="lt-w-full lt-pl-10 lt-text-sm lt-text-gray-700 lt-border-gray-200 lt-rounded-md lt-form-input focus:lt-outline-none focus:lt-ring focus:lt-ring-sky-100 focus:lt-border-sky-300 lt-peer">
                        </div>
                    </div>
                </div>
            </div>
            <div class="lt-overflow-x-auto">
                <table class="lt-min-w-full lt-divide-y lt-divide-gray-200">
                    <thead class="lt-bg-white">
                        <tr>
                            <th class="lt-px-4 lt-py-3 lt-text-sm lt-font-medium lt-text-left lt-text-gray-700 lt-whitespace-nowrap">
                                <span class="lt-capitalize">
                                    Full Name
                                </span>
                            </th>
                            <th class="lt-px-4 lt-py-3 lt-text-sm lt-font-medium lt-text-left lt-text-gray-700 lt-whitespace-nowrap">
                                <span class="lt-capitalize">
                                    Business Email
                                </span>
                            </th>
                            <th class="lt-px-4 lt-py-3 lt-text-sm lt-font-medium lt-text-left lt-text-gray-700 lt-whitespace-nowrap">
                                <span class="lt-capitalize">
                                    Business Name
                                </span>
                            </th>
                            <th class="lt-px-4 lt-py-3 lt-text-sm lt-font-medium lt-text-left lt-text-gray-700 lt-whitespace-nowrap">
                                <span class="lt-capitalize">
                                    Business Phone
                                </span>
                            </th>
                            <th class="lt-px-4 lt-py-3 lt-text-sm lt-font-medium lt-text-left lt-text-gray-700 lt-whitespace-nowrap">
                                <span class="lt-capitalize">
                                    User Type
                                </span>
                            </th>
                            <th class="lt-px-4 lt-py-3 lt-text-sm lt-font-medium lt-text-left lt-text-gray-700 lt-whitespace-nowrap">
                                <span class="lt-capitalize">
                                    City
                                </span>
                            </th>
                            <th class="lt-px-4 lt-py-3 lt-text-sm lt-font-medium lt-text-left lt-text-gray-700 lt-whitespace-nowrap">
                                <span class="lt-capitalize">
                                    Action
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="lt-relative">
                        @foreach($sale_users as $sale_user)
                        <tr class="lt-bg-white even:lt-bg-gray-50">
                            <td class="lt-px-4 lt-py-3 lt-whitespace-nowrap lt-text-xs sm:lt-text-sm lt-text-gray-700" sort="sort">
                                <div>
                                    {{ $sale_user->name }}
                                </div>
                            </td>
                            <td class="lt-px-4 lt-py-3 lt-whitespace-nowrap lt-text-xs sm:lt-text-sm lt-text-gray-700" sort="sort">
                                <div>
                                    {{ $sale_user->email }}
                                </div>
                            </td>
                            <td class="lt-px-4 lt-py-3 lt-whitespace-nowrap lt-text-xs sm:lt-text-sm lt-text-gray-700" sort="sort" >
                                <div style="overflow: hidden; max-width: 300px; text-overflow: ellipsis;">
                                    {{ $sale_user->businessInformation?->name }}
                                </div>
                            </td>
                            <td class="lt-px-4 lt-py-3 lt-whitespace-nowrap lt-text-xs sm:lt-text-sm lt-text-gray-700" sort="sort">
                                <div>
                                    {{ $sale_user->businessInformation?->phone }}
                                </div>
                            </td>
                            <td class="lt-px-4 lt-py-3 lt-whitespace-nowrap lt-text-xs sm:lt-text-sm lt-text-gray-700" sort="sort">
                                <div>
                                    {{ $sale_user->is_sales_account ? 'Wholesale' : 'Referal' }}
                                </div>
                            </td>
                            <td class="lt-px-4 lt-py-3 lt-whitespace-nowrap lt-text-xs sm:lt-text-sm lt-text-gray-700" sort="sort">
                                <div>
                                    {{ $sale_user->businessInformation?->city }}
                                </div>
                            </td>
                            <td class="lt-px-4 lt-py-3 lt-whitespace-nowrap lt-text-xs sm:lt-text-sm lt-text-gray-700" sort="sort">
                                <div>
                                    @if ($sale_user->is_accepted)
                                    <x-hub::button theme="danger" wire:click.prevent="accept({{ $sale_user }})">
                                        Deny
                                    </x-hub::button>
                                    @else
                                    <x-hub::button wire:click.prevent="accept({{ $sale_user }})">
                                        Accept
                                    </x-hub::button>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>