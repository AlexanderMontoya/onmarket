<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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


Route::get('/PanelAdministrativo', function () {
    return view('inicio.PanelAdministrativo');
})->middleware('auth');

Route::get('/grupo-onmarket', function () {
    return view('inicio.Grupo');
});



Route::get('/',[App\Http\Controllers\InicioController::class,'index'])->name('inicio.index');
Route::get('/home',[App\Http\Controllers\InicioController::class,'index']);
Route::resource('ver/producto',App\Http\Controllers\VistasVentaController::class);

Route::get('/categoria/abarrotes',[App\Http\Controllers\VistasVentaController::class,'abarrotes']);
Route::get('/categoria/frutas',[App\Http\Controllers\VistasVentaController::class,'frutas']);
Route::get('/categoria/verduras',[App\Http\Controllers\VistasVentaController::class,'verduras']);
Route::get('/categoria/carnes',[App\Http\Controllers\VistasVentaController::class,'carnes']);
Route::get('/categoria/lacteos',[App\Http\Controllers\VistasVentaController::class,'lacteos']);
Route::get('/categoria/cuidadoPersonal',[App\Http\Controllers\VistasVentaController::class,'cuidadoPersonal']);
Route::get('/categoria/panaderia',[App\Http\Controllers\VistasVentaController::class,'panaderia']);
Route::get('/categoria/limpieza',[App\Http\Controllers\VistasVentaController::class,'limpieza']);
Route::get('/categoria/bebidas',[App\Http\Controllers\VistasVentaController::class,'bebidas']);
Route::get('/categoria/kids',[App\Http\Controllers\VistasVentaController::class,'kids']);
Route::get('/categoria/libreria',[App\Http\Controllers\VistasVentaController::class,'libreria']);
Route::get('/categoria/bazar',[App\Http\Controllers\VistasVentaController::class,'bazar']);
Auth::routes();

Route::get('/carrito', [App\Http\Controllers\CarritoController::class, 'cart'])->name('cart.index');
Route::post('/add', [App\Http\Controllers\CarritoController::class, 'add'])->name('cart.store');
Route::post('/update', [App\Http\Controllers\CarritoController::class, 'update'])->name('cart.update');
Route::post('/remove', [App\Http\Controllers\CarritoController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [App\Http\Controllers\CarritoController::class, 'clear'])->name('cart.clear');


/*Rutas*/
Route::resource('PanelAdministrativo/categorias', CategoryController::class)->middleware('auth');
Route::resource('PanelAdministrativo/productos', ProductController::class)->middleware('auth');
Route::resource('PanelAdministrativo/usuarios', UserController::class)->middleware('auth');
Route::get('PanelAdministrativo/pdf/productos', [ProductController::class,'pdf'])->name('product.pdf');
