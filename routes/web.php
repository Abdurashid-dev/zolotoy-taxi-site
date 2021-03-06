<?php

use App\Http\Controllers\FrontendController;
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

Route::get('/', [FrontendController::class, 'index']);
Route::post('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::view('/test', 'test');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
