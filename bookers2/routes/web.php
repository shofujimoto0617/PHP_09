<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/user/{id?}', [UserController::class, 'Show'])->name('user.show');

Route::get('/users', [UserController::class, 'Index'])->name('user.index');

Route::post('/book/create', [BookController::class, 'Create'])->name('book.create');

Route::get('/books', [BookController::class, 'Index'])->name('book.index');

Route::get('/book/{id?}', [BookController::class, 'Show'])->name('book.show');

Route::get('/book/{id?}/edit', [BookController::class, 'Edit'])->name('book.edit');

Route::post('/book/update/{id?}', [BookController::class, 'Update'])->name('book.update');

Route::get('/book/delete/{id?}', [BookController::class, 'Delete'])->name('book.delete');
