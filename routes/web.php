<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/test1', function () {
    return view('welcome');
});

Route::post('/test1', HomeController::class.'@Webhook');
Route::post('/test2', HomeController::class.'@Webhook2');

