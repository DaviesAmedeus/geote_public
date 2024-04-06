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
    Route::get('/user/dashboard', [HomeController::class, 'index'])->name('user.home');
    Route::get('/user/logout', [HomeController::class, 'logout_user'])->name('user.logout');
    Route::get('/user/profile/{id}', [HomeController::class, 'userProfile'])->name('user.profile');
    Route::post('/user/profile/update/{id}', [HomeController::class, 'update'])->name('user.profile_update');
    
    
    
});
   

//Admin Routes List (They are secured)
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/logout', [HomeController::class, 'logout_admin'])->name('admin.logout');
    
});


// Routes for blog section
Route::prefix('/blog_section')->group(function(){
    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index'); 
   
    
    Route::get('/createblogpost', [BlogController::class, 'createblogpost'])
        ->middleware(['auth', 'user-access:user'])->name('blog.create');

    Route::post('/blogstore', [BlogController::class, 'store'])
        ->middleware(['auth', 'user-access:user'])->name('blog.store');

    Route::get('/blog_post/{id}',[BlogController::class, 'showBlogPost'])->name('blog.show');

    Route::get('/user/all_blog_posts', [BlogController::class, 'allBlogPosts'])->middleware(['auth', 'user-access:user'])->name('user.allposts'); 
    Route::get('/blog_post/edit/{id}',[BlogController::class, 'editBlogPost'])->middleware(['auth', 'user-access:user'])->name('blog.edit');
    Route::patch('/{id}',[BlogController::class, 'update'])->middleware(['auth', 'user-access:user'])->name('blog.update');
    Route::delete('/blog_post/delete/{id}',[BlogController::class, 'destroy'])->middleware(['auth', 'user-access:user'])->name('blog.delete');

});


// News Updates Routes
Route::prefix('/news_updates')->controller(NewsUpdatesController::class)->group(function(){

    Route::get('/updates', 'index')->name('updates.index');
    Route::get('/create', 'create')->middleware(['auth', 'user-access:user'])->name('updates.create');
    Route::post('/store', 'store')->middleware(['auth', 'user-access:user'])->name('updates.store');
    Route::get('/user/all_news_updates', 'allNewsUpdates')->middleware(['auth', 'user-access:user'])->name('user.allUpdates');

    Route::get('/update/{id}', 'show')->name('updates.show');
    Route::get('/edit/{id}', 'edit')->middleware(['auth', 'user-access:user'])->name('updates.edit');
    Route::patch('/update/{id}', 'update')->middleware(['auth', 'user-access:user'])->name('updates.update');
    Route::delete('/update/delete/{id}', 'destroy')->middleware(['auth', 'user-access:user'])->name('updates.delete');


});


//  News Updates Routes
Route::prefix('/project_section')->controller(ProjectController::class)->group(function(){

    Route::get('/projects', 'index')->name('projects.index');
    Route::get('/create', 'create')->middleware(['auth', 'user-access:user'])->name('projects.create');

    Route::post('/store', 'store')->middleware(['auth', 'user-access:user'])->name('projects.store');
    Route::get('/user/all_projects', 'allProjects')->middleware(['auth', 'user-access:user'])->name('user.allProjects');

    Route::get('/project/{id}', 'show')->name('projects.show');
    Route::get('/edit/{id}', 'edit')->middleware(['auth', 'user-access:user'])->name('projects.edit');

    Route::patch('/project/{id}', 'update')->middleware(['auth', 'user-access:user'])->name('projects.update');
    Route::delete('/project/delete/{id}', 'destroy')->middleware(['auth', 'user-access:user'])->name('projects.delete');


});







 


    