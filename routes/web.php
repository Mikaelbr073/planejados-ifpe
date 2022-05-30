<?php

use App\Http\Controllers\clientesController;
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
Route::prefix('cliente')->group(function(){
    Route::get('/', [clientesController::class, 'index'])->name('cliente-index');
    Route::get('/create', [clientesController::class, 'create'])->name('cliente-create');
    Route::post('/', [clientesController::class, 'store'])->name('cliente-store');
});

Route::fallback(function(){
    return "Essa págima não existe";
});


