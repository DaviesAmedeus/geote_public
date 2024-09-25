<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BasicsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\NewsUpdatesController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\Admin\AdminAuthorController;

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



Route::fallback(FallbackController::class); //for routes/pages that don exist.

/* --- BASIC(GUEST) PAGES --- */
Route::prefix('/')->group(function () {

    Route::controller(BasicsController::class)->group(function(){
        Route::get('/',  'index')->name('home');
        Route::get('/about','about')->name('about');
        Route::get('/engagements',  'engagements')->name('engagements');
    });

    // Routes for blog section
    Route::controller(BlogController::class)->group(function(){
        Route::get('/blog', 'index')->name('blog.index');
        Route::get('/blog/{blog:slug}', 'show')->name('blog.show');
    });

    Route::controller(ProjectController::class)->group(function(){
        Route::get('/projects', 'index')->name('projects.index');
        Route::get('/projects/{project:slug}', 'show')->name('projects.show');
    });

    Route::get('/publications', PublicationController::class)->name('publications');


});













