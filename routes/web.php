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
use App\Http\Controllers\Main;
use App\Http\Controllers\Social;
use App\Http\Controllers\Tacs;
use App\Http\Controllers\store;
use App\Http\Controllers\Product;
use App\Http\Controllers\user;
use App\Http\Controllers\Subscriber;
use App\Http\Controllers\Cart;
use App\Http\Controllers\Wishlist;
use App\Http\Controllers\Information;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdminMain;
use App\Http\Controllers\Order;

Route::group(['prefix'=>'/user'],function()
{     
        Route::view('/forgot','user.forgot');
        Route::post('/forgot',[user::class,'forgot']);
        Route::get('/password/{token}',[user::class,'passview']);
        Route::get('/forget',function(){ return view('user.forget'); });


        Route::view('/wishlist','user.wishlist');

        Route::view('/login','user.login');
        Route::post('/login',[user::class,'login']);
        Route::get('/register',[user::class,'index']);
        Route::post('/register',[user::class,'store']);
    Route::group(['middleware'=>'user'],function() 
    {
      
        Route::post('/update',[user::class,'update']);
        Route::get('/verify/{token}',[user::class,'verify']);
        Route::get('/reverify',[user::class,'resendverification']);
        Route::post('/userpassword',[user::class,'userpassword']);
        Route::get('/billing',[Information::class,'index']);
        Route::post('/billing',[Information::class,'billing']);
        Route::post('/shipping',[Information::class,'shipping']);
        Route::view('/index','user.index');
        Route::view('/','user.index');
        Route::view('/change','user.password');
        Route::get('/logout',[user::class,'logout']);
        Route::post('/changepassword',[user::class,'changepassword']);
        Route::get('/orders',[Order::class,'userOrder']);
        Route::get('/order/{paymentid}',[Order::class,'userOrderDetails']);
    });


});



    Route::view('/admin/login','admin.login');
    Route::post('/admin/login',[AdminMain::class,'login']);
    Route::get('/admin/logout',[AdminMain::class,'logout']);

    Route::group(['prefix'=>'/admin','middleware'=>'admin'], function(){

        Route::view('/','admin.index');
        Route::view('/index','admin.index');
        // customer
        Route::get('/customers',[user::class,'customers']);
        Route::get('/customer/{id}',[user::class,'customer']);
        Route::post('/customer',[user::class,'customerStatus']);

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
        Route::get('/products/activate/{id}',[Product::class,'activate']);

        //Subscribers
        Route::get('/subscribers',[Subscriber::class,'index']);

        //profile
        Route::view('/login','admin.login');

        Route::get('/orders',[Order::class,'adminOrders']);
        Route::get('/order/{paymentid}',[Order::class,'adminOrderdetails']);
        Route::post('/order/update',[Order::class,'adminUpdate']);
        Route::post('/order/message',[Order::class,'sendMessage']);
        Route::get('/ordermessage/delete/{id}',[Order::class,'deleteMessage']);

   
});
Route::group(['middleware'=>'user'] ,function(){
    Route::post('/pay', [PaymentController::class,'redirectToGateway']);
    Route::get('/payment/callback',  [PaymentController::class,'handleGatewayCallback']);
    Route::view('/pay','main.pay');
    Route::get('/cart/{pid}/{quantity}/{price}',[Cart::class,'addtocart']);
    Route::post('/cart',[Cart::class,'addCart']);
    Route::get('/cart',[Cart::class,'cartList']);
    Route::get('/cart/delete/{id}',[Cart::class,'remove']);
    Route::get('/cart/clear',[Cart::class,'clearCart']);
    Route::get('/wishlist/{pid}/{price}',[Cart::class,'moveToWishlist']);
    Route::post('/cart/update',[Cart::class,'update']);

    Route::get('/wishlist',[wishlist::class,'wishList']);
    Route::get('/wishlist/{pid}/{quantity}/{price}',[Wishlist::class,'moveToCart']);

    Route::get('/checkout',[Main::class,'checkout']);

});

Route::get('/',[Main::class,'homepage']);

    Route::get('/email',[Email::class,'index']);
    // Route::view('/track','main.track');
    // Route::post('/track',[Main::class,'track']); 
    Route::post('/contact',[Main::class,'contact']); 
    Route::get('/category/{id}',[Main::class,'category']);
    Route::post('/search',[Main::class,'search']);
    Route::get('/category/sub/{id}',[Main::class,'subcategory']);
    Route::view('/categories/{type}','main.categories');
    Route::view('/categories/{cat}/{query}','main.categories');

    Route::get('/products',[Product::class,'allproducts']);
    Route::get('/product/{id}',[Product::class,'singleproducts']);
    Route::get('/details',[Main::class,'index']);
    Route::get('/about',[About::class,'about']);
    Route::get('/tac',[Tacs::class,'tac']);
    Route::view('/contact','main.contact');
    Route::get('/blog',[Blog::class,'blog']);
    Route::get('/blog/{id}',[Blog::class,'blogdetails']);
    Route::get('/faq',[Faq::class,'faq']);
    Route::get('/stores',[store::class,'stores']);
    Route::post('/blog/comment',[Blog::class,'comment']);



Route::post('/subscriber',[Subscriber::class,'store']);

