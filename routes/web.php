<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\isAuthenticated;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('/registro', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/registro', [AuthController::class, 'register'])->name('registro.submit');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware([isAuthenticated::class])->group(function () {
    route::get('/panel', [AuthController::class, 'panel'])->name('panel');

    //rutas para usuario
    route::get('/usuario', [UserController::class, 'index'])->name('usuario.index');
    
    route::get('/usuario/creado', [UserController::class, 'create'])->name('usuario.create');
    route::post('/usuario/creado', [UserController::class, 'store'])->name('usuario.store');
    
    route::get('/usuario/update/{id}', [UserController::class, 'edit'])->name('usuario.update');
    route::post('/usuario/update/{id}', [UserController::class, 'update'])->name('usuario.update.data');
    
    route::get('/usuario/delete/{id}', [UserController::class, 'destroy'])->name('usuario.destroy');
    
    //rutas para producto
    route::get('/producto', [ProductoController::class, 'index'])->name('producto.index');
    
    route::get('/producto/creado', [ProductoController::class, 'create'])->name('producto.create');
    route::post('/producto/creado', [ProductoController::class, 'store'])->name('producto.store');
    
    route::get('/producto/update/{id}', [ProductoController::class, 'edit'])->name('producto.update');
    route::post('/producto/update/{id}', [ProductoController::class, 'update'])->name('producto.update.data');
    
    route::get('/producto/delete/{id}', [ProductoController::class, 'destroy'])->name('producto.destroy');
    
    //rutas para facturas
    
    route::get('/factura', [FacturaController::class, 'index'])->name('factura.index');
    
    route::get('/factura/creado', [FacturaController::class, 'create'])->name('factura.create');
    route::post('/factura/creado', [FacturaController::class, 'store'])->name('factura.store');
    
    route::get('/factura/update/{id}', [FacturaController::class, 'edit'])->name('factura.update');
    route::post('/factura/update/{id}', [FacturaController::class, 'update'])->name('factura.update.data');
    
    route::get('/factura/delete/{id}', [FacturaController::class, 'destroy'])->name('factura.destroy');
    
});


