<?php

use Illuminate\Support\Facades\Route;
use Sqits\Babelfish\Http\Controllers\Api\LanguageController;

Route::as('babelfish.')->group(function () {
    Route::prefix('api')->group(function () {

        Route::prefix('languages')->group(function () {
            Route::get('/', [LanguageController::class, 'index'])->name('index');
            Route::get('/{language}', [LanguageController::class, 'show'])->name('show');
        });
    });

    // Catch-all Route...
    Route::get('/{view?}', 'HomeController@index')
        ->where('view', '(.*)')
        ->name('index');
});


