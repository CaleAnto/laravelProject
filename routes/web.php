<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\StockController::class, 'main']);

Route::get('/index', [\App\Http\Controllers\StockController::class, 'main']);

Route::get('/create', function () {
    return view('createStock');
});

Route::post('/complete', [\App\Http\Controllers\StockController::class, 'createStock']);
Route::get('/edit/{stock}', [\App\Http\Controllers\StockController::class, 'editStock']);
Route::post('/update/{stock}', [\App\Http\Controllers\StockController::class, 'updateStock']);
Route::get('/delete/{stock}', [\App\Http\Controllers\StockController::class, 'destroyStock']);

Route::get('/view', [\App\Http\Controllers\shopController::class, 'index']);
Route::get('/one/{id}', [\App\Http\Controllers\shopController::class, 'viewProduct']);

Route::get('/eShop/{stock}', [\App\Http\Controllers\shopController::class, 'editShop']);
Route::get('/eProduct/{stock}', [\App\Http\Controllers\shopController::class, 'editProduct']);
Route::post('/uShop/{stock}', [\App\Http\Controllers\shopController::class, 'updateShop']);
Route::post('/uProduct/{stock}', [\App\Http\Controllers\shopController::class, 'updateProduct']);

Route::get('/createProduct', function () {
    return view('createShop');
});
Route::post('/cShop', [\App\Http\Controllers\shopController::class, 'createShop']);
Route::post('/cProduct', [\App\Http\Controllers\shopController::class, 'createProduct']);

Route::get('/del/{product}', [\App\Http\Controllers\shopController::class, 'destroyProduct']);

