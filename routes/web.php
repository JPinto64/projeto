<?php

use App\Http\Controllers\AulaAlunoController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\CobrancaController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PersonalDataController;
use App\Http\Controllers\PagamentoController;
use App\Http\Controllers\CompeticaoController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\AlunoController;
use App\Models\Aluno;
use App\Http\Controllers\CompeticaoAlunoController;
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
use  \App\Http\Middleware\TutoresGroupAccessMiddleware;
use \App\Http\Middleware\AdministradoresGroupAccessMiddleware;
use App\Http\Controllers\CobrancasAlunoController;
=======
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
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
    //Route::view('/', 'index');

    /* links do menu principal */
    //Adicionado roteamento para pagina inicial (home)
    Route::view('home', 'home');
    Route::view('dadospessoais', 'dadospessoais');
    Route::view('pag_ini', 'pag_ini');
    Route::view('dadoscurriculares', 'dadoscurriculares');
    Route::view('horario', 'horario');
    Route::view('avaliacao', 'avaliacao');


    Route::get('dadospessoais', [PersonalDataController::class, 'index'])->name('dadospessoais');
    Route::post('/dadospessoais', [PersonalDataController::class, 'dadospessoa'])->name('dadospessoa');

    Route::get('/pagamento', [PagamentoController::class, 'index'])->name('pagamento');
    Route::post('/pagamento', [PagamentoController::class, 'efetuarPagamento'])->name('efetuar-pagamento');


    Route::get('/avaliacao', [AvaliacaoController::class, 'index'])->name('avaliacao');
    Route::post('/avaliacao', [AvaliacaoController::class, 'store'])->name('avaliacao.store');

//######################## Administradores
    Route::resource('tutores', TutorController::class)->parameters([
        'tutores' => 'tutor',
    ])->middleware('administradores.group.access');

    Route::resource('alunos', AlunoController::class)->parameters([
        'alunos' => 'aluno',
    ])->middleware('administradores.group.access');

    Route::resource('users', UserController::class)->parameters([
        'users' => 'user',
    ])->middleware('administradores.group.access');
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
    
    Route::resource('aulas', AulaController::class)->parameters([
        'aulas' => 'aula',
    ])->middleware([ \App\Http\Middleware\AulasAccessMiddleware::class]);
    
    Route::resource('cobrancas', CobrancaController::class)->parameters([
        'cobrancas' => 'cobranca',
    ])->middleware('administradores.group.access');
    
=======
>>>>>>> Stashed changes

    Route::resource('aulas', AulaController::class)->parameters([
        'aulas' => 'aula',
    ]);//->middleware([App\Http\Middleware\AdministradoresGroupAccessMiddleware::class,TutoresGroupAccessMiddleware::class]);


    Route::resource('cobrancas', CobrancaController::class)->parameters([
        'cobrancas' => 'cobranca',
    ])->middleware('administradores.group.access');

<<<<<<< Updated upstream
=======
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
    Route::resource('competicoes', CompeticaoController::class)->parameters([
        'competicoes' => 'competicao',
    ])->middleware('administradores.group.access');
    ;
<<<<<<< Updated upstream

=======
<<<<<<< HEAD
    
=======

>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
//######################## Alunos
    Route::resource('aulasalunos', AulaAlunoController::class)->parameters([
        'aulasalunos' => 'aulaaluno',
    ])->middleware('alunos.group.access');
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
    
    Route::resource('competicoesalunos', CompeticaoAlunoController::class)->parameters([
        'competicoesalunos' => 'competicaoaluno',
    ])->middleware('alunos.group.access');
    
    Route::get('/cobrancas-aluno', [CobrancasAlunoController::class, 'index'])->name('cobrancas-aluno')->middleware('alunos.group.access');
    
    Route::get('/', [HomePageController::class, 'index']);
    
=======
>>>>>>> Stashed changes

    Route::resource('competicoesalunos', CompeticaoAlunoController::class)->parameters([
        'competicoesalunos' => 'competicaoaluno',
    ])->middleware('alunos.group.access');


    Route::get('/', [HomePageController::class, 'index']);

<<<<<<< Updated upstream
=======
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
   /* //Pagina inicial redirecionada para formulario de dados pessoais
    Route::get('/', function () {
        return redirect()->route('dadospessoais');
    });
*/
    Route::get('/avaliacao-tecnica', function () {
        return view('avaliacao.tecnica');
    })->name('avaliacao-tecnica');

    Route::get('/avaliacao-fisica', function () {
        return view('avaliacao.fisica');
    })->name('avaliacao-fisica');

    Route::get('/avaliacao-desempenho', function () {
        return view('avaliacao.desempenho');
    })->name('avaliacao-desempenho');




 /*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});



require __DIR__.'/auth.php';
