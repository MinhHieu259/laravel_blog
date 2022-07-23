<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\CommentController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [FrontendController::class, 'index']);
Route::get('tutorial/{category_slug}', [FrontendController::class, 'viewCategoryPost']);
Route::get('tutorial/{category_slug}/{post_slug}', [FrontendController::class, 'viewPost']);

//Comment
Route::post('comments', [CommentController::class, 'store']);
Route::post('delete-comment', [CommentController::class, 'destroy']);

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get("/dashboard", [DashboardController::class, 'index']);

    Route::get("/category", [CategoryController::class, 'index']);
    Route::get("/add-category", [CategoryController::class, 'create']);
    Route::post("/add-category", [CategoryController::class, 'store']);
    Route::get('edit-category/{category_id}', [CategoryController::class, 'edit']);
    Route::put('update-category/{category_id}', [CategoryController::class, 'update']);
    // Route::get('delete-category/{category_id}', [CategoryController::class, 'destroy']);
    Route::post('delete-category', [CategoryController::class, 'destroy']);

    Route::get('posts', [PostController::class, 'index']);
    Route::get('add-post', [PostController::class, 'create']);
    Route::post('add-post', [PostController::class, 'store']);

    Route::get('users', [UserController::class, 'index']);
    Route::get('user/{user_id}', [UserController::class, 'edit']);
    Route::put('update-user/{user_id}', [UserController::class, 'update']);

    Route::get('settings', [SettingController::class, 'index']);
    Route::post('settings', [SettingController::class, 'savedata']);
});
