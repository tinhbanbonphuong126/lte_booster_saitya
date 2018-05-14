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


use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

Auth::routes();
Route::any("register", function () {
    return "Only Admin can register. Thank you";
});

Route::get("/", function() {
    return 'HomePage';
});
Route::get("/contact", function() {
    return "Contact Page";
});



//All Route for Admin Management
Route::group(['middleware' => 'auth'], function () {

    Route::group(['namespace' => 'Admin'], function () {
        Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
            Route::get('/', function() {
                return 'Home Admin Screen';
            });

            Route::resource('routes', 'RouteController');
            Route::resource('regions', 'RegionController');
            Route::resource('schools', 'SchoolController');
            Route::resource('stations', 'StationController');
            Route::resource('prices', 'PriceController');
            Route::resource('bunjouchis', 'BunjouchiController');
        });
    });
});
