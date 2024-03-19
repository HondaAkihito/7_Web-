<?php

use Illuminate\Http\Request;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\SpendingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    // 予算表示
    Route::resource('/top', 'BudgetController'); // = Route::get('/top', 'BudgetController@index');
    // オール削除
    Route::delete('/budget_create', 'BudgetController@all_destroy');
    // 予算登録
    Route::resource('/budget_create', 'BudgetController'); // = Route::post('/budget/create', 'BudgetController@store');
    // 支出「一覧」表示
    Route::resource('/spend/create', 'SpendingController'); // = Route::get('/spend/create', 'SpendingController@index');
    // 支出登録
    // 支出一覧とRoute::resourceが同じ // = Route::post('/spend/create', 'SpendingController@store');
    // 支出削除
    // 支出一覧とRoute::resourceが同じ // = Route::delete('/spend/create/{create}', 'SpendingController@destroy');
    // 支出更新(個別)
    Route::resource('/spend/:spendId/edit', 'SpendingController'); // = Route::get('/spend/create', 'SpendingController@index');
    // 支出個別削除(個別)
});


    