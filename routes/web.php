<?php
use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Books\BooksController;


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

Route::get('/users', function () {
    return view('user/user');
});

Route::group(['prefix' => 'users'], function (){
    Route::get('/index',[UserController::class, 'index']);

});

Route::group(['prefix' => 'users'], function (){
    Route::get('/index/create',[UserController::class, 'create']);

});

Route::group(['prefix' => 'users'], function (){
    Route::get('/index/edit',[UserController::class, 'edit']);
});

Route::group(['prefix' => 'books'], function (){
    Route::get('/index',[UserController::class, 'edit']);
});

Route::get('/books',[BooksController::class,'index']);
Route::get('/books/create',[BooksController::class,'create']);
Route::post('/books/store',[BooksController::class,'store']);
Route::get('/books/edit',[BooksController::class,'edit']);



/*Route::get('/users', [UserController::class,'index']);*/




