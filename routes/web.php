<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\MemberController;





Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/general',[AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/',[AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/register',[AdminController::class, 'register'])->name('admin.register');
Route::get('/admin/forget-password',[AdminController::class, 'forgetpassword'])->name('admin.forgetpassword');





Route::post('/admin/login',[MemberController::class, 'login'])->name('admin.login.post');
Route::get('/admin/logout',[MemberController::class, 'logout'])->name('admin.logout');
Route::post('/admin/register',[MemberController::class, 'register'])->name('admin.register.post');

Route::get('/admin/usersList',[UserController::class, 'index'])->name('admin.users.index');