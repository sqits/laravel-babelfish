<?php

use Illuminate\Support\Facades\Route;

Route::as('babelfish.')->group(function () {
    Route::prefix('api')->group(function () {

        Route::prefix('languages')->group(function () {
            Route::get('/')->name('index');
            Route::get('/{language}')->name('show');
        });
    });

    // Catch-all Route...
    Route::get('/{view?}', 'HomeController@index')
        ->where('view', '(.*)')
        ->name('index');
});


