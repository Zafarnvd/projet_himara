<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FrontController;
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
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/blog', [FrontController::class, 'blog']);
Route::post('/blog/search', [FrontController::class, 'search'])->name('article.search');
Route::get('/blog/search/tag/{id}', [FrontController::class, 'tagCategorie'])->name('article.tagCategorie');
Route::get('/blog/search/categorie/{id}', [FrontController::class, 'searchCategorie'])->name('article.categorie');
Route::get('/booking/form', [FrontController::class, 'booking/form']);
Route::get('/buttons', [FrontController::class, 'buttons']);
Route::get('/contact', [FrontController::class, 'contact']);
Route::get('/event/details', [FrontController::class, 'event/details']);
Route::get('/events', [FrontController::class, 'events']);
Route::get('/gallery', [FrontController::class, 'gallery']);
Route::get('/icons', [FrontController::class, 'icons']);
Route::get('/', [FrontController::class, 'index']);
Route::get('/loading', [FrontController::class, 'loading']);
Route::get('/page', [FrontController::class, 'page']);
Route::get('/rooms/list', [FrontController::class, 'roomlist']);
Route::post('/rooms/search', [FrontController::class, 'search'])->name('RoomSearch');
Route::get('/room/{id}', [FrontController::class, 'room']);
Route::get('/rooms/search/{id}/categorie', [FrontController::class, 'searchRoomCategorie'])->name('roomCategorie');
Route::get('/rooms/search/{id}/tags', [FrontController::class, 'tagRooms'])->name('tagRooms');
Route::get('/staff', [FrontController::class, 'staff']);
Route::get('/style/guide', [FrontController::class, 'style/guide']);

Route::prefix('dashboard')->group(function () {
    Route::get('/articles/index', [ArticleController::class, 'index'])->name('article.index');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('article.create');
    Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('article.edit');
    Route::post('/articles/store', [ArticleController::class, 'store'])->name('article.store');
    Route::put('/articles/{id}/update', [ArticleController::class, 'update'])->name('article.update');
    Route::delete('/articles/{id}/delete', [ArticleController::class, 'destroy'])->name('article.delete');
});

require __DIR__ . '/auth.php';
