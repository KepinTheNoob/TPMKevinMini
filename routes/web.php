<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GenshinController;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('/create-char', [GenshinController::class, 'createChar']);
Route::post('/create-char1', [GenshinController::class, 'createChar1']);
Route::get('/read-char', [GenshinController::class, 'readChar']);
Route::get('/edit-char/{id}', [GenshinController::class, 'editChar']);
Route::patch('/update-char/{id}', [GenshinController::class, 'updateChar']);
Route::delete('/delete-char/{id}', [GenshinController::class, 'deleteChar']);

//Category
Route::get('/create-category', [CategoryController::class, 'createCategory']);
Route::post('/create-category1', [CategoryController::class, 'createCategory1']);