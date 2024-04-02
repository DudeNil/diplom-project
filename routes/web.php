<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'main'])->name('main');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/price', [PageController::class, 'price'])->name('price');

Route::get('/barbers', [PageController::class, 'barbers'])->name('barbers');

Route::get('/blog', [PageController::class, 'blog'])->name('blog');


Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');

Route::get('/signup', [PageController::class, 'signup'])->name('signup');
