<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\SubCategoryController;
use Illuminate\Support\Facades\Auth;

Route::get('/',[HomeController::class,'home'])->name('homepage');
Route::get('/course-details',[HomeController::class,'course'])->name('course');



// Admin Routes
Route::middleware('auth')->group(function (){

    Route::prefix('admin')->group(function () {

        Route::get('/',[AdminController::class,'home'])->name('admin.dashboard');

        Route::get('/category',[CategoryController::class,'category'])->name('category');
        Route::post('/store-category',[CategoryController::class,'storeCategory'])->name('store.category');

        Route::get('/sub-category',[SubCategoryController::class,'subCategory'])->name('sub.category');
        Route::post('/store-sub-category',[SubCategoryController::class,'storeSubCategory'])->name('store.sub.category');

        Route::get('/course',[CourseController::class,'viewCourse'])->name('view.course');
        Route::get('/add-course',[CourseController::class,'addCourse'])->name('add.course');
        Route::get('/add-course-content',[CourseController::class,'addCourseContent'])->name('add.course.content');
        Route::post('/course',[CourseController::class,'storeCourse'])->name('store.course');

    });
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
