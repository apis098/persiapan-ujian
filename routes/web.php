<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\foodController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function(){
    Route::get('/food',[foodController::class,'index'])->name('food.index');
    // create
    Route::get('/create',[foodController::class,'create'])->name('food.create');
    Route::post('/store',[foodController::class,'store'])->name('food.store');
    // edit
    Route::get('/edit/{id}',[foodController::class,'edit'])->name('food.edit');
    Route::put('/update/{id}',[foodController::class,'update'])->name('food.update');
    // delete
    Route::delete('/destroy/{id}',[foodController::class,'destroy'])->name('food.destroy'); 
    
    Route::resource('category', categoryController::class);
});

