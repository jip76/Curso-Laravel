<?php
use App\Http\Controllers\Dasbohard\CategoryController;
use App\Http\Controllers\Dasbohard\PostController;
use App\Models\Category;
use Illuminate\Routing\RouteGroup;
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

Route::resource('post',PostController::class);
Route::resource('category',CategoryController::class);