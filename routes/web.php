<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/',action: [UserController::class, 'index'])->name('landing-page');

Route::post('login', action: [AuthenticateController::class,'login'])->name('login');

Route::get('register', [AuthenticateController::class,'register'])->name('register-page');

Route::post('register',[AuthenticateController::class,'createNewUser'])->name('register');


