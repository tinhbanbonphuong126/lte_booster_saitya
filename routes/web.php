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


Route::get('admin/prices', ['as'=> 'admin.prices.index', 'uses' => 'Admin\PriceController@index']);
Route::post('admin/prices', ['as'=> 'admin.prices.store', 'uses' => 'Admin\PriceController@store']);
Route::get('admin/prices/create', ['as'=> 'admin.prices.create', 'uses' => 'Admin\PriceController@create']);
Route::put('admin/prices/{prices}', ['as'=> 'admin.prices.update', 'uses' => 'Admin\PriceController@update']);
Route::patch('admin/prices/{prices}', ['as'=> 'admin.prices.update', 'uses' => 'Admin\PriceController@update']);
Route::delete('admin/prices/{prices}', ['as'=> 'admin.prices.destroy', 'uses' => 'Admin\PriceController@destroy']);
Route::get('admin/prices/{prices}', ['as'=> 'admin.prices.show', 'uses' => 'Admin\PriceController@show']);
Route::get('admin/prices/{prices}/edit', ['as'=> 'admin.prices.edit', 'uses' => 'Admin\PriceController@edit']);


Route::get('admin/bunjouchis', ['as'=> 'admin.bunjouchis.index', 'uses' => 'Admin\BunjouchiController@index']);
Route::post('admin/bunjouchis', ['as'=> 'admin.bunjouchis.store', 'uses' => 'Admin\BunjouchiController@store']);
Route::get('admin/bunjouchis/create', ['as'=> 'admin.bunjouchis.create', 'uses' => 'Admin\BunjouchiController@create']);
Route::put('admin/bunjouchis/{bunjouchis}', ['as'=> 'admin.bunjouchis.update', 'uses' => 'Admin\BunjouchiController@update']);
Route::patch('admin/bunjouchis/{bunjouchis}', ['as'=> 'admin.bunjouchis.update', 'uses' => 'Admin\BunjouchiController@update']);
Route::delete('admin/bunjouchis/{bunjouchis}', ['as'=> 'admin.bunjouchis.destroy', 'uses' => 'Admin\BunjouchiController@destroy']);
Route::get('admin/bunjouchis/{bunjouchis}', ['as'=> 'admin.bunjouchis.show', 'uses' => 'Admin\BunjouchiController@show']);
Route::get('admin/bunjouchis/{bunjouchis}/edit', ['as'=> 'admin.bunjouchis.edit', 'uses' => 'Admin\BunjouchiController@edit']);
