<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::prefix('backoffice')->group(function(){
        Route::resource('/category','CategoryController');
        Route::resource('/product','ProductController');
    });
    

});

