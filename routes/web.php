<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use Gloudemans\Shoppingcart\Facades\Cart;
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

Route::get('/e-daral', [ProduitController::class, 'getProduit'])->name('tout-produit');
Route::get('/categorie/{id}', [ProduitController::class, 'getMouton'])->name("voir-categorie");
Route::get('/produit/{id}', [ProduitController::class, 'show'])->name("voir-produit"); 

// cart Route
Route::get('/panier', [CartController::class, 'index'])->name('cart.index');
Route::post('panier/ajouter', [CartController::class,'store'])->name('cart.store');
Route::put('panier/{rowId}', [CartController::class,'update'])->name('cart.update');
Route::delete('panier/{rowId}', [CartController::class, 'destroy'])->name('cart.destroy');

 Route::get('viderPanier', function (){
 Cart::destroy();
 });



      

 
