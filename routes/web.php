<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Email;
use App\Http\Controllers\Faq;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Slider;
use App\Http\Controllers\Blog;
use App\Http\Controllers\Category;
use App\Http\Controllers\Subcategory;
use App\Http\Controllers\About;
use App\Http\Controllers\Social;
use App\Http\Controllers\Tacs;
use App\Http\Controllers\store;
use App\Http\Controllers\Product;
use App\Http\Controllers\user;




Route::group(['prefix'=>'/user'],function()
{
    Route::view('/login','user.login');
    Route::get('/register',[user::class,'index']);
    Route::post('/register',[user::class,'store']);
    Route::get('/verify/{token}',[user::class,'verify']);

    
    
    Route::view('/forgot','user.forgot');
    Route::view('/billing','user.billing');
    Route::view('/orders','user.orders');
    Route::view('/index','user.index');
    Route::view('/order/{id}','user.orderdetails');
    Route::view('/cart','user.cart');
    Route::view('/wishlist','user.wishlist');

    // Route::view('/account','user.index');
});


Route::group(['prefix'=>'/admin','middleware'=>'admin'], function(){
    Route::view('/','admin.index');
    Route::view('/index','admin.index');
    // customer
    Route::view('/customers','admin.customers');

    // faq
    Route::get('/faq',[faq::class,'create']);
    Route::post('/faq',[faq::class,'store']);
    Route::get('/faq/delete/{id}',[faq::class,'destroy']);

    //blog
    Route::view('/blog','admin.blog');
    Route::post('/blog',[Blog::class,'store']);
    Route::get('/blogs',[Blog::class,'index']);
    Route::get('/blog/{id}',[Blog::class,'show']);
    Route::get('/blog/delete/{id}',[Blog::class,'destroy']);
    Route::post('/blog/update',[Blog::class,'update']);

    //stores
    Route::get('/store',[store::class,'index']);
    Route::get('/store/delete/{id}',[store::class,'destroy']);
    Route::get('/stores',[store::class,'show']);
    Route::post('/store',[store::class,'store']);

    // shop settings
    Route::get('/slider',[slider::class,'index']);
    Route::get('/slider/delete/{id}',[slider::class,'destroy']);
    Route::post('/slider',[slider::class,'store']);
    Route::get('/about',[About::class,'index']);
    Route::post('/about',[About::class,'store']);
    Route::get('/tac',[Tacs::class,'index']);
    Route::post('/tac',[Tacs::class,'store']);
    Route::get('/social',[Social::class,'index']);
    Route::post('/social',[Social::class,'create']);
    
    //end shop


    //category
    Route::get('/category',[Category::class,'index']);
    Route::post('/category',[Category::class,'store']);
    Route::get('/category/delete/{id}',[Category::class,'destroy']);
    Route::get('/category_sub',[Subcategory::class,'index']);
    Route::post('/category_sub',[Subcategory::class,'create']);
    Route::get('/category_sub/delete/{id}',[Subcategory::class,'destroy']);

    // end category

    
    //products
    Route::get('/product',[Product::class,'create']);
    Route::post('/product',[Product::class,'store']);
    Route::post('/product/update',[Product::class,'update']);
    Route::get('/products',[Product::class,'index']);
    Route::get('/products/{id}',[Product::class,'show']);
    Route::get('/products/delete/{id}',[Product::class,'destroy']);


    //Subscribers
    Route::view('/subscribers','admin.subscribers');

    //profile
    Route::view('/login','admin.login');

    Route::view('/orders','admin.orders');
    Route::view('/order/{id}','admin.orderdetails');

   

});


Route::get('/email',[Email::class,'index']);
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



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
