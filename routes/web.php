<?php
use App\Http\Controllers\EscolaController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\TurmaController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Aluno;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('alunos', action :function(){
    
    $lista=\App\Models\User:: all();
    
    return view ('alunos', compact('lista'));

});


Route::get('/alunos', [AlunoController::class, 'index'])->name('alunos.index');
//Route::get('/alunos/cadastrar', [AlunoController::class, 'create'])->name('alunos.create');
//Route::post('/alunos', [AlunoController::class, 'store'])->name('alunos.store');


Route::resource('escolas', EscolaController::class);
Route::resource('alunos', AlunoController::class);
Route::resource('professores', ProfessorController::class);
Route::resource('turmas', TurmaController::class);

