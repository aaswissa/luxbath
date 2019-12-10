<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\CmsController;

#Facebook
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');


#CMS
  Route::middleware(['cmsguard'])->group(function () {
    Route::prefix('cms')->group(function(){
        Route::get('dashboard', 'CmsController@dashboard');
        Route::get('orders', 'OrdersController@orders');
        Route::resource('menu', 'MenuController');
        Route::resource('content', 'ContentController');
        Route::resource('categories', 'CategoriesController');
        Route::resource('products', 'ProductsController');
          });
});

#Shop
Route::prefix('shop')->group(function(){
    Route::get('/', 'ShopController@categories');
    Route::get('ajax/add-to-cart', 'ShopController@ajaxAddToCart');
    Route::get('order-now', 'ShopController@orderNow');
    Route::get('cart', 'ShopController@cart');
    Route::get('clear-cart', 'ShopController@clearCart');
    Route::get('remove-item/{pid}', 'ShopController@removeItem');
    Route::get('update-cart/{op}/{pid}', 'ShopController@updateItem');
    Route::get('{curl}', 'ShopController@products');
    Route::get('{curl}/desc', 'ShopController@productsDesc');
    Route::get('{curl}/asc', 'ShopController@productsAsc');
    Route::get('{curl}/{purl}', 'ShopController@item');
});

#User
Route::prefix('user')->group(function(){
    Route::get('logout', 'UserController@logout');
    Route::get('signin', 'UserController@getSignin');
    Route::post('signin', 'UserController@postSignin');
    Route::get('signup', 'UserController@getSignup');
    Route::post('signup', 'UserController@postSignup');
});

#Pages
Route::get('{url}', 'PagesController@content');
Route::get('/', 'PagesController@home');

#Other Helpers should find other solution
Route::get('/', 'ShopController@catergoiresForHome');
// Route::get('/', 'ShopController@productsForHome'); Categoies couldn't run with this route
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
