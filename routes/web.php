<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/home', [MenuController::class, 'home']);
Route::resource('menus', MenuController::class);
Route::get('/dashboard/create', [MenuController::class, 'create'])->name('dashboard.create');
Route::get('/menus/{menu}/edit', [MenuController::class, 'edit'])->name('menus.edit');
Route::put('/menus/{menu}', [MenuController::class, 'update'])->name('menus.update');


Route::get('/', [HomeController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });
