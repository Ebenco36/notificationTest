<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\Http\Controllers\HomeController;
/**
 * Needed to do this here to avoid csrf token issue.
 * However, this could be avoided by adding endpoint 
 * to csrf middleware
 */
Route::post('/subscribe/{topic}', HomeController::class.'@Subscribe');