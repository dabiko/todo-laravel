<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/todo/create', [TodoController::class, 'store']);
Route::get('/todo/create', [TodoController::class, 'create'])->name('/todo/create');
Route::get('/todo', [TodoController::class, 'index'])->name('todo');
Route::get('/todo/edit', [TodoController::class, 'edit']);
Route::get('/todo/delete', [TodoController::class, 'delete']);

