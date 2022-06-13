<?php

use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

// Page principale + contact
Route::get('/', 'HomeController@home')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');

//Page histoire
Route::get('/histoire', 'HistoireController@index')->name('histoire');

// Pages produits
Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

// Panier
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::get('/cart/reset', 'CartController@reset')->name('cart.reset');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');

// Paiement
Route::get('/checkout', 'CheckoutController@checkout')->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
Route::get('/checkout/success', 'CheckoutController@success')->name('checkout.success');

// Commandes
Route::get('/orders', 'HomeController@orders')->name('orders');

//Maintenance
Route::get('/gazette', 'GazetteController@index')->name('gazette');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


//Authentification
Auth::routes();

Route::get('/logout', function () {
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');
