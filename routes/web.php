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

Route::get('/', "PageController@home")->name("home");
Route::get('/about-us', "PageController@aboutUs")->name("aboutUs");
Route::get('/school-search/{id?}', "PageController@schoolSearch")->name("schoolSearch");
Route::get('/chizu-search/{id?}', "PageController@chizuSearch")->name("chizuSearch");
Route::get('/eki-search/{id?}', "PageController@ekiSearch")->name("ekiSearch");

Route::get('/bunjouchi-detail/{id?}', "PageController@bunjouchiDetail")->name("bunjouchiDetail");


//All Route for Admin Management
Route::group(['middleware' => 'auth'], function () {

    Route::group(['namespace' => 'Admin'], function () {
        Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
            Route::get('/', function() {
                return view("admin.dashboard");
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
