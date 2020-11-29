<?php

use Illuminate\Support\Facades\Auth;
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
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('frontend.index');
    });
    Route::get('/film/show/{film}', [\App\Http\Controllers\FilmController::class, 'show'])->name('film.show');

    Route::post('/add/film', [\App\Http\Controllers\FilmController::class, 'store']);
    Route::post('/add/category', [\App\Http\Controllers\CategoryController::class, 'store']);
    Route::post('/add/comments/{id}', [\App\Http\Controllers\CommentController::class, 'store']);

    Route::get('/manage', [\App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Auth::routes();
