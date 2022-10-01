<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DataOfIssueController;
use App\Http\Controllers\GenerController;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\ShelfController;
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

Route::get('/author', [AuthorController::class, 'index']);
Route::post('/author', [AuthorController::class, 'store']);

Route::get('/book', [BookController::class, 'index']);
Route::post('/book', [BookController::class, 'store']);

Route::get('/data-of-issue', [DataOfIssueController::class, 'index']);
Route::post('/data-of-issue', [DataOfIssueController::class, 'store']);

Route::get('/gener', [GenerController::class, 'index']);
Route::post('/gener', [GenerController::class, 'store']);

Route::get('/shelf', [ShelfController::class, 'index']);
Route::post('/shelf', [ShelfController::class, 'store']);

Route::get('/reader', [ReaderController::class, 'index']);
Route::post('/reader', [ReaderController::class, 'store']);
