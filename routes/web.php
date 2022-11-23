<?php

use App\Models\Article;
use App\Models\Fournisseur;
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

Route::post('/Boutique/Article',[Article::class,'store'])->name('article_store');
Route::post('/Boutique/fournisseur',[Fournisseur::class,'store'])->name('article_store');