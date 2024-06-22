<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HistoryController;


Route::get('/',[HomeController::class, 'getHomePage'])->name('getHomePage');


Route::get('/home',[HomeController::class, 'getHomePage'])->name('getHomePage');


Route::get('/restaurant',[RestaurantController::class, 'getRestaurantPage'])->name('restaurant.getRestaurantPage');
Route::get('/restaurant/filter', [RestaurantController::class, 'filter'])->name('restaurant.filter');
Route::get('/restaurant-detail/{id}/detail',[DetailController::class, 'getDetailPage'])->name('getDetailPage');
Route::get('/restaurant-detail/{id}/menu',[DetailController::class, 'getMenuPage'])->name('getMenuPage');

Route::get('/restaurant-detail/{id}/reservation',[DetailController::class, 'getReservePage'])->name('getReservePage')->middleware('auth');
Route::post('/restaurant-detail/{id}/reservation', [DetailController::class, 'submitReservation'])->name('submitReservation');






Route::post('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('/login',[LoginController::class, 'getLoginPage'])->name('getLoginPage');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/signup',[LoginController::class, 'getSignupPage'])->name('getSignupPage');
Route::post('/signup',[LoginController::class, 'signup'])->name('signup');

Route::get('/account',[LoginController::class, 'getAccountPage'])->name('getAccountPage')->middleware('auth');
Route::post('/account',[LoginController::class, 'UpdateProfile'])->name('UpdateProfile')->middleware('auth');


Route::get('/history',[HistoryController::class, 'getHistoryPage'])->name('getHistoryPage')->middleware('auth');
Route::get('/history/{id}',[HistoryController::class, 'getHistoryDetailPage'])->name('getHistoryDetailPage')->middleware('auth');
Route::post('/history/{id}',[HistoryController::class, 'CancelReservation'])->name('CancelReservation')->middleware('auth');