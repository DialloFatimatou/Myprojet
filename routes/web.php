<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;


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
Route::get('client/shop',[ClientController::class,'shop']);
Route::get('client/cart',[ClientController::class,'cart']);
Route::get('client/register',[ClientController::class,'register']);
Route::get('client/signIn',[ClientController::class,'signIn']);
Route::get('client/checkout',[ClientController::class,'checkout']);

//admin
Route::get('/admin',[AdminController::class,'home']);
Route::get('/admin/addcategory',[AdminController::class,'addcategory']);
Route::get('/admin/categories',[AdminController::class,'categories']);
Route::get('/admin/addsliders',[AdminController::class,'addsliders']);
Route::get('/admin/sliders',[AdminController::class,'sliders']);
Route::get('/admin/addproduit',[AdminController::class,'addproduit']);
Route::get('/admin/produits',[AdminController::class,'produits']);
Route::get('/admin/orders',[AdminController::class,'orders']);

//Categories controller
Route::post('/admin/savecategories',[CategoriesController::class,'savecategories']);
Route::delete('admin/delete_category/{id}',[CategoriesController::class,'delete']);
