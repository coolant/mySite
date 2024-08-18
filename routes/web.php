<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/general',[AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/',[AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/register',[AdminController::class, 'register'])->name('admin.register');