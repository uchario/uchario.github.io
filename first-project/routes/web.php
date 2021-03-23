<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/app', [PagesController::class, 'app']);
Route::get('/posts', [PostsController::class, 'index']);

/*
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::view('/uche', []);


// Laravel 8 (New)
Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/products/about', [ProductsController::class, 'about']);

// Laravel 8 (Also New)
//Route::get('/products', 'App\Http\Controllers\ProductsController@index');

//Route::get('/products/{name}', [ProductsController::class, 'show'])->where//('name', '[0-9]+');


Route::get('/products/{name}/{id}', 
    [ProductsController::class, 'show'])->where([
        'name' => '[a-zA-z]+',
        'id' => '[0-9]+'
]);

*/

