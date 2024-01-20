<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\AuthorController;

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
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('products', function () {
    return view('products');
});

Route::get('about', function () {
    return view('about');
});

// Route::get('/books/create', 'App\Http\Controllers\BookController@create');
// Route::get('/books/{id}/edit', 'App\Http\Controllers\BookController@edit');
Route::get('/books/{id}/delete', 'App\Http\Controllers\BookController@destroy');
Route::get('/authors/{id}/delete', 'App\Http\Controllers\AuthorController@destroy');

//route to resources, i.e to Book Controller
Route::resource('books', BookController::class);

//route to resources, i.e to Movie Controller
Route::resource('movies', MovieController::class);

Route::resource('loans', LoanController::class);

Route::resource('authors', AuthorController::class);

//routes to methods in user controller
Route::get('/users', 'App\Http\Controllers\UserController@index');
Route::get('/users/{userId}', 'App\Http\Controllers\UserController@show');

//Defining prefixes in routing

Route::prefix('hello')->group(function (){
    Route::get('/world', function (){
    echo 'Hello world';
    });
    Route::get('/{name?}/{age?}', function (string $name = "Unknown", int $age = null){
        echo "Welcome, $name. ";
        if (is_null($age)) {
            echo "You did not enter the age ";
        } else {
            echo " You are $age years old!";
        }       
    });
});

