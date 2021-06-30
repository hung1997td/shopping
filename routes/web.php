<?php

use Illuminate\Support\Facades\Route;

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
//Admin
Route::group(['prefix' => 'admin' ], function (){
    //Authentication
    Route::get('register', 'Admin\Auth\RegisterController@create')->name('register');
    Route::post('register', 'Admin\Auth\RegisterController@store');

    Route::get('verify', 'Admin\Auth\VerificationController@create')->name('resend');
    Route::post('verify', 'Admin\Auth\VerificationController@resend');
    Route::get('verify_again', 'Admin\Auth\VerificationController@verify_again')->name('verify_again');

    Route::get('verifyEmail/{token}', 'Admin\Auth\VerificationController@verifyEmail')->name('verify');

    Route::get('login', 'Admin\Auth\LoginController@create')->name('login');
    Route::post('login', 'Admin\Auth\LoginController@store')->name('storeLogin');
    Route::get('logout', 'Admin\Auth\LoginController@logout')->name('Logout');
});
Route::group(['prefix' => 'admin'], function (){
    //Forget Password
    Route::get('forgotPassword','Admin\Auth\Password\ForgotController@create')->name('forgot');
    Route::post('forgotPassword','Admin\Auth\Password\ForgotController@store');

    Route::get('email_again','Admin\Auth\Password\ForgotController@email_again')->name('email_again');

    Route::post('resendPass','Admin\Auth\Password\ForgotController@resend')->name('passResend');

    Route::get('resetPassword','Admin\Auth\Password\ResetController@create')->name('reset');
    Route::post('resetPassword','Admin\Auth\Password\ResetController@store');

});
Route::group(['prefix' => 'admin','middleware'=>'loginAdmin'], function () {
    //Dashboard
    Route::get('', 'Admin\DashboardController@index')->name('dashboard');

    //Product
    Route::group(['prefix' => 'product'], function () {
        Route::get('', 'Admin\Product\ProductController@index')->name('Product')->middleware('can:view_product');
        Route::get('/create', 'Admin\Product\ProductController@create')->name('createProduct')->middleware('can:create_product');
        Route::post('/store', 'Admin\Product\ProductController@store')->name('storeProduct');
        Route::get('/edit/{Product}', 'Admin\Product\ProductController@edit')->name('editProduct')->middleware('can:edit_product');
        Route::post('/update/{Product}', 'Admin\Product\ProductController@update')->name('updateProduct');
        Route::get('/delete/{Product}', 'Admin\Product\ProductController@delete')->name('deleteProduct')->middleware('can:delete_product');

        //Tag
        Route::group(['prefix' => 'tag'], function () {
            Route::get('', 'Admin\Product\TagController@index')->name('ProductTag');
            Route::get('/create', 'Admin\Product\TagController@create')->name('createProductTag');
            Route::post('/store', 'Admin\Product\TagController@store')->name('storeProductTag');
            Route::get('/edit/{Tag}', 'Admin\Product\TagController@edit')->name('editProductTag');
            Route::post('/update/{Tag}', 'Admin\Product\TagController@update')->name('updateProductTag');
            Route::get('/delete/{Tag}', 'Admin\Product\TagController@delete')->name('deleteProductTag');
        });

        //Category
        Route::group(['prefix' => 'category'], function () {
            Route::get('', 'Admin\Product\CategoryController@index')->name('ProductCate');
            Route::get('/create', 'Admin\Product\CategoryController@create')->name('createProductCate');
            Route::post('/store', 'Admin\Product\CategoryController@store')->name('storeProductCate');
            Route::get('/edit/{Cate}', 'Admin\Product\CategoryController@edit')->name('editProductCate');
            Route::post('/update/{Cate}', 'Admin\Product\CategoryController@update')->name('updateProductCate');
            Route::get('/delete/{Cate}', 'Admin\Product\CategoryController@delete')->name('deleteProductCate');
        });

        //Color
        Route::group(['prefix' => 'color'], function () {
            Route::get('', 'Admin\Product\ColorController@index')->name('ProductColor');
            Route::get('/create', 'Admin\Product\ColorController@create')->name('createProductColor');
            Route::post('/store', 'Admin\Product\ColorController@store')->name('storeProductColor');
            Route::get('/edit/{Color}', 'Admin\Product\ColorController@edit')->name('editProductColor');
            Route::post('/update/{Color}', 'Admin\Product\ColorController@update')->name('updateProductColor');
            Route::get('/delete/{Color}', 'Admin\Product\ColorController@delete')->name('deleteProductColor');
        });

        //Size
        Route::group(['prefix' => 'size'], function () {
            Route::get('', 'Admin\Product\SizeController@index')->name('ProductSize');
            Route::get('/create', 'Admin\Product\SizeController@create')->name('createProductSize');
            Route::post('/store', 'Admin\Product\SizeController@store')->name('storeProductSize');
            Route::get('/edit/{Size}', 'Admin\Product\SizeController@edit')->name('editProductSize');
            Route::post('/update/{Size}', 'Admin\Product\SizeController@update')->name('updateProductSize');
            Route::get('/delete/{Size}', 'Admin\Product\SizeController@delete')->name('deleteProductSize');
        });

        //Brand
        Route::group(['prefix' => 'brand'], function () {
            Route::get('', 'Admin\Product\BrandController@index')->name('ProductBrand');
            Route::get('/create', 'Admin\Product\BrandController@create')->name('createProductBrand');
            Route::post('/store', 'Admin\Product\BrandController@store')->name('storeProductBrand');
            Route::get('/edit/{Brand}', 'Admin\Product\BrandController@edit')->name('editProductBrand');
            Route::post('/update/{Brand}', 'Admin\Product\BrandController@update')->name('updateProductBrand');
            Route::get('/delete/{Brand}', 'Admin\Product\BrandController@delete')->name('deleteProductBrand');
        });

        //Code
        Route::group(['prefix' => 'code'], function () {
            Route::get('', 'Admin\Product\CodeController@index')->name('ProductCode');
            Route::get('/create', 'Admin\Product\CodeController@create')->name('createProductCode');
            Route::post('/store', 'Admin\Product\CodeController@store')->name('storeProductCode');
            Route::get('/edit/{Brand}', 'Admin\Product\CodeController@edit')->name('editProductCode');
            Route::post('/update/{Brand}', 'Admin\Product\CodeController@update')->name('updateProductCode');
            Route::get('/delete/{Brand}', 'Admin\Product\CodeController@delete')->name('deleteProductCode');
        });

    });

    //Blog
    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'Admin\Blog\BlogController@index')->name('Blog');
        Route::get('/create', 'Admin\Blog\BlogController@create')->name('createBlog');
        Route::post('/store', 'Admin\Blog\BlogController@store')->name('storeBlog');
        Route::get('/edit/{Blog}', 'Admin\Blog\BlogController@edit')->name('editBlog');
        Route::post('/update/{Blog}', 'Admin\Blog\BlogController@update')->name('updateBlog');
        Route::get('/delete/{Blog}', 'Admin\Blog\BlogController@destroy')->name('deleteBlog');

        //Tag
        Route::group(['prefix' => 'tag'], function () {
            Route::get('/', 'Admin\Blog\BlogTagController@index')->name('BlogTag');
            Route::get('/create', 'Admin\Blog\BlogTagController@create')->name('createBlogTag');
            Route::post('/store', 'Admin\Blog\BlogTagController@store')->name('storeBlogTag');
            Route::get('/edit/{Tag}', 'Admin\Blog\BlogTagController@edit')->name('editBlogTag');
            Route::post('/update/{Tag}', 'Admin\Blog\BlogTagController@update')->name('updateBlogTag');
            Route::post('/delete/{Tag}', 'Admin\Blog\BlogTagController@destroy')->name('deleteBlogTag');
        });
    });

    //Role
    Route::group(['prefix' => 'role'], function () {
        Route::get('/', 'Admin\Role\RoleController@index')->name('Roles')->middleware('can:view_roles');
        Route::get('/create', 'Admin\Role\RoleController@create')->name('createRoles')->middleware('can:create_roles');
        Route::post('/store', 'Admin\Role\RoleController@store')->name('storeRoles');
        Route::get('/edit/{Role}', 'Admin\Role\RoleController@edit')->name('editRoles')->middleware('can:edit_roles');
        Route::post('/update/{Role}', 'Admin\Role\RoleController@update')->name('updateRoles');
        Route::get('/delete/{Role}', 'Admin\Role\RoleController@destroy')->name('deleteRoles')->middleware('can:delete_roles');
    });

    //Permission
    Route::group(['prefix' => 'permission'], function () {
        Route::get('/', 'Admin\Permission\PermissionController@index')->name('Permission')->middleware('can:view_permission');
        Route::get('/create', 'Admin\Permission\PermissionController@create')->name('createPermission')->middleware('can:create_permission');
        Route::post('/store', 'Admin\Permission\PermissionController@store')->name('storePermission');
        Route::get('/edit/{Permission}', 'Admin\Permission\PermissionController@edit')->name('editPermission')->middleware('can:edit_permission');
        Route::post('/update/{Permission}', 'Admin\Permission\PermissionController@update')->name('updatePermission');
        Route::post('/delete/{Permission}', 'Admin\Permission\PermissionController@destroy')->name('deletePermission')->middleware('can:delete_permission');
    });

    //Users
    Route::group(['prefix' => 'user'], function () {
        Route::get('', 'Admin\User\UsersController@index')->name('Users')->middleware('can:view_user');
        Route::get('/create', 'Admin\User\UsersController@create')->name('createUsers')->middleware('can:create_user');
        Route::post('/store', 'Admin\User\UsersController@store')->name('storeUsers');
        Route::get('/edit/{Users}', 'Admin\User\UsersController@edit')->name('editUsers')->middleware('can:edit_user');
        Route::post('/update/{Users}', 'Admin\User\UsersController@update')->name('updateUsers');
        Route::get('/delete/{Users}', 'Admin\User\UsersController@delete')->name('deleteUsers')->middleware('can:delete_user');
        Route::group(['prefix' => 'profile'], function () {
            Route::get('{user}', 'Admin\User\UserprofileController@edit')->name('profile');
            Route::post('{user}', 'Admin\User\UserprofileController@update');
            Route::get('editPass/{user}', 'Admin\User\UserprofileController@editPassword')->name('changePassword');
            Route::post('editPass/{user}', 'Admin\User\UserprofileController@updatePassword');
        });
    });
});

//Client
Route::group(['prefix' =>'/'], function () {
    Route::get('', 'Client\HomeController@index')->name('home');
    //Product
    Route::get('product','Client\ProductController@index')->name('product');
    Route::get('product-details/{product}','Client\ProductController@show')->name('productDetail');
    //Cart
    Route::get('product/addToCart/{product}','Client\ProductController@addToCart')->name('productAddCart');
    Route::get('product/showCart','Client\ProductController@showCart')->name('showCart');
    Route::get('product/updateCart','Client\ProductController@updateCart')->name('updateCart');
    Route::get('product/deleteCart','Client\ProductController@deleteCart')->name('deleteCart');
    //Shop
    Route::get('shop','Client\ShopController@index')->name('shop');
//    Route::get('product','Client\ProductController@index')->name('product');
//    Route::post('newsletter','Site\HomeController@newsletter')->name('newsletter');
//    Route::get('tin-tuc','Site\BlogController@index')->name('blog');
//    Route::get('tin-tuc/{id}','Site\BlogController@show')->name('blogDetails');
//    Route::get('lien-he','Site\ContactController@index')->name('contact');
//    Route::get('cart','Site\CartController@cart')->name('cart');
//    Route::get('shop/details/{Product}','Site\ShopController@show')->name('shopDetails');
//    Route::get('shop/addCart/{id}','Site\ShopController@addCart')->name('addCart');
//    Route::get('cart/{id}','Site\CartController@deleteItem')->name('cartDelete');
//    Route::get('cartUpdate/{id}','Site\CartController@updateItem')->name('cartUpdate');
//    Route::get('checkout','Site\CheckoutController@index')->name('checkout');
//    Route::post('checkout','Site\CheckoutController@checkout');
//    Route::get('checkoutSuccess','Site\CheckoutController@success')->name('checkout-success');
//
//    Route::get('/ajax/view-product', 'Site\ShopController@ajaxViewProduct')->name('productPopup');
//
//    Route::get('{slug}','Site\ShopController@list')->name('shop.list');
});
