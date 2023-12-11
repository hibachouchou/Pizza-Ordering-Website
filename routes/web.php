<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

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




Route::get('/', [PizzaController::class, 'index']);
Route::get('/create_order/{id}', [PizzaController::class, 'show_pizza_details']);
Route::post('/', [PizzaController::class, 'create_order']);
Route::get('/dashboard', [PizzaController::class, 'show_orders_list']);
Route::get('/order_details/{id}', [PizzaController::class, 'show_order_details']);
Route::delete('/order/{id}', [PizzaController::class, 'destroy_order']);

Route::get('/login', function () {
    return view('pages.login');
});


