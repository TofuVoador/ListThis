<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemListController;
use App\Http\Controllers\ItemController;
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
    return redirect('/home');
});

Route::get('/home', HomeController::class);

Route::get('/lists', ItemListController::class);
Route::get('/lists/add', [ItemListController::class, 'add']);
Route::post('/lists/add', [ItemListController::class, 'store']);

Route::get('/lists/{id}', [ItemController::class, 'listar']);
Route::get('/lists/{id}/add', [ItemController::class, 'add']);
Route::post('/lists/{id}/add', [ItemController::class, 'store']);