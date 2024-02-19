<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicsController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;

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


Route::get('/', [BasicsController::class, 'index'])->name('home');
Route::get('/about', [BasicsController::class, 'about'])->name('about');
Route::get('/engagements', [BasicsController::class, 'engagements'])->name('engagements');

// Group of routes for normal static pages
Route::prefix('/')->namespace('App\Http\Controllers\BasicsController')->group(function(){

    Route::get('/', [BasicsController::class, 'index'])->name('home');
    Route::get('/about', [BasicsController::class, 'about'])->name('about');
    Route::get('/engagements', [BasicsController::class, 'engagements'])->name('engagements');
});


// Group of routes for Admin
Route::prefix('/admin')->namespace('App\Http\Controllers\Admin\AdminController')->group(function(){

    Route::match(['GET', 'POST'], 'login', [AdminController::class, 'login'])->name('admin.login');

    Route::group(['middleware'=>['admin']], function(){
        Route::get('dashboard', [AdminController::class, 'dashboard']);
        Route::get('logout', [AdminController::class, 'logout']);

    });
    
});

// Group of routes for User
Route::prefix('/user')->namespace('App\Http\Controllers\User\UserController')->group(function(){

    Route::get('dashboard', [UserController::class, 'dashboard']);
    Route::match(['GET', 'POST'], 'login', [UserController::class, 'login'])->name('user.login');
    // Route::match(['GET', 'POST'], 'login', [AdminController::class, 'login'])->name('admin.login');

    Route::group(['middleware'=>['user']], function(){
        Route::get('dashboard', [UserController::class, 'dashboard']);
        Route::get('logout', [UserController::class, 'logout']);

    });
    
});

Route::fallback(FallbackController::class);