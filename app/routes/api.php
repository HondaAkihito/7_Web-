<?php

use Illuminate\Http\Request;

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

// 予算表示
Route::resource('/top', 'BudgetController'); // = Route::get('/top', 'BudgetController@index');
// 予算登録
Route::resource('/budget_create', 'BudgetController'); // = Route::post('/budget/create', 'BudgetController@store');
// 支出一覧表示
Route::resource('/spend/create', 'SpendingController'); // = Route::get('/spend/create', 'SpendingController@index');
// 支出登録
// 支出一覧とRoute::resourceが同じ // = Route::post('/spend/create', 'SpendingController@store');
// 支出削除
Route::delete('/spend/create/{create}', 'SpendingController@destroy');