<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PasswordChangeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('home');

require __DIR__.'/auth.php';

Route::group(['middleware'=>['auth', 'verified']],function(){
    Route::get('/dashboard', fn ()=>view('dashboard'))->name('dashboard');
    Route::get('/profile/{tab?}',[ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile/update/{id}',[ProfileController::class, 'update'])->name('profile.update');
    Route::put('/password_change',[PasswordChangeController::class, 'update'])->name('auth.password_change');
    // Route::get('/tasks',[TaskController::class, 'index'])->name('tasks.index');
    // Route::get('/tasks/create',[TaskController::class, 'create'])->name('tasks.create');
    // Route::post('/tasks/store',[TaskController::class, 'store'])->name('tasks.store');
    // Route::get('/tasks/{task}/edit',[TaskController::class, 'edit'])->name('tasks.edit');
    // Route::put('/tasks/{task}',[TaskController::class, 'update'])->name('tasks.update');
    // Route::delete('/tasks/{task}',[TaskController::class, 'destroy'])->name('tasks.destroy');
    Route::resource('/tasks',TaskController::class);
});

