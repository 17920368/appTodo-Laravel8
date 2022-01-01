<?php

use App\Http\Controllers\TodosController;
use App\Http\Controllers\TodosController2;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/todo', function () {
//     return view('Todo.index');
// })->name('todo');

// Route::post('/todos', [TodosController::class, 'store'])->name('todos');
Route::resource('todos', TodosController2::class);