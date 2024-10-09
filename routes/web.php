<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BasicsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\PublicationController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::fallback(FallbackController::class); //for routes/pages that don exist.

Route::controller(BasicsController::class)->group(function(){
    Route::get('/',  'index')->name('home');
    Route::get('/about','about')->name('about');
    Route::get('/engagements',  'engagements')->name('engagements');
});

// Routes for blog posts
Route::controller(BlogController::class)->group(function(){
    Route::get('/blog', 'index')->name('blog.index');
    Route::get('/blog/{blog:slug}', 'show')->name('blog.show');
});

// Routes for blog posts
Route::controller(ProjectController::class)->group(function(){
    Route::get('/projects', 'index')->name('projects.index');
    Route::get('/projects/{project:slug}', 'show')->name('projects.show');
});

Route::get('/publications', PublicationController::class)->name('publications');
