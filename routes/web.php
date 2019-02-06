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



Route::get('/','FrontController@index')->name('home');
Route::get('/shirts','FrontController@shirts')->name('shirts') ;
Route::get('/tshirts','FrontController@tshirts')->name('tshirts') ;
Route::get('/punjabi','FrontController@punjabi')->name('punjabi') ;
Route::get('/sharee','FrontController@Sharee')->name('Sharee') ;
Route::get('/pall','FrontController@pall')->name('pall') ;
Route::get('/all','FrontController@all')->name('all') ;
Route::get('/pent','FrontController@Pent')->name('Pent') ;
Route::get('/other','FrontController@other')->name('other') ;

Route::get('/shirt/{product}','FrontController@shirt')->name('shirt') ;
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('/cart','CartController');
Route::get('/logout','Auth\LoginController@index');

Route::get('/cart/additem/{id}','CartController@addItem')->name('cart.additem');
Route::resource('address','AddressController');


Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function()
{
Route::get('/',function()
{
	return view('admin.index');
})->name('admin.index');
 Route::post('toggledeliver/{orderId}', 'OrderController@toggledeliver')->name('toggle.deliver');

Route::resource('product','ProductsController');
Route::resource('category','CategorysController');

 Route::get('orders/{type?}', 'OrderController@Orders');
});

Route::group(['middleware' => 'auth'], function () {
  Route::get('/shipping-info', 'CheckoutController@shipping')->name('checkout.shipping');
   // Route::resource('review','ProductReviewController');
});
//Route::get('/checkout', 'CheckoutController@step1')->name('checkout');

Route::get('payment','CheckoutController@payment')->name('checkout.payment');
Route::post('store-payment','CheckoutController@storePayment')->name('payment.store');


