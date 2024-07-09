<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BasicsController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\NewsUpdatesController;
use App\Http\Controllers\ProjectController;
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




Route::fallback(FallbackController::class); //for routes/pages that don exist.
Auth::routes();

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
        Route::get('/blog/{id}', 'showBlogPost')->name('blog.show');
    });

    Route::controller(ProjectController::class)->group(function(){
        Route::get('/projects', 'index')->name('projects.index');
        Route::get('/projects/{id}', 'show')->name('projects.show');
    });

    Route::get('/publications', PublicationController::class)->name('publications');

    
});


/* --- AUTHENICATED ROUTES FOR USER --- */
Route::middleware(['auth', 'user-access:user'])->group(function () {

    // User profile routes, logout route, dashboard home
    Route::controller(HomeController::class)->group(function () {
        Route::prefix('/user')->group(function () {
            Route::get('/dashboard', 'index')->name('user.home');
            Route::get('/logout', 'logout_user')->name('user.logout');
            Route::get('/profile/{id}', 'userProfile')->name('user.profile');
            Route::post('/profile/update/{id}',  'update')->name('user.profile_update');
        });
    });

    // User blog routes
    Route::controller(BlogController::class)->group(function () {
        Route::prefix('/user/blog')->group(function () {
            Route::get('/blog_posts',  'blogPosts')->name('user.allposts');
            Route::get('/create', 'createblogpost')->name('blog.create');
            Route::post('/store', 'store')->name('blog.store');
            Route::get('/edit/{id}', 'editBlogPost')->name('blog.edit');
            Route::patch('/{id}', 'update')->name('blog.update');
            Route::delete('/{id}', 'destroy')->name('blog.delete');
        });
    });

    //  Project Updates Routes
    Route::controller(ProjectController::class)->group(function () {
        Route::prefix('user/projects')->group(function(){
            Route::get('/project_posts', 'allProjects')->name('user.allProjects');
            Route::get('/create', 'create')->name('projects.create');
            Route::post('/store', 'store')->name('projects.store');
            Route::get('/edit/{int:id}', 'edit')->name('projects.edit');
            Route::patch('/{id}', 'update')->name('projects.update');
            Route::delete('/{id}', 'destroy')->name('projects.delete');
        });

    
        
    });


});


//Admin Routes List (They are secured)
/* --- AUTHENICATED ROUTES FOR USER --- */
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/logout', [HomeController::class, 'logout_admin'])->name('admin.logout');
});









