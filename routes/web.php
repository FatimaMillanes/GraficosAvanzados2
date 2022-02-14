<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VariantesCovidController;

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
    return ('welcome');

});

Route::get('/variantes',[VariantesCovidController::class,'index'])-> name('variantes.index');
Route::get('/variantes/create',[VariantesCovidController::class,'create'])-> name('variantes.create');
Route::get('/variantes/store',[VariantesCovidController::class,'store'])-> name('variantes.store');
Route::get('/variantes/{id}/edit',[VariantesCovidController::class,'edit'])->name('variantes.edit');




