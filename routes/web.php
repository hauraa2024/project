<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


/*Route::get('/', function () {*/
/*    return view('welcome');*/
/*});*/

Route::get('/', [ProductController::class, 'index']);
Route::resource('products', ProductController::class);
Route::resource('employees', EmployeeController::class);

Route::resource('tasks', TasksController::class);

Route::resource('pemasukan', PemasukanController::class);
Route::resource('pengeluaran', PengeluaranController::class);

Route::get('/login', function () {
    return view('auth.login_register');
});


Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth'); 

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/auth');
});