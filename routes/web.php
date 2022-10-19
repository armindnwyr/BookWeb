<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\InformeController;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\UsuarioController;
use Spatie\Permission\Contracts\Role;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',[BibliotecaController::class, 'index']);

Auth::routes();

//--------------DOCENTE---------------------//

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('docente',[DocenteController::class,'index'])->name('docente.index');

Route::get('docente/create', [DocenteController::class, 'create'])->name('docente.create');

Route::get('docente/{docente}', [DocenteController::class, 'show'])->name('curso.show');

Route::post('docente',[DocenteController::class,'store'])->name('docente.store');

Route::get('docente/{docente}/edit',[DocenteController::class,'edit'])->name('docente.edit');

Route::put('docente/{docente}',[DocenteController::class,'update'])->name('docente.update');

Route::delete('docente/{docente}',[DocenteController::class,'destroy'])->name('docente.destroy');


//--------------LIBRO---------------------//

Route::get('libro',[LibroController::class,'index'])->name('libro.index');

Route::get('libro/create', [LibroController::class, 'create'])->name('libro.create');

Route::get('libro/{libro}', [LibroController::class, 'show'])->name('libro.show');

Route::post('libro',[LibroController::class,'store'])->name('libro.store');

Route::get('libro/{libro}/edit',[LibroController::class,'edit'])->name('libro.edit');

Route::put('libro/{libro}',[LibroController::class,'update'])->name('libro.update');

Route::delete('libro/{libro}',[LibroController::class,'destroy'])->name('libro.destroy');


Route::get('biblioteca',[BibliotecaController::class, 'index']);


//--------------CATEGORIA---------------------//

// Route::get('categoria',[CategoriaController::class,'index'])->name('categoria.index');

// Route::get('categoria/create',[CategoriaController::class,'create'])->name('categoria.create');

// Route::get('categoria/{show}',[CategoriaController::class,'show'])->name('categoria.show');

// Route::post('categoria',[CategoriaController::class,'store'])->name('categoria.store');

// Route::get('categoria/{categoria}/edit',[CategoriaController::class,'edit'])->name('categoria.edit');

// Route::put('categoria/{categoria}',[CategoriaController::class,'update'])->name('categoria.update');

// Route::delete('categoria/{categoria}',[CategoriaController::class,'destroy'])->name('categoria.destroy');

Route::resource('categorias', CategoriaController::class);

//--------------AUTOR---------------------//

Route::get('autor',[AutorController::class,'index'])->name('autor.index');

Route::get('autor/create',[AutorController::class,'create'])->name('autor.create');

Route::get('autor/{show}',[AutorController::class,'show'])->name('autor.show');

Route::post('autor',[AutorController::class,'store'])->name('autor.store');

Route::get('autor/{autor}/edit',[AutorController::class,'edit'])->name('autor.edit');

Route::put('autor/{autor}',[AutorController::class,'update'])->name('autor.update');

Route::delete('autor/{autor}',[AutorController::class,'destroy'])->name('autor.destroy');


//--------------INFORME---------------------//

Route::get('informe',[InformeController::class,'index'])->name('informe.index');

Route::get('informe/create',[InformeController::class,'create'])->name('informe.create');

Route::get('informe/{show}',[InformeController::class,'show'])->name('informe.show');

Route::post('informe',[InformeController::class,'store'])->name('informe.store');

Route::get('informe/{informe}/edit',[InformeController::class,'edit'])->name('informe.edit');

Route::put('informe/{informe}',[InformeController::class,'update'])->name('informe.update');

Route::delete('informe/{informe}',[InformeController::class,'destroy'])->name('informe.destroy');

Route::resource('usuarios', UsuarioController::class);