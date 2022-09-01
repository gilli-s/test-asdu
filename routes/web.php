<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

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


Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/test', [MyController::class, 'show_tests'])->middleware(['auth'])->name('test');;
Route::get('/test/{id}', [MyController::class, 'show_question']);

//Маппинг на функцию обработки результатов теста


Route::get('/', function () {
    return view('welcome');
})->middleware(['auth'])->name('dashboard');




require __DIR__.'/auth.php';
