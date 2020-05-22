<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/todos', 'TodosController@index');
    Route::post('/todos', 'TodosController@store');
    Route::patch('/todos/{todo}', 'TodosController@update');
    Route::delete('/todos/{todo}', 'TodosController@destroy');
    Route::patch('/todosCheckAll', 'TodosController@updateAll');
    Route::delete('/todosDeleteCompleted', 'TodosController@destroyCompleted');

    Route::post('/logout', 'AuthController@logout');
});

Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');