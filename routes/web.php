<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[ClientController::class,'home']);
Route::get('/shop',[ClientController::class,'shop']);
Route::get('/cart',[ClientController::class,'cart']);
Route::get('/register',[ClientController::class,'register']);
Route::get('/signIn',[ClientController::class,'signIn']);
Route::get('/checkout',[ClientController::class,'checkout']);

//admin
Route::get('/admin',[AdminController::class,'home']);
Route::get('/addcategory',[AdminController::class,'addcategory']);
Route::get('/categories',[AdminController::class,'categories']);
Route::get('/addsliders',[AdminController::class,'addsliders']);
Route::get('/sliders',[AdminController::class,'sliders']);
Route::get('/addproduit',[AdminController::class,'addproduit']);
Route::get('/produits',[AdminController::class,'produits']);
Route::get('/orders',[AdminController::class,'orders']);
