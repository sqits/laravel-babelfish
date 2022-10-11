<?php

use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function () {
    // Route::get('/stats', 'DashboardStatsController@index')->name('horizon.stats.index');
});

// Catch-all Route...
Route::get('/{view?}', 'HomeController@index')
    ->where('view', '(.*)')
    ->name('babelfish.index');
