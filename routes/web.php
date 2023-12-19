<?php

use App\Http\Controllers\DashboardController;
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


Route::get('/',[DashboardController::class,'home'])->name('home');
Route::get('/invoice',[DashboardController::class,'invoice'])->name('invoice');
Route::get('/manageProduct',[DashboardController::class,'manageProduct'])->name('manageProduct');
Route::get('/orderlist',[DashboardController::class,'orderlist'])->name('orderlist');
Route::get('/productAdd',[DashboardController::class,'productAdd'])->name('productAdd');
Route::get('/productEdit',[DashboardController::class,'productEdit'])->name('productEdit');
