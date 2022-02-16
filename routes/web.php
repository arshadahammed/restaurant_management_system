<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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



Route::get('/' ,[HomeController::class,'index']);
Route::get('/redirects' ,[HomeController::class,'redirects']);




Route::get('/users' ,[AdminController::class,'users']);
Route::get('/deletemenu/{id}' ,[AdminController::class,'deleteMenu']);
Route::get('/updateview/{id}' ,[AdminController::class,'updateView']);
Route::post('/update/{id}' ,[AdminController::class,'update']);
Route::get('/foodmenu' ,[AdminController::class,'foodMenu']);
Route::post('/uploadfood' ,[AdminController::class,'uploadFood']);
Route::get('/deleteuser/{id}' ,[AdminController::class,'deleteuser']);


Route::post('/reservation',[AdminController::class,'reservation']);
Route::get('/viewreservation',[AdminController::class,'viewReservation']);

Route::get('/viewchef',[AdminController::class,'viewchef']);
Route::post('/uploadchef',[AdminController::class,'uploadChef']);

Route::get('/updatechef/{id}',[AdminController::class,'updateChef']);
Route::post('/updatefoodchef/{id}',[AdminController::class,'updatefoodChef']);

Route::get('/deletechef/{id}',[AdminController::class,'deleteChef']);
Route::post('/addcart/{id}',[HomeController::class,'addCart']);
Route::get('/showcart/{id}',[HomeController::class,'showCart']);
Route::get('/remove/{id}',[HomeController::class,'remove']);

Route::post('/orderconfirm' ,[HomeController::class,'orderConfirm']);
Route::get('/orders' ,[AdminController::class,'orders']);
Route::get('/search' ,[AdminController::class,'search']);






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
