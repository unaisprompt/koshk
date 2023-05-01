<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ApiUserController;
use App\Http\Controllers\ApiProductController;
use App\Http\Controllers\ApiCartController;
use App\Http\Controllers\ApiOrderController;
use App\Http\Controllers\ApiReturnController;
use App\Http\Controllers\ApiWishlistController;
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

Route::get('view-products', function () {
    return view('pages.products');
});

Route::get('view-productdetail', function () {
    return view('pages.productdetail');
});
Route::get('view-checkout', function () {
    return view('pages.checkout');
});
Route::get('view-cart', function () {
    return view('pages.cart');
});
Route::get('terms_and_condition', function () {
    return view('pages.terms_and_condition');
});
Route::get('blog', function () {
    return view('pages.blog');
});
Route::get('faq', function () {
    return view('pages.faq');
});
Route::get('blog-detail', function () {
    return view('pages.blog-detail');
});
Route::get('/',[ApiController::class, 'home']);

############# User ############################

Route::get('login',[ApiUserController::class, 'login']);
Route::post('login-post',[ApiUserController::class,'loginPost'])->name('login-post');
Route::post('loginPop',[ApiUserController::class,'loginPop']);
Route::get('logout',[ApiUserController::class, 'logout']);
Route::get('register',[ApiUserController::class, 'register']);
Route::post('register-post',[ApiUserController::class,'registerPost'])->name('register-post');
Route::post('email-verify',[ApiUserController::class,'emailVerify'])->name('email-verify');;
Route::get('my-account',[ApiUserController::class,'myaccount']);
Route::get('user-forget',[ApiUserController::class,'forgetPassword']);
Route::post('forget-post',[ApiUserController::class,'forgetPasswordPost'])->name('forget-post');
Route::post('verify-otp',[ApiUserController::class,'otpVerify']);
Route::post('password-reset',[ApiUserController::class,'passwordReset']);
Route::post('already-user-pass',[ApiUserController::class,'alreadyUserPassReset'])->name('already-user-pass');
Route::get('user-password-change',[ApiUserController::class,'passwordChangeUser']);
Route::get('user-password-new',[ApiUserController::class,'getalreadyUserPassReset']);
Route::post('change-password',[ApiUserController::class,'passwordChange']);
Route::get('address-list',[ApiUserController::class,'addressList']);
Route::get('address',[ApiUserController::class,'getAddress']);
Route::post('edit-address',[ApiUserController::class,'getAddressEdit'])->name('edit-address');
Route::post('address-post',[ApiUserController::class,'addAddress']);
Route::post('address-update',[ApiUserController::class,'updateAddress']);
Route::post('address-primary',[ApiUserController::class,'setAsPrimaryAddress']);
Route::post('address-delete',[ApiUserController::class,'deleteAddress']);
Route::get('edit-profile',[ApiUserController::class,'editProfile']);
Route::post('update-profile',[ApiUserController::class,'updateProfile']);
Route::get('order-history',[ApiUserController::class,'getOrderHistory']);
Route::get('order-detail/{id}',[ApiUserController::class,'getOrderDetails']);
Route::post('resent-forget-otp',[ApiUserController::class,'resentOtp']);
Route::post('resent-email-otp',[ApiUserController::class,'emailOtpVerify']);
############# Product ############################

Route::get('products',[ApiProductController::class,'productList']);
Route::get('products-grid',[ApiProductController::class,'productGrid']);
Route::get('product-detail',[ApiProductController::class,'productDetail']);
Route::get('search',[ApiProductController::class,'searchProduct']);
Route::get('brand/products',[ApiProductController::class,'BrandProduct']);
Route::post('product/review/add',[ApiProductController::class,'reviewAdd']);
Route::post('product/variation-price-change',[ApiProductController::class,'variation_price']);
Route::post('filter',[ApiProductController::class,'filter']);

############# Cart ############################

Route::get('cart',[ApiCartController::class,'cart']);
Route::post('add-to-cart',[ApiCartController::class,'addToCart']);
Route::post('update-cart',[ApiCartController::class,'cartUpdate']);
Route::get('delete-cart/{id}',[ApiCartController::class,'deleteCart']);


############# Order ############################
Route::get('checkout',[ApiOrderController::class,'checkout']);
Route::get('address-data',[ApiOrderController::class,'addressData']);
Route::post('address-data-get',[ApiOrderController::class,'getAddressEditByOrder']);
Route::post('order',[ApiOrderController::class,'order'])->name('order');
Route::post('order-cancel',[ApiOrderController::class,'orderCancel']);
Route::get('order-tracking/{id}',[ApiOrderController::class,'OrderTracking']);
Route::get('thankYou',[ApiOrderController::class,'thankYou']);
Route::post('coupon-add',[ApiOrderController::class,'couponAdd']);
Route::get('coupon-remove',[ApiOrderController::class,'couponRemove']);

############# Return ############################
Route::get('return/{id}/{pid}',[ApiReturnController::class,'purchaseReturn']);
Route::post('return-post/',[ApiReturnController::class,'returnPost']);

############ WishList ############################
Route::get('wishlist/',[ApiWishlistController::class,'whishlist']);
Route::post('removefromwishlist/',[ApiWishlistController::class,'whishlistRemove']);
Route::post('wishlist-add/',[ApiWishlistController::class,'whishlistAdd']);

########### News Letter ############################
Route::post('addNewsLetter/',[ApiUserController::class,'addNewsLetter']);  


################## footer linl ######################333333333

Route::get('about',[ApiController::class,'about']);
Route::get('privacy-policy',[ApiController::class,'privacy']);
Route::get('terms&conditions',[ApiController::class,'terms']);
Route::get('return-policy',[ApiController::class,'returnPolicy']);
Route::get('cart_ajax',[ApiCartController::class,'cart_ajax']);
