<section>
    <div class="flex max-w-screen-2xl px-4 mx-auto sm:px-6 lg:px-8 pt-10">
        @livewire('components.dashboard-left-panel')
        <div class="pl-8 pr-4 flex-grow">
            <form wire:submit.prevent="saveAddress('{{ $type }}')"
                class="bg-white rounded-xl">
                <div class="flex items-center justify-between h-16 px-6 border-b border-gray-100">
                    <h3 class="text-lg font-medium">
                        {{ ucfirst($type) }} Details
                    </h3>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-6 gap-4">
                        <x-input.group class="col-span-3"
                                    label="First name"
                                    :errors="$errors->get($type . '.first_name')"
                                    required>
                            <x-input.text wire:model.defer="{{ $type }}.first_name"
                                        required />
                        </x-input.group>

                        <x-input.group class="col-span-3"
                                    label="Last name"
                                    :errors="$errors->get($type . '.last_name')"
                                    required>
                            <x-input.text wire:model.defer="{{ $type }}.last_name"
                                        required />
                        </x-input.group>

                        <x-input.group class="col-span-6"
                                    label="Company name"
                                    :errors="$errors->get($type . '.company_name')">
                            <x-input.text wire:model.defer="{{ $type }}.company_name" />
                        </x-input.group>

                        <x-input.group class="col-span-6 sm:col-span-3"
                                    label="Contact phone"
                                    :errors="$errors->get($type . '.contact_phone')">
                            <x-input.text wire:model.defer="{{ $type }}.contact_phone" />
                        </x-input.group>

                        <x-input.group class="col-span-6 sm:col-span-3"
                                    label="Contact email"
                                    :errors="$errors->get($type . '.contact_email')"
                                    required>
                            <x-input.text wire:model.defer="{{ $type }}.contact_email"
                                        type="email"
                                        required />
                        </x-input.group>

                        <div class="col-span-6">
                            <hr class="h-px my-4 bg-gray-100 border-none">
                        </div>

                        <x-input.group class="col-span-3 sm:col-span-2"
                                    label="Address line 1"
                                    :errors="$errors->get($type . '.line_one')"
                                    required>
                            <x-input.text wire:model.defer="{{ $type }}.line_one"
                                        required />
                        </x-input.group>

                        <x-input.group class="col-span-3 sm:col-span-2"
                                    label="Address line 2"
                                    :errors="$errors->get($type . '.line_two')">
                            <x-input.text wire:model.defer="{{ $type }}.line_two" />
                        </x-input.group>

                        <x-input.group class="col-span-3 sm:col-span-2"
                                    label="Address line 3"
                                    :errors="$errors->get($type . '.line_three')">
                            <x-input.text wire:model.defer="{{ $type }}.line_three" />
                        </x-input.group>

                        <x-input.group class="col-span-3 sm:col-span-2"
                                    label="City"
                                    :errors="$errors->get($type . '.city')"
                                    required>
                            <x-input.text wire:model.defer="{{ $type }}.city"
                                        required />
                        </x-input.group>

                        <x-input.group class="col-span-3 sm:col-span-2"
                                    label="State / Province"
                                    :errors="$errors->get($type . '.state')">
                            <x-input.text wire:model.defer="{{ $type }}.state" />
                        </x-input.group>

                        <x-input.group class="col-span-3 sm:col-span-2"
                                    label="Postcode"
                                    :errors="$errors->get($type . '.postcode')"
                                    required>
                            <x-input.text wire:model.defer="{{ $type }}.postcode"
                                        required />
                        </x-input.group>

                        <x-input.group class="col-span-6"
                                    label="Country"
                                    required>
                            <select class="w-full p-3 border border-gray-200 rounded-lg sm:text-sm"
                                    wire:model.defer="{{ $type }}.country_id">
                                <option value>Select a country</option>
                                @foreach ($this->countries as $country)
                                    <option value="{{ $country->id }}"
                                            wire:key="country_{{ $country->id }}">
                                        {{ $country->native }}
                                    </option>
                                @endforeach
                            </select>
                        </x-input.group>
                    </div>
                    <div class="mt-6 text-right">
                        <button class="px-5 py-3 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-500"
                                type="submit"
                                wire:key="submit_btn"
                                wire:loading.attr="disabled"
                                wire:target="saveAddress">
                            <span wire:loading.remove
                                wire:target="saveAddress">
                                Save Address
                            </span>
                            <span wire:loading
                                wire:target="saveAddress">
                                <span class="inline-flex items-center">
                                    Saving
                                    <x-icon.loading />
                                </span>
                            </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@section('description', $meta_description)
