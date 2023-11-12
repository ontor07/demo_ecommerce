<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontedControllers;
use App\Http\Controllers\BackendController;


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

// Route::get('/', function () {
//     return view('welcome');
// });


 
Route::controller(frontedControllers::class)->group(function () {
    Route::get('/', 'home');
    Route::get('/about', 'about_us');
    Route::get('/blog', 'blog');
    Route::get('/blog_details', 'blog_details');
    Route::get('/brands', 'brands');
    Route::get('/cart_empty', 'cart_empty');
    Route::get('/cart_view', 'cart_view');
    Route::get('/change_password', 'change_password');
    Route::get('/check_out', 'check_out');
    Route::get('/compare', 'compare');
    Route::get('/contact', 'contact'); 
    Route::get('/invoice', 'invoice'); 
    Route::get('/xlogin', 'login'); 
});

// Route::get('/about',[frontedControllers::class, 'about_us']);

Route::post('/change_lang',[BackendController::class,'change_lang']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
 


Route::get('vendor/dashboard',[VendorController::class, 'dashboard'])->middleware(['auth','role:vendor'])->name('vendor.dashboard');

Route::fallback(function () {
   return view('fronted.404');
});


