<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CompanyProfile;
use App\Http\Controllers\Restaurant;



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


//Practicum 3
//1
Route::get('/', [CompanyProfile::class, 'index']);

//2
route::prefix('products')->group(function() {
    route::get('/product_1', function() {      
        return 'Product 1'; 
    });

    route::get('/product_2', function() {   
        return 'Product 2';    
    });

    route::get('/product_3', function() {   
        return 'Product 3';    
    });
});

//3
Route::get('/news/{name}', [CompanyProfile::class, 'news']);

//4
route::prefix('programs')->group(function() {
    route::get('/program_1', function() {      
        return 'Program 1'; 
    });

    route::get('/program_2', function() {   
        return 'Program 2';    
    });

    route::get('/program_3', function() {   
        return 'Program 3';    
    });
});

//5
Route::get('/aboutus', [CompanyProfile::class, 'aboutus']);

//JOBSHEET 3
route::get('home', function() {      
    return view ('homepage'); 
});

//JOBSHEET 4
Route::get('/', [Restaurant::class, 'index']);
