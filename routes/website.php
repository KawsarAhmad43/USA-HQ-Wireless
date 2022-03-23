<?php
use Illuminate\Support\Facades\Auth;
use App\User;


use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;

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



// Route::group([
//     'namespace' => 'Admin',
//     'prefix' => 'admin',
//     'middleware' => 'auth','admin',

// ],function () {
Route::group(['prefix'=>'admin','namespace' => 'Admin','middleware'=>['auth','admin']], function (){
    //sellerRoutes
    Route::get('/seller/edit/{id}','SellerController@edit')->name('seller.edit');
    Route::put('/seller/update/{id}','SellerController@update')->name('seller.update');
    Route::get('/seller/delete/{id}','SellerController@destroy')->name('seller.destroy');
    Route::post('/seller/store','SellerController@store')->name('seller.store');
    Route::get('/seller/add','SellerController@create')->name('seller.add');
    Route::get('/sellers','SellerController@index')->name('seller.view');


    //vendorRoutes
    Route::put('/vendor/update/{id}','VendorController@update')->name('vendor.update.admin');
    Route::get('/vendor/delete/{id}','VendorController@destroy')->name('vendor.delete');
    Route::get('/vendor/edit/{id}','VendorController@edit')->name('vendor.edit');
    Route::post('/vendor/store','VendorController@store')->name('vendor.store');
    Route::get('/vendor/add','VendorController@create')->name('vendor.add');
    Route::get('/vendors','VendorController@index')->name('vendor.view');

    // category
    Route::get('/vendor/category/add','VendorController@categoryCreate')->name('category.add');
    
    


});

//Category

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {

    //Sub Category destroy
    Route::get('sub/category/destroy/{id}', 'BackCategoriesController@destroySub')->name('categories.destroy');

    //Main Category destroy
    Route::get('main/category/destroy/{id}', 'BackCategoriesController@destroyMain')->name('categories.destroy');
});



Route::group([
    'namespace' => 'Vendor',
    'prefix' => 'vendor',
    'middleware' => 'vendor','auth',
],function () {
    
    //Seller
    Route::get('dashboard','VendorController@index')->name('vendor.dashboard');
    Route::get('/seller/add','VendorController@addSeller')->name('vendor.seller.add');
    Route::get('/seller/view','VendorController@viewSeller')->name('vendor.seller.view');
    Route::post('/seller/store','VendorController@storeSeller')->name('vendor.seller.store');

    //Products
    Route::get('/product/add','VendorController@addProduct')->name('vendor.products.add');
    Route::get('/products/view','VendorController@viewProduct')->name('vendor.products.view');
    Route::post('/product/store','VendorController@storeProduct')->name('vendor.products.store');
    
    

});



//Search
Route::post('/search','Frontend\SearchController@index');


//secure the redirect
Route::get('/verify/user/dashboard','Admin\RoleController@index');

Route::get('/demoInfo','Admin\RoleController@create');








