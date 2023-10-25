<?php
use App\Http\Controllers\CommentsController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get(
    '/controller/shuffle',
    [CommentsController::class, 'shuffle']
);
Route::get(
    '/controller/morning',
    [CommentsController::class, 'morning']
);
Route::get(
    '/controller/afternoon',
    [CommentsController::class, 'afternoon']
);
Route::get(
    '/controller/evening',
    [CommentsController::class, 'evening']
);
Route::get(
    '/controller/night',
    [CommentsController::class, 'night']
);
Route::get(
    '/controller/{msg}',
    [CommentsController::class, 'freeword']
);
