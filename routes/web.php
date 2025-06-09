<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rota protegida (exemplo)
Route::get('dashboard', function () {
    return 'Bem-vindo ao painel!';
})->middleware('auth');

// Registro de usuário
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/welcome', function () {
    return view('welcome');
})->middleware('auth')->name('welcome');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Novo gitTeste de commit Ricardo.
// Criação de Projetos
Route::get('/projetos/create', [ProjectController::class, 'create'])->name('projetos.create');
Route::post('/projetos', [ProjectController::class, 'store'])->name('projetos.store');
Route::get('/projetos/{id}', [ProjectController::class, 'show'])->name('projetos.show');
