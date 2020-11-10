<?php

use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     // return view('welcome');
// });

// @ = function
// Home
Route::get('/', [BasicController::class, 'home']);
// About
Route::get('about', [BasicController::class, 'about']);
// Service
Route::get('service', [BasicController::class, 'service']);
// Portfolio
Route::get('portfolio', [BasicController::class, 'portfolio']);
// Blog
Route::get('blog', [BasicController::class, 'blog']);
// Contact
Route::get('contact', [BasicController::class, 'contact']);

// Call Employee
Route::get('employees', [BasicController::class, 'employees']);
