<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EleveurController;
use App\Http\Controllers\ProduitController;

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
Route::get('/e-daral', function () {
    return view('daral');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/produits',  [ProduitController::class, 'index']);
Route::get('/ajoutProduit',  [ProduitController::class, 'create']);
Route::post('/ajoutProduit',  [ProduitController::class, 'store'])->name('ajoutProduit');
Route::get('/modifierProduit/{id}',  [ProduitController::class, 'edit']);
Route::put('/updateProduit/{id}',  [ProduitController::class, 'update']);
Route::get('/deleteProduit/{id}', [ProduitController::class, 'delete']);

Route::get('/ajoutEleveur',  [EleveurController::class, 'create']);
Route::post('/ajoutEleveur',  [EleveurController::class, 'store'])->name('ajoutEleveur');
      

 
