<?php

use App\Http\Controllers\AndroidTerminalController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\TicketController;
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

//Ruta para mostrar los tickets que esten en la BD
Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');


//Ruta para mostrar las empresas que esten creadas en la BD
Route::get('/company', [CompanyController::class, 'index'])->name('companies.index');

//Ruta para mostrar la vista de creacion de empresas
Route::get('/company/create', [CompanyController::class, 'create'])->name('companies.create');

//Ruta para mostrar el detalle de una empresa
Route::get('/company/{company}', [CompanyController::class, 'show'])->name('companies.show');

//Ruta para guardar los datos de la empresa en la BD
Route::post('/company', [CompanyController::class, 'store'])->name('companies.store');

//Ruta para mostrar la vista de edición
Route::get('/company/{company}/edit', [CompanyController::class, 'edit'])->name('companies.edit');

//Ruta para guardar los cambios en la BD
Route::patch('/company/{company}', [CompanyController::class, 'update'])->name('companies.update');

//Ruta para mostrar los distintos dispositivos POS en la BD
Route::get('/terminal', [AndroidTerminalController::class, 'index'])->name('terminals.index');

//Ruta para mostrar el contenido de un dispositivo POS
Route::get('/terminal/{terminal}', [AndroidTerminalController::class, 'show'])->name('terminals.show');