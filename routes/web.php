<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\NewsCommentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return redirect()->route('news');
});

Route::get('locale/{lang}', [LocaleController::class , 'setLocale']);

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'loginView'])->name('login-view');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/register', [AuthController::class, 'registerView'])->name('register-view');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
});

Route::middleware('auth:student')->group(function () {
    Route::get('/news', [NewsController::class, 'index'])->name('news');

    Route::post('/news/{news}/comment', [NewsCommentController::class, 'store'])->name('news.comment');
    Route::delete('/comment/{id}', [NewsCommentController::class, 'destroy'])->name('comment.delete');

    Route::get('/profile', [StudentController::class, 'profile'])->name('profile');
    Route::post('/profile', [StudentController::class, 'updateProfilePicture'])->name('update-profile-picture');
});

//Route::get('/news', [NewsController::class, 'index'])->name('news')->middleware('auth:student');
//Route::post('/news/{news}/comment', [NewsCommentController::class, 'store'])->name('news.comment');
//
//Route::get('/profile', [StudentController::class, 'profile'])->name('profile');
//Route::post('/profile', [StudentController::class, 'updateProfilePicture'])->name('update-profile-picture');
