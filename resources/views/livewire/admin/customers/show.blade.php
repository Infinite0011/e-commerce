<div class="flex-col space-y-4">
  @livewire('components.admin.customers.show', [
    'customer' => $customer->load([
      'users',
      'customerGroups',
    ]),
  ])
</div>
