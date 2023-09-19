<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Models\Car;
use App\Http\Controllers\MessageController;

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

Route::get('register',[AuthController ::class, 'clientRegister']);
Route::post('register',[AuthController ::class, 'clientStore'])->name('register');

Route::get('login',[AuthController ::class, 'loginPage']);
Route::post('login',[AuthController ::class, 'loginUser'])->name('login');

Route::get('logout', [AuthController::class, 'doLogout'])->name('logout');

Route::get('AjouterCar',[CarController ::class, 'AjoutCompagny']);
Route::post('AjouterCar',[CarController ::class, 'traiterFormulaire'])->name('traiterFormulaire');

Route::get('admin',[HomeController ::class, 'adminPage'])->name('admin');
Route::get('Liste_taches',[HomeController ::class, 'listePage'])->name('liste');
Route::get('admin/reservations-en-attente', [HomeController::class, 'listReservations'])
    ->name('admin.reservations.en-attente');


Route::get('reservation/{id}',[ReservationController::class, 'reservationPage'])->name('reserve');
Route::post('reservation.store',[ReservationController::class, 'traiteReservation'])->name('test');

Route::get('/',[HomeController ::class, 'accueilPage'])->name('home');

Route::get('home.clientPage',[HomeController ::class, 'clienPage'])->name('client');

Route::get("message", [MessageController ::class, 'formMessageGoogle']);
Route::post("message", [MessageController ::class, 'sendMessageGoogle'])->name('send.message.google');
