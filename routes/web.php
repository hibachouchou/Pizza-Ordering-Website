<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\UserController;
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

// Public routes accessible without authentication
Route::middleware(['guest'])->group(function () {

    Route::get('/login', function () {
        return view('pages.login');
    })->name('login');

    Route::get('/register', function () {
        return view('pages.register');
    });
});

// Admin Authentication
Route::post('/register_admin', [UserController::class, 'register_admin']);
Route::post('/login_admin', [UserController::class, 'login_admin']);


//public
Route::get('/', [PizzaController::class, 'index']);
Route::get('/create_order/{id}', [PizzaController::class, 'show_pizza_details']);
Route::post('/', [PizzaController::class, 'create_order']);



// Authenticated routes
Route::middleware(['auth'])->group(function () {

// Protected routes for authenticated users
Route::get('/dashboard', [PizzaController::class, 'show_orders_list']);
Route::get('/order_details/{id}', [PizzaController::class, 'show_order_details']);
Route::delete('/order/{id}', [PizzaController::class, 'destroy_order']);

// Logout
Route::post('/logout', [UserController::class, 'logout']);
});