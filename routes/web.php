<?php


use App\Models\Fournisseur;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FournisseurController;
use App\Models\Article;
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

Route::post('/Boutique/Article',[ArticleController::class,'store'])->name('article_store');
Route::post('/Boutique/fournisseur',[FournisseurController::class,'store'])->name('article_store');
Route::get('Boutique/Article',[ArticleController::class,'index'])->name('article_index');
