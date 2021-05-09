<?php

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
Route::prefix('admin')
    ->namespace('Admin')
    //->middleware('auth')
    ->group(function () {
        
        Route::delete('products/{productId}/images/{imageId}','ProductController@deleteImage')->name('products.image.destroy');
        Route::resource('products','ProductController');
});


Route::get('/', 'SiteController@index')->name('site.index');
Route::match(['POST','GET'],'/products/search', 'SiteController@search')->name('site.search');
Route::get('/products/{code}', 'SiteController@show')->name('site.product');
Route::get('/contato', 'SiteController@contato')->name('site.contato');

/* Cart */
Route::get('/cartadd/{productCode}/{amount}', 'Cart@add')->name('cart.add');
Route::get('/cartaremove/{productCode}/{amount}', 'Cart@remove')->name('cart.remove');
Route::get('/cartdeleteitem/{productCode}', 'Cart@deleteItem')->name('cart.deleteitem');
Route::get('/cart', 'SiteController@cart')->name('site.cart');


