<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RdvController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UsersController;
use App\Models\User;
use App\Models\Vehicule;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', function (){
    return view('about');
});


Route::get('/users', [UsersController::class, 'index'])->middleware('auth','hasRole:admin');

Route::resource('vehicules', 'App\Http\Controllers\VehiculesController');

Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/test', [TestController::class,'index'])->middleware('auth','hasRole:userpaid');


Route::post('/nextquestion', [TestController::class,'nextQuestion']);

Route::get('/quiz/ajouter', [QuestionController::class,'create'])->middleware('auth','hasRole:admin');
Route::post('/quiz/ajouter', [QuestionController::class,'store'])->middleware('auth','hasRole:admin');;
Route::get('/quiz/results', [TestController::class,'results']);
Route::get('/quiz/list', [QuestionController::class,'index'])->middleware('auth', 'hasRole:admin');
Route::delete('/questions/{id}', [QuestionController::class,'destroy'])->middleware('auth', 'hasRole:admin');

Route::get('/rdv/ajouter', [RdvController::class,'ajouter'])->middleware('auth', 'hasRole:moniteur');
Route::post('/rdv/ajouter', [RdvController::class,'store'])->middleware('auth', 'hasRole:moniteur');
Route::get('/rdv/list', [RdvController::class,'index'])->middleware('auth','hasRole:userpaid');
Route::post('/rdv/reserver/{id}', [RdvController::class, 'reserver']);
Route::get('/rdv/schedule', [RdvController::class, 'calendrier'])->middleware('auth', 'hasRole:moniteur');

Route::get('/offers',[PaymentController::class, 'index'])->middleware('auth');
Route::get('/paiement',[PaymentController::class, 'paymentmethod'])->middleware('auth');
Route::post('/paiment',[PaymentController::class, 'store'])->middleware('auth');

Route::get('/moniteur/ajouter', [UsersController::class, 'ajouter_moniteur'])->middleware('auth', 'hasRole:admin');
Route::post('/moniteur/ajouter', [UsersController::class, 'store_moniteur'])->middleware('auth', 'hasRole:admin');

Route::get('/parametres', [UsersController::class, 'parametres'])->middleware('auth');
Route::post('/parametres/updatepassword', [UsersController::class, 'update_password'])->middleware('auth');
Route::put('/parametres/updatedata', [UsersController::class, 'update_data'])->middleware('auth');


Route::post('/notifications',[NotificationsController::class, 'index'])->middleware('auth');
Route::post('/notifications/{id}',[NotificationsController::class, 'read'])->middleware('auth');

Route::post('/contactusemail', [NotificationsController::class, 'contactus']);
