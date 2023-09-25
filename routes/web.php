<?php

use App\Http\Livewire\CheckoutPage;
use App\Http\Livewire\CheckoutSuccessPage;
use App\Http\Livewire\CollectionPage;
use App\Http\Livewire\Home;
use App\Http\Livewire\ProductPage;
use App\Http\Livewire\SearchPage;
use App\Http\Livewire\AboutPage;
use App\Http\Livewire\Me\OrderPage;
use App\Http\Livewire\Me\EditUserPage;
use App\Http\Livewire\LoginRegisterPage;
use App\Http\Livewire\Me\AddressPage;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PayPalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Home::class);

Route::get('/collections/{slug}', CollectionPage::class)->name('collection.view');

Route::get('/products/{slug}', ProductPage::class)->name('product.view');

Route::get('search', SearchPage::class)->name('search.view');

Route::get('checkout', CheckoutPage::class)->name('checkout.view');

Route::get('checkout/success', CheckoutSuccessPage::class)->name('checkout-success.view');

Route::get('about-us', AboutPage::class)->name('about.view');

Route::get('my-account', LoginRegisterPage::class)->name('login-register.view');

Route::middleware(['auth'])->group(function () {
    Route::get('my-account/orders', OrderPage::class)->name('my-orders.view');
    Route::get('my-account/edit-profile', EditUserPage::class)->name('edit-profile.view');
    Route::get('my-account/edit-address', AddressPage::class)->name('edit-address.view');
});

// paypal-payment-start
Route::get('payment', 'PayPalController@payment')->name('payment');
Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
Route::get('payment/success', 'PayPalController@success')->name('payment.success');
// paypal-payment-end

Route::get('logout', [AuthController::class, 'logout'])->name('logout');
