<?php

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

Route::redirect('/', '/'.config("app.locale"));
foreach (array_keys(config('translation.locales')) as $loc) {
    Route::prefix($loc)->name($loc.".")->group(function () {
        Route::get('/', 'IndexController@index');
        Route::get('generated-asset.js', 'IndexController@generatedAsset')->name('generated_asset');
    });
}
