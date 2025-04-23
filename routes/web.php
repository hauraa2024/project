<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;

/*Route::get('/', function () {*/
/*    return view('welcome');*/
/*});*/

Route::get('/', [ProductController::class, 'index']);
Route::resource('products', ProductController::class);
Route::resource('employees', EmployeeController::class);

Route::resource('tasks', TasksController::class);

Route::resource('pemasukan', PemasukanController::class);
Route::resource('pengeluaran', PengeluaranController::class);