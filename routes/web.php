<?php

use Illuminate\Support\Facades\Route;

// Main Routes
Auth::routes();
Route::get('/', 'SiteController@index')->name('site');
Route::get('/search/', 'SiteController@searchProduct')->name('search');
Route::get('/contact','SiteController@Contact')->name('contact');

// Site specific routes
Route::get('/browse/product/{product}', 'SiteController@GetProduct')->name('site.singleProduct');
Route::get('/browse/mark/{mark}', 'SiteController@GetProductByMark')->name('site.GetProductByMark');

Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    
    Route::prefix('backoffice/product')->group(function(){
        Route::name('product.')->group(function(){
            Route::get('/remove/{product}','ProductController@Remove')->name('remove');
            Route::get('/removed','ProductController@Removed')->name('removed');
            Route::get('/restore/{id}','ProductController@Restore')->name('restore');
            Route::get('/delete/{product}','ProductController@Delete')->name('delete');
        });
    });

    // Resource Routes
    Route::prefix('backoffice')->group(function(){
        Route::resource('/category','CategoryController');
        Route::resource('/product','ProductController');
    });

    Route::get('/card/countItem','CardController@CountItem');
    Route::post('/card/addToCart/{id}','CardController@addToCart');
    Route::resource('/card','CardController');

    Route::prefix('order')->group(function(){
        Route::name('order.')->group(function(){
            Route::get('/sendOrder','OrderController@sendOrder')->name('sendOrder');
        });
    });
   
    Route::resource('/order','OrderController');


});

Route::post('/like/{id}','likeProductController');
