<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\AccueilController;

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

// Route::get('/', [AccueilController::class, 'accueil']);
Route::get('/', [App\Http\Controllers\AccueilController::class, 'accueil']);

Route::get('/route_test', [App\Http\Controllers\AccueilController::class, 'test'])->name('toto');

Route::resource('jeux_videos', App\Http\Controllers\JeuxVideoController::class);
/*
jeux_videos.index (get)
jeux_videos.create (get)
jeux_videos.store (post)
jeux_videos.show (get/{id})
jeux_videos.edit (get/{id})
jeux_videos.update (put-post / {id})
jeux_videos.destroy (delete / {id})
*/