<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TestController;
use App\Models\User;
use App\Models\Vehicule;
use Illuminate\Support\Facades\Route;

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

Route::get('/about', function (){
    return view('about');
    //return view('layouts.app');
});


Route::get('/users', function (){
    return view('users', [
        'users' => User::all()
    ]);
});

Route::resource('vehicules', 'App\Http\Controllers\VehiculesController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test', [TestController::class,'index'])->middleware('auth');

Route::get('/nextquestion', [TestController::class,'nextQuestion']);

Route::get('/quiz/ajouter', [QuestionController::class,'create']);
Route::post('/quiz/ajouter', [QuestionController::class,'store']);
