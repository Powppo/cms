<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;



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

//JOBSHEET 2
//Practicum 1
Route::get('/', function () {
    echo "Hi, Welcome to Laravel ";
});

Route::get('/about', function () {
    echo "2041720247 <br> ";
    echo "Muhammad Afrizal Hamimudin <br> ";
    echo "TI-2I ";
});

Route::get('/articles/{id}', function ($id) {
    echo "This is Articles Pages with ID: ".$id;
});

//Practicum 2
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);
