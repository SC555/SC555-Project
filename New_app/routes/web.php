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
/* FrontEnd routin */
Route::get('/','IndexController@index');
Route::get('/list-products','IndexController@shop');
Route::get('/cat/{id}','IndexController@listByCat')->name('cats');
Route::get('/product-detail/{id}','IndexController@detialpro');
Route::get('/about','AboutController@about');
Route::get('/contact','ContactController@contact');
Route::get('/search','ProductsController@search');


////// get Attribute ////////////
Route::get('/get-product-attr','IndexController@getAttrs');
///// Cart Area /////////
Route::post('/addToCart','CartController@addToCart')->name('addToCart');
Route::get('/viewcart','CartController@index');
Route::get('/cart/deleteItem/{id}','CartController@deleteItem');
Route::get('/cart/update-quantity/{id}/{quantity}','CartController@updateQuantity');
/////////////////////////
/// Apply Coupon Code
Route::post('/apply-coupon','CouponController@applycoupon');
/// Simple User Login /////
Route::get('/login_page','UsersController@index');
Route::post('/register_user','UsersController@register');
Route::post('/user_login','UsersController@login');
Route::get('/logout','UsersController@logout');

//////buyer User Authentications ///////////
Route::group(['middleware'=>'FrontLogin_middleware'],function (){
    Route::get('/myaccount','UsersController@account');
    Route::put('/update-profile/{id}','UsersController@updateprofile');
    Route::put('/update-password/{id}','UsersController@updatepassword');
    Route::get('/check-out','CheckOutController@index');
    Route::post('/submit-checkout','CheckOutController@submitcheckout');
    Route::get('/order-review','OrdersController@index');
    Route::post('/submit-order','OrdersController@order');
    Route::get('/cod','OrdersController@cod');
    Route::get('/paypal','OrdersController@paypal');
    Route::get('/myhistory', 'OrdersController@myOrderView');
});
///

    /// vendor Login /////
    Route::get('/vendor_login','VendorsController@index');
    Route::post('/register_vendor','VendorsController@register');
    Route::post('/login_vendor','VendorsController@login');
    Route::get('/logout_vendor','VendorsController@logout');


    //////vendor   Authentications
    Route::group(['middleware'=>'VendorLogin_middleware'],function (){

        Route::get('/vendor_home', 'AdminController@index')->name('backEnd.index');
        Route::get('product/create', 'ProductsController@create')->name('backEnd.products.create');
        Route::post('/product_store', 'ProductsController@store') ;
        Route::get('product/index', 'ProductsController@index')->name('backEnd.products.index');
        Route::get('product/edit/{id}', 'ProductsController@edit')->name('backEnd.products.edit');
        Route::put('product/update/{id}', 'ProductsController@update')->name('product_update');
        Route::get('product/delete-product/{id}','ProductsController@destroy');
        Route::resource('/product','ProductsController');

        ///my account Setting Area

        Route::get('/vendor_account','VendorsController@account');



        /// Product Attribute
          Route::resource('/product_attr','ProductAtrrController');
          Route::get('delete-attribute/{id}','ProductAtrrController@deleteAttr');


          /// Product Images Gallery
         Route::resource('/image-gallery','ImagesController');
         Route::get('delete-imageGallery/{id}','ImagesController@destroy');


});
//////


/* Admin routin */
Auth::routes(['register'=>false]);
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function (){
    Route::get('/', 'AdminController@index')->name('admin_home');
    /// Setting Area
    Route::get('/settings', 'AdminController@settings');
    Route::get('/check-pwd','AdminController@chkPassword');
    Route::post('/update-pwd','AdminController@updatAdminPwd');
    /// Category Area
    Route::resource('/category','CategoryController');
    Route::get('delete-category/{id}','CategoryController@destroy');
    Route::get('/check_category_name','CategoryController@checkCateName');
    /// Products Area
    Route::resource('/product','ProductsController');
    Route::get('delete-product/{id}','ProductsController@destroy');
    Route::get('delete-image/{id}','ProductsController@deleteImage');


    /// ///////// Coupons Area //////////
    Route::resource('/coupon','CouponController');
    Route::get('delete-coupon/{id}','CouponController@destroy');


    /// ///////// Orders //////////
    Route::get('order/listview', 'OrdersController@listView')->name('admin.order.listview');
    Route::resource('/order','OrdersController');

    /// ///////// Users  //////////
    Route::resource('/user','UsersController');
    Route::get('delete-user/{id}','UsersController@destroy');
    Route::get('userview/listUser', 'UsersController@userView')->name('admin.user.index');
    Route::get('userview/updateUser', 'UsersController@updateAdmin')->name('admin.userview.updateadmin');
    Route::get('userview/vendors', 'UsersController@vendorAll')->name('admin.userview.vendors');
    Route::get('userview/buyers', 'VendorsController@buyersAll')->name('admin.userview.buyers');
    Route::resource('/userview','UsersController');



///
});
//search
Route::get('/search','SearchController@searchProducts');
