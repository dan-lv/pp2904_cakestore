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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getIndex'
]);

Route::get('/fetch_data', [
    'as' => 'pagination_newproduct',
    'uses' => 'PaginationController@fetch_data'
]);

Route::get('/fetch_data_sale_product', [
    'as' => 'pagination_saleproduct',
    'uses' => 'PaginationController@fetch_data_sale_product'
]);

Route::get('/count_cart', [
    'as' => 'count_cart',
    'uses' => 'AjaxCartController@countCart'
]);


Route::get('product-type/{type}',[
    'as' => 'producttype',
    'uses' => 'PageController@getProductType'
]);

Route::get('/product-detail/{id}',[
    'as' => 'productdetail',
    'uses' => 'PageController@getProductDetail'
]);

Route::get('/contact',[
    'as' => 'contact',
    'uses' => 'PageController@getContact'
]);

Route::resources([
    'user_feedbacks' => 'FeedbackController',
]);

Route::get('/about',[
    'as' => 'about',
    'uses' => 'PageController@getAbout'
]);

Route::group([
    'prefix' => 'manage',
    'namespace' => 'Admin',
    'middleware' => 'manager'
], function() {
    Route::get('/', 'AdminController@index')->name('admin');

    Route::resources([
        'products' => 'ProductController',
        'categories' => 'CategoryController',
        'orders' => 'OrderController',
        'users' => 'UserController',
        'admin_feedbacks' => 'FeedbackController'
    ]);

    Route::post('/usersearch', [
        'as' => 'usersearch',
        'uses' => 'UserController@getSearch'
    ]);

    Route::get('/order/getNewOrder', [
        'as' => 'getNewOrder',
        'uses' => 'OrderController@getNewOrder'
    ]);

    Route::get('/order/getDeliveringOrder', [
        'as' => 'getDeliveringOrder',
        'uses' => 'OrderController@getDeliveringOrder'
    ]);
});

Route::get('add-to-cart/{id}/{quantity?}', [
    'as' => 'themgiohang',
    'uses' => 'PageController@getAddtoCart'
]);

Route::post('add-to-cart/{id}', [
    'as' => 'themnhieusanpham',
    'uses' => 'PageController@getAddtoCart'
]);

Route::get('del-cart/{id}', [
    'as' => 'xoagiohang', 
    'uses' => 'PageController@getDelItemCart'
]);

Route::get('dat-hang', [
    'as' => 'dathang',
    'uses' => 'PageController@getCheckout'
]);

Route::post('dat-hang', [
    'as' => 'dathang',
    'uses' => 'PageController@postCheckout'
]);

Route::get('lich-su', [
    'as' => 'lichsu',
    'uses' => 'CheckoutHistoryController@getHistory'
]);

Route::get('bill-detail/{id_bill}', [
    'as' => 'billdetail',
    'uses' => 'PageController@getCheckoutDetail'
]);


Route::get('search', [
    'as' => 'search',
    'uses' => 'PageController@getSearch'
]);

Route::get('member',[
    'as' => 'member',
    'uses' => 'MemberController@index'
]);

Route::get('/wishlist', [
    'as' => 'wishlist',
    'uses' => 'WishListController@wishList'
]);

Route::get('/wishlist/add/{product_id}', [
    'as' => 'addwishlist',
    'uses' => 'WishListController@addProduct'
])->middleware('auth');

Route::get('/wishlist/delete/{product_id}', [
    'as' => 'deletewishlist',
    'uses' => 'WishListController@deleteProduct'
]);
