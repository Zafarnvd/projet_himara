<?php

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

require __DIR__ . '/auth.php';
