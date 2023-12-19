<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\menuController;

Route::get('dashboard',[AdminController::class, 'dashboard'])->name('dashboard');

// profile route 
Route::get('profile',[ProfileController::class, 'index'])->name('profile');
Route::post('profile/update',[ProfileController::class, 'profileUpdate'])->name('profile.update');
Route::post('profile/updatepassword',[ProfileController::class, 'updatePassword'])->name('password.update');

Route::resources([
    'menu'=> menuController::class
]);

