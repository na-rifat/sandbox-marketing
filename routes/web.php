<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AuthController;


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
use Illuminate\Support\Facades\Route;

// Frontend routes
Route::get( '/', [FrontendController::class, 'index'] )->name( 'home' );
Route::get( 'services', [FrontendController::class, 'services'] )->name( 'services' );
Route::get( 'about', [FrontendController::class, 'about'] )->name( 'about' );
Route::get( 'contact-us', [FrontendController::class, 'contact_us'] )->name( 'contact_us' );
Route::get( 'shop', [FrontendController::class, 'shop'] )->name( 'shop' );
Route::get( 'blog', [FrontendController::class, 'blog'] )->name( 'blog' );
Route::get( 'login', [FrontendController::class, 'login'] )->name( 'login' );
Route::get( 'register', [FrontendController::class, 'register'] )->name( 'register' );


// Auth Routes


Route::post( 'login', [AuthController::class, 'login'] )->name( 'user-login' );
Route::post( 'register', [AuthController::class, 'register'] )->name( 'user-registration' );

