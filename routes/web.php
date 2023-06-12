<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

    Route::view('/', 'index');
    /* links do menu pricncipal */
    Route::view('dadospessoais', 'dadospessoais');
    Route::view('pag_ini', 'pag_ini');
    Route::view('dadoscurriculares', 'dadoscurriculares');
    Route::view('horario', 'horario');
    Route::view('pagamentos', 'pagamentos');
    Route::view('competicoes', 'competicoes');
    Route::view('avaliacoes', 'avaliacoes');
    Route::view('teste', 'teste');
    Route::post('/dadospessoais', [PersonalDataController::class, 'dadospessoa'])->name('dadospessoa');

require __DIR__.'/auth.php';
