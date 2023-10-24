<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RestaurantController;

// ----- LOGIN -----
Route::get('/', [LoginController::class, 'login'])->middleware('alreadyLoggedIn');
Route::post('/login-admin',[LoginController::class, 'loginAdmin'])->name('login-admin');
Route::get('/', [LoginController::class, 'logout']);

// ----- REGISTER -----
Route::get('/register', [RegisterController::class, 'register']);
// Route::get('/register', [RegisterController::class, 'register'])->middleware('alreadyLoggedIn');
Route::post('/register-admin', [RegisterController::class, 'registerAdmin'])->name('register-admin');

// ----- DASHBOARD -----
Route::get('/dashboard',[DashboardController::class, 'dashboard'])->middleware('isLoggedIn');

// ----- CUSTOMER -----
Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/customer-edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::patch('/customer/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy']);

// ----- DRIVER -----
Route::get('/driver', [DriverController::class, 'index'])->name('driver.index');
Route::get('/driver-edit/{driver_id}', [DriverController::class, 'edit'])->name('driver.edit');
Route::patch('/driver/{id}', [DriverController::class, 'update'])->name('driver.update');
Route::delete('/driver/{id}', [DriverController::class, 'destroy'])->name('driver.delete');

// ----- RESTAURANT -----
Route::get('/restaurant', [RestaurantController::class, 'index'])->name('restaurant.index');
Route::get('/restaurant-edit/{id}', [RestaurantController::class, 'edit'])->name('restaurant.edit');
Route::patch('/restaurant/{id}', [RestaurantController::class, 'update'])->name('restaurant.update');




