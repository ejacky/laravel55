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

Route::get('search', ['as' => 'test.search', 'uses' => 'Api\TestApiController@search']);

Route::get('getconf.json', function () {
    return response()->json(['aa' => 'test']);
});

Route::get('psql_user', function () {
    $users = DB::table('users')->get();
    return response()->json($users);
});
