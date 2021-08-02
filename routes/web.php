<?php

use App\Models\User;
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
   // return view('welcome');

    return "<h1>Welcome!</h1>";
});

Route::get('/about', function (){
    //return view('about');
    return view('layouts.app');
});

Route::get('/vehicules/{id}', function ($id){
    $vehicule = \App\Models\Vehicule::find($id);
    return $vehicule->matricule;
});

Route::get('/users', function (){
    return view('users', [
        'users' => User::all()
    ]);
});

Route::resource('vehicules', 'App\Http\Controllers\VehiculesController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
