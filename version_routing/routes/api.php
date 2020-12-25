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

// API version2の定義
Route::pattern('apiVersion2', 'v2');
Route::group(['namespace' => 'Api\V2', 'prefix' => '{apiVersion2}'], function () {
    Route::get('example/show', 'UserController@show');
});

// API version2に未定義なrouteはv1のAPIを使う
// v1でもv2でもアクセスできるようにpattern定義する
Route::pattern('apiVersion1', 'v[12]');
Route::group(['namespace' => 'Api\V1', 'prefix' => '{apiVersion1}'], function () {
    Route::get('example/show', 'ExampleController@show');
    Route::post('example/delete', 'ExampleController@delete');
    Route::post('example/register', 'ExampleController@register');
});
