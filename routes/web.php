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

Auth::routes();


Route::get("/", function() {

    return 'Welcome';
});

Route::get("/home", function () {
    return 'OK';
});

//All Route for Admin Management
Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        return 'Dashboard';
    });


    Route::group(['namespace' => 'Admin'], function () {
        Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
            Route::get('/', function() {
                return 'Home Admin Screen';
            });

            Route::resource('routes', 'RouteController');
            Route::resource('regions', 'RegionController');
            Route::resource('schools', 'SchoolController');
            Route::resource('stations', 'StationController');
        });
    });
});
