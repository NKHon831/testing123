<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleLocationController;

Route::get('/',action: [UserController::class, 'index'])->name('landing-page');

Route::post('login', action: [AuthenticateController::class,'login'])->name(name: 'login');

Route::get('register', [AuthenticateController::class,'register'])->name('register-page');

Route::post('register',[AuthenticateController::class,'createNewUser'])->name('register');

Route::get('/home',[UserController::class,'home'])->name('home');

Route::post('/food', [FoodController::class, 'attachFoodToUser'])->name('add-food');

Route::get('/vehicle-location',[VehicleLocationController::class, 'getVehicleLocation'])->name('vehicle-location');



