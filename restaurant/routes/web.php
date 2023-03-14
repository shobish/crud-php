<?php

use App\Http\Controllers\restoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/", [restoController::class, 'index']);
Route::get("/list", [restoController::class, 'list']);
Route::view("/add", "add");
Route::view("/edit", "edit");
Route::post("/add", [restoController::class, 'add']);
Route::get("edit/{id}", [restoController::class, 'edit']);
Route::get("delete/{id}", [restoController::class, 'delete']);
