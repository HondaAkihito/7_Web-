<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\SpendingController;

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

// ログイン系
Auth::routes();

Route::group(['middleware' => 'auth'], function() {

    // Route::get('/', function () {
    //     return view('welcome');
    // });
    Route::get('/{any}', function() {
        return view('./app');
    })->where('any', '.*');

});