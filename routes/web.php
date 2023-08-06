<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\InformeController;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\BinformeController;
use App\Http\Controllers\DatatableController;
use App\Http\Controllers\EscritorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(['register' => true]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('docentes', DocenteController::class);


Route::resource('libros', LibroController::class);
Route::get('/',WelcomeController::class,function (){
    return view('welcome');})->name('welcome.index');

Route::get('libro',[BibliotecaController::class, 'index'])->name('libro.index');
Route::get('libro/{libro}',[BibliotecaController::class, 'show'])->name('biblioteca.show');
Route::get('buscar/',[BibliotecaController::class,'buscar'])->name('biblioteca.buscar');

Route::get('informe', [BinformeController::class, 'index'])->name('binforme.index');
Route::get('informe/{informe}',[BinformeController::class,'show'])->name('informe.show');
Route::get('search/',[BinformeController::class,'search'])->name('informe.search');


Route::resource('categorias', CategoriaController::class);


Route::resource('autors', AutorController::class);

Route::resource('informes', InformeController::class);
// USUARIOS Y ROLES 

Route::resource('usuarios', UsuarioController::class);
Route::resource('roles', RolesController::class);
Route::resource('perfil', PerfilController::class);
Route::resource('escritor', EscritorController::class);

Route::get('datatable/libro', [DatatableController::class, 'data'])->name('datatable.libro');
Route::get('/home', [HomeController::class, 'index'])->name('home');
