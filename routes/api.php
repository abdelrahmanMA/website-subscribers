<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\WebsitesController;
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

Route::post('/websites', [WebsitesController::class, 'store']);
Route::post('/posts', [PostsController::class, 'store']);
Route::post('/subscribers', [SubscriberController::class, 'store']);
