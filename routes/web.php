<?php

use App\Http\Controllers\clientesController;
use App\Http\Controllers\dashbordController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\projetosController;
use App\Http\Controllers\rastreioController;
use App\Models\projeto;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

    return view('login.login');
  
    });

Route::prefix('rastreio')->group(function(){
    Route::get('/', [rastreioController::class, 'index'])->name('rastreio-index');
    Route::post('/', [rastreioController::class, 'buscar'])->name('rastreio-buscar');
});

Route::prefix('dashbord')->group(function(){
    Route::get('/', [dashbordController::class, 'index'])->name('dashbord-index');
    
});


Route::prefix('projeto')->group(function(){
    Route::get('/', [projetosController::class, 'index'])->name('projeto-index');
    Route::get('/create', [projetosController::class, 'create'])->name('projeto-create');
    Route::post('/', [projetosController::class, 'store'])->name('projeto-store');
    Route::delete('/{id}', [projetosController::class, 'delete'])->where('id', '[0-9]+')->name('projeto-delete');
    Route::get('/{id}/edit', [projetosController::class, 'edit'])->where('id', '[0-9]+')->name('projeto-edit');
    Route::put('/{id}', [projetosController::class, 'update'])->name('projeto-update');
});


Route::prefix('cliente')->group(function(){
    Route::get('/', [clientesController::class, 'index'])->name('cliente-index');
    Route::get('/create', [clientesController::class, 'create'])->name('cliente-create');
    Route::get('/{id}/edit', [clientesController::class, 'edit'])->where('id', '[0-9]+')->name('cliente-edit');
    Route::post('/', [clientesController::class, 'store'])->name('cliente-store');
    Route::put('/{id}', [clientesController::class, 'update'])->name('cliente-update');
    Route::delete('/{id}', [clientesController::class, 'delete'])->where('id', '[0-9]+')->name('cliente-delete');
});



