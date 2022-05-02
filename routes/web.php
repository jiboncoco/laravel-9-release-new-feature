<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

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

// grouping route custom from controller or route excluding controller resource
Route::controller(PostController::class)->group(function() {
    Route::get('posts', 'index');
    Route::get('posts/{id}', 'show')->name('posts.show');
});

// Route::resource('posts', PostController::class);
