<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', [StudentController::class,"list"]);

Route::get('/add_student', [StudentController::class, "index"]);
Route::post('/add_student', [StudentController::class, "store"]);

Route::get('/edit_details/{id}', [StudentController::class,"edit_view"]);
Route::post('/edit_details/{id}', [StudentController::class,"edit_store"]);

Route::get('/delete_details/{id}', [StudentController::class,"destroy"]);

Route::get('/', [StudentController::class, 'getData']);
