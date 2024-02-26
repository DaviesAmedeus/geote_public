<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BasicsController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\BlogController;

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


// // Group of routes for normal static pages
// Route::prefix('/')->namespace('App\Http\Controllers\BasicsController')->group(function(){

//     Route::get('/', [BasicsController::class, 'index'])->name('home');
//     Route::get('/about', [BasicsController::class, 'about'])->name('about');
//     Route::get('/engagements', [BasicsController::class, 'engagements'])->name('engagements');
// });
// // Group of routes for Admin
// Route::prefix('/admin')->namespace('App\Http\Controllers\Admin\AdminController')->group(function(){

//     Route::match(['GET', 'POST'], 'login', [AdminController::class, 'login'])->name('admin.login');

//     Route::group(['middleware'=>['admin']], function(){
//         Route::get('dashboard', [AdminController::class, 'dashboard']);
//         Route::get('logout', [AdminController::class, 'logout']);

//     });
    
// });

// // Group of routes for User
// Route::prefix('/user')->namespace('App\Http\Controllers\User\UserController')->group(function(){

//     Route::get('dashboard', [UserController::class, 'dashboard']);
//     Route::match(['GET', 'POST'], 'login', [UserController::class, 'login'])->name('user.login');
//     // Route::match(['GET', 'POST'], 'login', [AdminController::class, 'login'])->name('admin.login');

//     Route::group(['middleware'=>['user']], function(){
//         Route::get('dashboard', [UserController::class, 'dashboard']);
//         Route::get('logout', [UserController::class, 'logout']);

//     });
    
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

  
// //Admin Routes List
// Route::middleware(['auth', 'user-access:manager'])->group(function () {
   
//     Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
// });



Route::fallback(FallbackController::class); //for routes/pages that don exist.
Auth::routes(); 

// for routes or pages that dont require authentication i.e basic pages
Route::prefix('/')->group(function(){
    Route::get('/', [BasicsController::class, 'index'])->name('home');
    Route::get('/about', [BasicsController::class, 'about'])->name('about');
    Route::get('/engagements', [BasicsController::class, 'engagements'])->name('engagements');
});


//Normal Users Routes List (They are secured)
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/user/home', [HomeController::class, 'index'])->name('user.home');
    Route::get('/user/logout', [HomeController::class, 'logout_user'])->name('user.logout');

    Route::get('/blog/createblogpost', [BlogController::class, 'createblogpost'])->name('blog.create');

});
   

//Admin Routes List (They are secured)
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/logout', [HomeController::class, 'logout_admin'])->name('admin.logout');
    
});

