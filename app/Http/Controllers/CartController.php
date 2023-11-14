<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lunar\Models\Cart;
use Lunar\Facades\ShippingManifest;
use PDF;

class CartController extends Controller
{
    public function exportPDF($id) {
        $cart = Cart::with('lines')->findOrFail($id);
        $cart->calculate();
        $shippingOption = null;
        $shippingAddress = $cart->shippingAddress;

        if ($shippingAddress) {
            if ($option = $shippingAddress->shipping_option) {
                $shippingOption = ShippingManifest::getOptions($cart)->first(function ($opt) use ($option) {
                    return $opt->getIdentifier() == $option;
                });
            }
        }

        // return view('pdf_templates/invoice', ['cart' => $cart, 'shippingOption' => $shippingOption]);
        // view()->share('invoice', ['cart' => $cart, 'shippingOption' => $shippingOption]);
        $pdf = PDF::loadView('pdf_templates/invoice', ['cart' => $cart, 'shippingOption' => $shippingOption]);
        return $pdf->download('invoice.pdf');
    }
}
