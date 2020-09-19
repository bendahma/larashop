<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'SiteController@index')->name('site');
Route::get('/browse/product/{product}', 'SiteController@GetProduct')->name('site.singleProduct');

Auth::routes();

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
    

});

