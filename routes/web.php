<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::fallback(function () {
  return view('errors.404');
});

// SITE
Route::controller(SiteController::class)->group(function () {
  Route::get('/', 'index')->name('site.index');
});

// ADMIN
Route::controller(AdminController::class)->group(function () {
  Route::get('/login', 'login')->name('admin.login');
  Route::post('/login', 'auth')->name('admin.login');
});


Route::middleware('auth')->group(function () {
  Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');
});
