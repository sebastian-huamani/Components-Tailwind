<?php

use App\Http\Controllers\estilosController;
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


Route::get('/', [estilosController::class, 'index'])->name('index');
Route::get('/stats', [estilosController::class, 'stats'])->name('estilos.stats');
Route::get('/pricing', [estilosController::class, 'pricing'])->name('estilos.pricing');
Route::get('/table', [estilosController::class, 'table'])->name('estilos.table');

