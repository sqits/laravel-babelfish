<?php

use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function () {
    // Route::get('/stats', 'DashboardStatsController@index')->name('horizon.stats.index');
    Route::post('/translations', 'Api\TranslationController@store')->name('babelfish.translations.store');
    Route::get('/translations/{id}/suggestion', 'Api\SuggestionController@show')->name('babelfish.suggestion.show');

});

// Catch-all Route...
Route::get('/{view?}', 'HomeController@index')
    ->where('view', '(.*)')
    ->name('babelfish.index');
