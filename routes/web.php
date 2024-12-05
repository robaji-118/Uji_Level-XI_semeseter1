<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your applicationmain. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the 'web' middleware group. Make something great!
|
*/

Route::get( '/home', [ PageController::class, 'home' ] )->name ( 'home' );
Route::get( '/about', [ PageController::class, 'about' ] )->name ( 'about' );
Route::get( '/produk', [ ProdukController::class, 'index' ] )->name ( 'produk' );
// Route::get( '/cart', [ PageController::class, 'cart' ] )->name ( 'cart' );
Route::get( '/kontak', [ PageController::class, 'contact' ] );
// Route::get( '/keranjang', [ CartController::class, 'index' ] )->name ( 'index' );
// Route::get( '/contact', [ PageController::class, 'contact' ] )->name ( 'contact' );

Route::prefix('cart')->group(function () {
     Route::get('/', [CartController::class,'index']);
    Route::post('store', [CartController::class,'store']);
    Route::get('delete/{id}', [CartController::class,'delete']);
    Route::get('edit/{id}', [CartController::class, 'edit'])->name ('edit');
    Route::post('update', [CartController::class,'update']);

    // Route::get('edit/{id}', [ContactController::class,'edit']);

    // Route::get('store', [ContactController::class,'store']);
});


// add produk ke keranjang
