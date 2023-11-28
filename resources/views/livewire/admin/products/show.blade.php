<div class="flex-col space-y-4">
  @livewire('components.admin.products.product-show', [
    'product' => $product->load([
      'variants.prices.currency',
      'variants.prices.priceable'
    ]),
  ])
</div>
