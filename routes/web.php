<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MovieCRUDController;
use App\Http\Controllers\VideogameController;
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

Route::get('/', [IndexController::class, 'index']);

// www.laravel.test/awards
Route::get('/awards', [AwardController::class, 'index']);

Route::get('/top-rated-movies', [MovieController::class, 'topRated']);

Route::get('/top-rated-games', [VideogameController::class, 'topRated']);

Route::get('/movies/shawshank-redemption', [MovieController::class, 'shawshank']);

Route::get('/movies', ['App\Http\Controllers\MovieController', 'index']);

Route::get('/search', [MovieController::class, 'search']);

Route::get('/about-us', [AboutController::class, 'aboutUs']);

// Route::get('/movie/{movie_id}', [MovieController::class, 'method']);

// storing new data
// Route::post('/movies', [MovieController::class, 'store']);

// put/patch
// Route::put('/movies/{movie}', [MovieController::class, 'update']);


// MOVIE CRUD - Laravel Resource Controllers

Route::get('/movies/create', [MovieCRUDController::class, 'create'])->name('movies.create');
Route::post('movies', [MovieCRUDController::class, 'store'])->name('movies.store');
