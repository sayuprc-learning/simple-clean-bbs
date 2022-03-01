<?php

use App\Http\Controllers\BbsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bbs', [BbsController::class, 'index']);

Route::post('/bbs/create', [BbsController::class, 'create']);

Route::get('/bbs/{bbs_id}', [BbsController::class, 'show']);

Route::post('/bbs/add', [BbsController::class, 'addComment']);