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
Route::resource('/top', 'BudgetController');
// = Route::get('/top', 'BudgetController@index');
// 予算登録
Route::resource('/budget_create', 'BudgetController');
// = Route::post('/budget/create', 'BudgetController@store');
// 支出一覧表示
