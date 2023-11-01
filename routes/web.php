<?php

use App\Http\Livewire\CheckoutPage;
use App\Http\Livewire\CheckoutSuccessPage;
use App\Http\Livewire\CollectionPage;
use App\Http\Livewire\ShopPage;
use App\Http\Livewire\Home;
use App\Http\Livewire\ProductPage;
use App\Http\Livewire\SearchPage;
use App\Http\Livewire\AboutPage;
use App\Http\Livewire\ContactUsPage;
use App\Http\Livewire\WholesaleFormPage;
use App\Http\Livewire\ReferalFormPage;
use App\Http\Livewire\InThePressPage;
use App\Http\Livewire\TestimonialNewPage;
use App\Http\Livewire\BlogPage;
use App\Http\Livewire\BlogViewPage;
use App\Http\Livewire\Me\OrderPage;
use App\Http\Livewire\Me\EditUserPage;
use App\Http\Livewire\LoginRegisterPage;
use App\Http\Livewire\AdminBlogPage;
use App\Http\Livewire\AdminSaleUserPage;
use App\Http\Livewire\AdminCustomerShowPage;
use App\Http\Livewire\AdminBlogCreatePage;
use App\Http\Livewire\AdminBlogEditPage;
use App\Http\Livewire\Me\AddressPage;
use App\Http\Livewire\Me\EditAddressPage;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PayPalController;
use Illuminate\Support\Facades\Route;
use Lunar\Hub\Http\Middleware\Authenticate;

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

Route::get('/', Home::class)->name('home');

Route::get('/collections/{slug}', CollectionPage::class)->name('collection.view');

Route::get('/shop', ShopPage::class)->name('shop.view');

Route::get('/products/{slug}', ProductPage::class)->name('product.view');

Route::get('search', SearchPage::class)->name('search.view');

Route::get('checkout', CheckoutPage::class)->name('checkout.view');

Route::get('checkout/success', CheckoutSuccessPage::class)->name('checkout-success.view');

Route::get('about-us', AboutPage::class)->name('about.view');

Route::get('contact-us', ContactUsPage::class)->name('contact-us.view');

Route::get('wholesale-form', WholesaleFormPage::class)->name('wholesale-form.view');

Route::get('referal-form', ReferalFormPage::class)->name('referal-form.view');

Route::get('in-the-press', InThePressPage::class)->name('in-the-press.view');

Route::get('testimonial-new', TestimonialNewPage::class)->name('testimonial-new.view');

Route::get('blog', BlogPage::class)->name('blog.view');

Route::get('blog/{id}', BlogViewPage::class)->name('blog.detail');

Route::get('my-account', LoginRegisterPage::class)->name('login-register.view');

Route::middleware([Authenticate::class, 'can:catalogue:manage-products'])->group(function () {
    Route::get('/hub/blogs', AdminBlogPage::class)->name('hub.blogs.view');
    Route::get('/hub/blogs/create', AdminBlogCreatePage::class)->name('hub.blogs.create');
    Route::get('/hub/blogs/{id}', AdminBlogEditPage::class)->name('hub.blogs.edit');

    Route::get('/hub/saleusers', AdminSaleUserPage::class)->name('hub.saleusers.view');
});

Route::middleware([Authenticate::class, 'can:catalogue:manage-customers'])->group(function () {
    Route::get('/hub/customers/{customer}', AdminCustomerShowPage::class)->name('hub.customers.show');
});

Route::middleware(['auth'])->group(function () {
    Route::get('my-account/orders', OrderPage::class)->name('my-orders.view');
    Route::get('my-account/edit-profile', EditUserPage::class)->name('edit-profile.view');
    Route::get('my-account/edit-address', AddressPage::class)->name('edit-address.view');
    Route::get('my-account/edit-address/{type}', EditAddressPage::class)->name('edit-address-form.view');
});

// paypal-payment-start
Route::get('payment', 'PayPalController@payment')->name('payment');
Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
Route::get('payment/success', 'PayPalController@success')->name('payment.success');
// paypal-payment-end

Route::get('logout', [AuthController::class, 'logout'])->name('logout');
