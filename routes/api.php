<?php

use Illuminate\Http\Request;


Route::prefix('/v1')->middleware(['json.response'])->group( function () {

    Route::get('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:api');

    // public routes
    Route::post('/auth/login', 'Api\AuthController@login')->name('login.api');
    Route::post('/auth/register', 'Api\AuthController@register')->name('register.api');

    // private routes
    Route::middleware('auth:api')->group(function () {
        Route::get('/auth/logout', 'Api\AuthController@logout')->name('logout');
    });

});