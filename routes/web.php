<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::name('admin.')->group(function () {
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AuthController::class, 'loginView'])->name('admin.logins');
    Route::get('login', [AuthController::class, 'login'])->name('admin.login');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    
    Route::resource('customers', CustomerController::class);

});
});
