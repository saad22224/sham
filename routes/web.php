<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
     if (session('registered') || Auth::check()) {
        return redirect()->route('verify');
    }
    return view('welcome');
});

Route::post('/register', [App\Http\Controllers\Controller::class, 'handleRegister'])->name('register');
Route::get('/verify', [App\Http\Controllers\Controller::class, 'verify'])->name('verify');


Route::get('/shamadmin', function () {
    return view('dashboard.login');
})->name('admin');

Route::get('/admin/dashboard', function () {
    return view('dashboard.index');
})->name('admin.dashboard')->middleware('admin');

Route::post('/login', [App\Http\Controllers\admin\AdminLoginController::class, 'login'])->name('admin.login');
Route::post('/logout', [App\Http\Controllers\admin\AdminLoginController::class, 'logout'])->name('admin.logout');
Route::get('/users', [App\Http\Controllers\admin\AdminLoginController::class, 'getusers'])
->name('admin.getusers')->middleware('admin');