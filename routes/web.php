<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GymnasticsController;
use App\Http\Controllers\PersonalTrainerController;
use App\Http\Controllers\PartialSubscriptionController;
use App\Http\Controllers\FullSubscriptionContoller;
use App\Http\Controllers\ChatWithUsControllerController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exercises',[GymnasticsController::class ,'index'])->name('exercises.index');
Route::get('/exercises/create',[GymnasticsController::class ,'create'])->name('exercises.create')->middleware('is_admin');
Route::post('/exercises/create',[GymnasticsController::class ,'store'])->name('exercises.store');
Route::get('/exercises/show/{id}',[GymnasticsController::class ,'show'])->name('exercises.show');
Route::get('/chat',[ChatWithUsControllerController::class ,'index'])->name('chat.index');
Route::get('/partial',[PartialSubscriptionController::class ,'index'])->name('partial.index');
Route::get('/full',[PersonalTrainerController::class ,'index'])->name('full.index');
Route::get('/trainer/show/{id}',[PersonalTrainerController::class ,'show'])->name('trainer.show');


Route::get('/trainers',[PersonalTrainerController::class ,'index'])->name('trainers.index');
Route::get('/trainers/create',[PersonalTrainerController::class ,'create'])->name('trainers.create')->middleware('is_admin');
Route::post('/trainers/create',[PersonalTrainerController::class ,'store'])->name('trainers.store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


