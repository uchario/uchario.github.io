<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PostsController;

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

Route::view('/', 'welcome');


Route::get('/uche/{id?}', function ($id = null) {
    return 'Uchechukwu' . $id;
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// URL to the form i.e. http://127.0.0.1:8000/create
Route::get('/create', [FormController::class, 'create']);
Route::post('/store', [FormController::class, 'store']);

Route::get('/posts', [PostsController::class, 'index']);