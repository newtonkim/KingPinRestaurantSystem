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

Route::get('/', [HomeController::class, 'index']);
Route::get('/users', [AdminController::class, 'user']);
Route::get('/foodmenu', [AdminController::class, 'foodmenu']);
Route::post('/uploadfood', [AdminController::class, 'upload']);
Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);
Route::get('/deletemenu/{id}', [AdminController::class, 'deletemenu']);
Route::post('/update/{id}', [AdminController::class, 'update']);
Route::post('/reservation', [AdminController::class, 'reservation']);
Route::get('/viewreservation', [AdminController::class, 'viewreservation']);
Route::get('/chef', [AdminController::class, 'chef']);
Route::post('/uploadchef', [AdminController::class, 'uploadchef']);
Route::get('/updatechef/{id}', [AdminController::class, 'updatechef']);
Route::get('/deletechef/{id}', [AdminController::class, 'deletechef']);
Route::post('/updatefoodchef/{id}', [AdminController::class, 'updatefoodchef']);
Route::get('/updatemenu/{id}', [AdminController::class, 'updatemenu']);
Route::get('/redirects', [HomeController::class, 'redirects']);
Route::post('/addcart/{id}', [HomeController::class, 'addcart']);
Route::get('/showcart/{id}', [HomeController::class, 'showcart']);
Route::get('/deletecart/{id}', [HomeController::class, 'deletecart']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
