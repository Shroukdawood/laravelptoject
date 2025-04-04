<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
//route::redirect('/' , '/user');

 //Route::get('/user', 'App\Http\Controllers\UserController@index');
// route::get('/user' , [UserController::class,'index']);
 //Route::get('/user/create' ,[UserController::class , 'create']);
// Route::post('/user/store' ,[UserController::class , 'store']);
// Route::post('/user/edit/{id}' ,[UserController::class , 'edit']);
// Route::post('/user/update' ,[UserController::class , 'update']);
// Route::post('/user/delete' ,[UserController::class , 'destroy']);

route::resource('user',UserController::class);
//Route::post('/user/store' ,[UserController::class , 'store'])->name('store');



