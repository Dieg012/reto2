<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shop', function () {
    return view('shop', compact('App\Http\Controllers\ShopController@shopInfo'));
});

//------------------------------------------------------
Route::get('addProduct', 'addProduct@returnView');
Route::post('addProduct', 'addProduct@returnView');
Route::get('info', 'informationController@selectTest');
//Route::get('shop','ShopController@shopInfo');

Route::get('check','ShopController@checkIfExists');

Route::get('insertShop','ShopController@fillShop');

