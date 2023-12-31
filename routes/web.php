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
use App\Http\Livewire\Me\SubscriptionPage;
use App\Http\Livewire\Me\EditUserPage;
use App\Http\Livewire\Me\ReferalInformationPage;
use App\Http\Livewire\LoginRegisterPage;
use App\Http\Livewire\LoginPage;
use App\Http\Livewire\RegisterPage;
use App\Http\Livewire\ConfirmEmailPage;
use App\Http\Livewire\ResetPasswordPage;
use App\Http\Livewire\CheckEmailPage;
use App\Http\Livewire\NewPasswordPage;
use App\Http\Livewire\AdminBlogPage;
use App\Http\Livewire\Admin\BlogCategoryPage;
use App\Http\Livewire\Admin\BlogCategoryCreatePage;
use App\Http\Livewire\Admin\BlogCategoryEditPage;
use App\Http\Livewire\Admin\Blogs\Tags\IndexPage as BlogTagPage;
use App\Http\Livewire\Admin\Blogs\Tags\CreatePage as BlogTagCreatePage;
use App\Http\Livewire\Admin\Blogs\Tags\EditPage as BlogTagEditPage;
use App\Http\Livewire\AdminSaleUserPage;
use App\Http\Livewire\AdminCustomerShowPage;
use App\Http\Livewire\AdminPageInformationPage;
use App\Http\Livewire\AdminPageEditPage;
use App\Http\Livewire\AdminBlogCreatePage;
use App\Http\Livewire\AdminBlogEditPage;
use App\Http\Livewire\AdminProductCreate;
use App\Http\Livewire\AdminProductShow;
use App\Http\Livewire\AdminVariantShow;
use App\Http\Livewire\TwoFactorVerifyPage;
use App\Http\Livewire\Me\AddressPage;
use App\Http\Livewire\Me\EditAddressPage;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
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
Route::get('cart/{id}/invoice', [CartController::class, 'exportPDF'])->name('cart-invoice-download');

Route::get('about-us', AboutPage::class)->name('about.view');

Route::get('contact-us', ContactUsPage::class)->name('contact-us.view');

Route::get('wholesale-form', WholesaleFormPage::class)->name('wholesale-form.view');
Route::get('referal-form', ReferalFormPage::class)->name('referal-form.view');

Route::get('in-the-press', InThePressPage::class)->name('in-the-press.view');

Route::get('testimonial-new', TestimonialNewPage::class)->name('testimonial-new.view');

Route::get('blog', BlogPage::class)->name('blog.view');
Route::get('blog/{id}', BlogViewPage::class)->name('blog.detail');

Route::get('my-account', LoginRegisterPage::class)->name('login-register.view'); // remove

Route::get('login', LoginPage::class)->name('login.view');
Route::get('sign-up', RegisterPage::class)->name('register.view');
Route::get('confirm-email', ConfirmEmailPage::class)->name('confirm-email.view');
Route::get('reset-password', ResetPasswordPage::class)->name('reset-password.view');
Route::get('check-email', CheckEmailPage::class)->name('check-email.view');
Route::get('new-password/{token}', NewPasswordPage::class)->name('password.reset');

Route::middleware([Authenticate::class, 'can:catalogue:manage-products'])->group(function () {
    Route::get('/hub/blogs', AdminBlogPage::class)->name('hub.blogs.view');
    Route::get('/hub/blogs/create', AdminBlogCreatePage::class)->name('hub.blogs.create');
    Route::get('/hub/blogs/{id}', AdminBlogEditPage::class)->name('hub.blogs.edit');

    Route::get('/hub/saleusers', AdminSaleUserPage::class)->name('hub.saleusers.view');

    Route::get('/hub/pages', AdminPageInformationPage::class)->name('hub.pages.view');
    Route::get('/hub/pages/{id}', AdminPageEditPage::class)->name('hub.pages.edit');

    Route::get('/hub/categories', BlogCategoryPage::class)->name('hub.blog.categories.view');
    Route::get('/hub/categories/create', BlogCategoryCreatePage::class)->name('hub.blog.categories.create');
    Route::get('/hub/categories/{id}', BlogCategoryEditPage::class)->name('hub.blog.categories.edit');

    Route::get('/hub/tags', BlogTagPage::class)->name('hub.blog.tags.view');
    Route::get('/hub/tags/create', BlogTagCreatePage::class)->name('hub.blog.tags.create');
    Route::get('/hub/tags/{id}', BlogTagEditPage::class)->name('hub.blog.tags.edit');
});

Route::middleware([Authenticate::class, 'can:catalogue:manage-customers'])->group(function () {
    Route::get('/hub/customers/{customer}', AdminCustomerShowPage::class)->name('hub.customers.show');
});

Route::middleware([Authenticate::class, 'can:catalogue:manage-products'])->group(function () {
    Route::get('/hub/products/create', AdminProductCreate::class)->name('hub.products.create');
    Route::get('/hub/products/{product}', AdminProductShow::class)->name('hub.products.show');
    Route::get('/hub/products/{product}/variants/{variant}', AdminVariantShow::class)->name('hub.products.variants.show');
});

Route::middleware(['auth'])->group(function () {
    Route::get('my-account/orders', OrderPage::class)->name('my-orders.view');
    Route::get('my-account/subscriptions', SubscriptionPage::class)->name('my-subscriptions.view');
    Route::get('my-account/edit-profile', EditUserPage::class)->name('edit-profile.view');
    Route::get('my-account/edit-address', AddressPage::class)->name('edit-address.view');
    Route::get('my-account/edit-address/{type}', EditAddressPage::class)->name('edit-address-form.view');
    Route::get('my-account/referal-information', ReferalInformationPage::class)->name('referal-information.view');
});

// paypal-payment-start
Route::get('payment', 'PayPalController@payment')->name('payment');
Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
Route::get('payment/success', 'PayPalController@success')->name('payment.success');
// paypal-payment-end

Route::prefix('/verify')->group(function () {
    Route::get('/phone', TwoFactorVerifyPage::class)->name('verify.phone');
});

Route::get('logout', [AuthController::class, 'logout'])->name('logout');
