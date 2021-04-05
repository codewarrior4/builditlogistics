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


Route::group(['prefix'=>'/user'],function()
{
    Route::view('/login','user.login');
    Route::view('/register','user.register');
    Route::view('/verify','user.verify');
    Route::view('/forgot','user.forgot');
    Route::view('/billing','user.billing');
    Route::view('/orders','user.orders');
    Route::view('/index','user.index');
    Route::view('/order/{id}','user.orderdetails');
    Route::view('/cart','user.cart');
    Route::view('/wishlist','user.wishlist');

    // Route::view('/account','user.index');
});


Route::group(['prefix'=>'/admin'], function(){
    Route::view('/index','admin.index');
    // customer
    Route::view('/customers','admin.customers');

    // faq
    Route::view('/faq','admin.faq');

    //blog
    Route::view('/blog','admin.blog');
    Route::view('/blogs','admin.blogs');
    Route::view('/blog/{id}','admin.blogdetails');

    //stores
    Route::view('/store','admin.store');
    Route::view('/stores','admin.stores');

    // shop settings
    Route::view('/slider','admin.slider');
    Route::view('/social','admin.social');
    Route::view('/about','admin.about');
    Route::view('/tac','admin.tac');


    //category
    Route::view('/category','admin.category');
    Route::view('/category_sub','admin.category_sub');
    
    //products
    Route::view('/product','admin.product');
    Route::view('/products','admin.products');
    Route::view('/products/{id}','admin.productdetails');

    //Subscribers
    Route::view('/subscribers','admin.subscribers');

    //profile
    Route::view('/login','admin.login');

    Route::view('/orders','admin.orders');
    Route::view('/order/{id}','admin.orderdetails');

   

});

Route::view('/','main.index');
Route::view('/about','main.about');
Route::view('/tac','main.tac');
Route::view('/contact','main.contact');
Route::view('/blog','main.blog');
Route::view('/blog/{id}','main.blogdetails');
Route::view('/products','main.products');
Route::view('/product/{id}','main.productdetails');
Route::view('/cart','main.cart');
Route::view('/checkout','main.checkout');
Route::view('/wishlist','main.wishlist');
Route::view('/faq','main.faq');
Route::view('/stores','main.stores');
Route::view('/category','main.category');
Route::view('/category/sub','main.categorysub');
Route::view('/categories/{type}','main.categories');
Route::view('/categories/{cat}/{query}','main.categories');


