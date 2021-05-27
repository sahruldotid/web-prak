<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConsultantController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;


Route::get('/',[PublicController::class, 'index'])->name('home');



Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    
    Route::middleware(['user'])->group(function () {
        Route::get('/user/dashboard',[UserController::class, 'index'])->name("user_dashboard");
        Route::get('/user/chat',[UserController::class, 'chat'])->name("user_chat");
        Route::get('/user/transaction',[UserController::class, 'transaction'])->name("user_transaction");
        Route::get('/user/edit',[UserController::class, 'edit'])->name("user_edit");
        Route::post('/user/edit',[UserController::class, 'update'])->name("user_update");
        
    });

    Route::middleware(['consultant'])->group(function () {
        Route::get('/consultant/dashboard',[ConsultantController::class, 'index'])->name('consultant_dashboard');
        Route::get('/consultant/chat',[ConsultantController::class, 'chat'])->name('consultant_chat');
        Route::get('/consultant/transaction',[ConsultantController::class, 'transaction'])->name('consultant_transaction');
        Route::get('/consultant/edit',[ConsultantController::class, 'edit'])->name('consultant_edit');
        Route::post('/consultant/edit',[ConsultantController::class, 'update'])->name("consultant_update");
    });
    

    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/dashboard',[AdminController::class, 'index'])->name('admin_dashboard');
        Route::get('/admin/customer',[AdminController::class, 'customer'])->name('admin_customer');
        Route::get('/admin/consultant',[AdminController::class, 'consultant'])->name('admin_consultant');
        Route::get('/admin/edit',[AdminController::class, 'edit'])->name('admin_edit');
    });

});

require __DIR__.'/auth.php';
