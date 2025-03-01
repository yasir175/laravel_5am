<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task_Controller;
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
Route::get('/', [Task_Controller::class, 'index']);
Route::resource('tasks', Task_Controller::class);
Route::get('/tasks/create', [Task_Controller::class, 'create'])->name('tasks.create');
