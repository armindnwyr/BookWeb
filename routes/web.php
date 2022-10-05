<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\LibroController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('docente',[DocenteController::class,'index'])->name('docente.index');

Route::get('docente/create', [DocenteController::class, 'create'])->name('docente.create');

Route::get('docente/{docente}', [DocenteController::class, 'show'])->name('curso.show');

Route::post('docente',[DocenteController::class,'store'])->name('docente.store');

Route::get('docente/{docente}/edit',[DocenteController::class,'edit'])->name('docente.edit');

Route::put('docente/{docente}',[DocenteController::class,'update'])->name('docente.update');

Route::delete('docente/{docente}',[DocenteController::class,'destroy'])->name('docente.destroy');

//-----------------------------------//

Route::get('libro',[LibroController::class,'index'])->name('libro.index');

Route::get('libro/create', [LibroController::class, 'create'])->name('libro.create');

Route::get('libro/{libro}', [LibroController::class, 'show'])->name('libro.show');

Route::post('libro',[LibroController::class,'store'])->name('libro.store');

Route::get('libro/{libro}/edit',[LibroController::class,'edit'])->name('libro.edit');

Route::put('libro/{libro}',[LibroController::class,'update'])->name('libro.update');

Route::delete('libro/{libro}',[LibroController::class,'destroy'])->name('libro.destroy');


