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



Auth::routes([
  //'register' => false, // Registration Routes...
  'reset' => false, // Password Reset Routes...
  'verify' => false, // Email Verification Routes...
]);

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'FrontProductsController@index')->name('/');
Route::get('/hotdeals', 'FrontProductsController@hotdeals');
Route::get('/product/{id}/{slug}', 'FrontProductsController@single');

Route::get('/search/{words}', 'FrontProductsController@productsearch');

Route::get('/category/{name}/{id}', 'FrontProductsController@itemsbyctg');

## cart routes
Route::post('/cart/additem', 'AllOrdersController@additem');
Route::get('/cart', 'AllOrdersController@cart');
Route::post('/cart/update', 'AllOrdersController@cartupdate');
Route::post('/cart/remove', 'AllOrdersController@cartremove');

Route::post('/order/submit', 'AllOrdersController@ordersubmit');
Route::get('/order/confirm/{id}', 'AllOrdersController@orderconfirm')->name('confirm');

Route::get('/order/track/{order_no}', 'AllOrdersController@orderdetails');
Route::post('/order/track', 'AllOrdersController@ordertrack');

Route::get('/page/{slug}', 'FrontPagesController@index');
//Route::get('/send/mail', 'AllOrdersController@sendmail');

Route::get('/admin/login', 'AdminLoginController@adminlogin')->name('admin.login');

// admin Routes
Route::middleware(['auth', 'admin'])->group(function () {
  Route::get('/admin', 'BackHomeController@index')->name('admin');

  Route::get('/admin/categories', 'BackCategoriesController@index');
  Route::post('/admin/category/save', 'BackCategoriesController@store');
  Route::post('/admin/category/savesub', 'BackCategoriesController@addsub');

  Route::put('/admin/category/edit', 'BackCategoriesController@update');
  Route::put('/admin/category/editsub', 'BackCategoriesController@updatesub');

  Route::get('/admin/product/add', 'BackProductsController@create');
  Route::get('/admin/product/edit/{id}', 'BackProductsController@edit');
  Route::put('/admin/product/update/{id}', 'BackProductsController@update');
  Route::delete('/admin/product/delete/{id}', 'BackProductsController@destroy');
  Route::post('/admin/product/save', 'BackProductsController@store');
  Route::get('/admin/products', 'BackProductsController@index');

  Route::get('/admin/orders', 'BackOrdersController@index');
  Route::get('/admin/orders/pending', 'BackOrdersController@pendingorders');
  Route::get('/admin/orders/processing', 'BackOrdersController@processingorders');
  Route::get('/admin/orders/delivered', 'BackOrdersController@deliveredorders');
  Route::get('/admin/orders/canceled', 'BackOrdersController@canceledorders');
  Route::get('/admin/orders/{id}', 'BackOrdersController@show');
  Route::put('/admin/orders/accept/{id}', 'BackOrdersController@orderaccept');
  Route::put('/admin/orders/delivered/{id}', 'BackOrdersController@orderdelivered');
  Route::put('/admin/orders/canceled/{id}', 'BackOrdersController@ordercanceled');

  Route::get('/admin/sliders', 'BackSlidersController@index');
  Route::post('/admin/slider/save', 'BackSlidersController@store');
  Route::delete('/admin/slider/delete', 'BackSlidersController@destroy');

  Route::get('/admin/pages/{slug}', 'BackPagesController@edit');
  Route::put('/admin/pages/{id}', 'BackPagesController@update');

  Route::get('/admin/info/update', 'BackBasicsController@edit');
  Route::put('/admin/info/update', 'BackBasicsController@update');

  Route::get('/admin/delivery/update', 'BackBasicsController@delivery_edit');
  Route::put('/admin/delivery/update', 'BackBasicsController@delivery_update');

  Route::get('/admin/code/update', 'BackBasicsController@code_edit');
  Route::put('/admin/code/update', 'BackBasicsController@code_update');

  Route::get('/admin/changepass', 'BackChangePassController@index');
  Route::put('/admin/changepass', 'BackChangePassController@update');

  Route::get('/admin/mail/settings', 'BackBasicsController@mail_edit');
  Route::put('/admin/mail/update', 'BackBasicsController@mail_update');
});




// Route::get('password', function () {
//   return bcrypt('');
// });


Route::get('/cache-destroy', function() {
    $clear_cache = Artisan::call('cache:clear');
   
   return "All Ok!";
});
