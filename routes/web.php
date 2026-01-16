<?php
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\SetLanguageController;
Route::get('/', function () {
    return view('main');
});

Route::view('/', 'main') ->name('main');
Route::view("/about", "about");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource("alumnos", AlumnoController::class) ->middleware('auth');
Route::get('/alumnos/create', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::post('/alumnos', [AlumnoController::class, 'store'])->name('alumnos.store');
Route::resource("proyectos", ProyectoController::class);


Route::get('lang/{lang}', SetLanguageController::class)->name('set_lang');