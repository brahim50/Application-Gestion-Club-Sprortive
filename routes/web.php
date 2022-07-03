<?php

use App\Http\Controllers\AdherentControllers;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResponsableController;

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
    return view('auth.login');
});
Route::get('/redirects',[HomeController::class,'index']);

Route::get('/adminEdit/{id}',[AdminController::class,'index']);

Route::post('edit',[AdminController::class,'update']);

Route::post('/' ,[AdminController::class ,'createTable'])->name('save.post');

Route::post('/redirects' ,[ResponsableController::class ,'savesTables'])->name('save');

Route::delete('/delete/User{id}' ,[AdminController::class ,'delete'])->name('user.delete');

Route::delete('/delete/Planning{id}' ,[ResponsableController::class ,'delete'])->name('planning.delete');

//Route::get('/edit/profil/{id}' ,[AdherentControllers::class ,'edit'])->name('user.edit');

//Route::post('/update/profil/{id}' ,[AdherentControllers::class ,'update'])->name('user.edit');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
