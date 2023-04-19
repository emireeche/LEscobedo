<?php

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

Route::get('/', [App\Http\Controllers\PaginasController::class, 'index'])->name('user.index');
//Route::get('/welcome',[App\Http\Controllers\DetalleServicio::class,'index'])->name('user.index');



Auth::routes();


Route::resource('/llantas', App\Http\Controllers\LlantaController::class);      
Route::resource('/marcas', App\Http\Controllers\MarcaController::class);
Route::resource('/vehiculos', App\Http\Controllers\VehiculoController::class);
Route::resource('/medidas', App\Http\Controllers\MedidaController::class);
Route::resource('/tipousuarios', App\Http\Controllers\TipousuarioController::class);
Route::resource('/empleados', App\Http\Controllers\EmpleadoController::class);
Route::resource('/usuarios', App\Http\Controllers\UsuarioController::class);
Route::resource('/servicios', App\Http\Controllers\ServicioController::class);
Route::resource('/rodadas', App\Http\Controllers\RodadaController::class);
Route::resource('/Paginas', App\Http\Controllers\PaginasController::class);





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
