<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FournisseurController;
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
    return view('accueil');
});

Route::resource('article',ArticleController::class);
Route::resource('fournisseur',FournisseurController::class);
