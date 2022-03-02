
<?php
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\VeiculosController;
use App\Http\Controllers\ServicosController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

//Cliente
Route::get('/admin/clientes/novo', [ClientesController::class, 'create'])->name('clientes.create');
Route::post('/admin/clientes/novo', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/admin/clientes/', [ClientesController::class, 'index'])->name('clientes.index');
Route::get('/admin/clientes/ver/{id}', [ClientesController::class, 'show'])->name('clientes.show');
Route::get('/admin/clientes/editar/{id}', [ClientesController::class, 'edit'])->name('clientes.edit');
Route::put('/admin/clientes/editar/{id}', [ClientesController::class, 'update'])->name('clientes.update');
Route::delete('/admin/clientes/{id}', [ClientesController::class, 'destroy'])->name('clientes.destroy');

//Veículo
Route::get('/admin/veiculos/novo', [VeiculosController::class, 'create'])->name('veiculos.create');
Route::post('/admin/veiculos/novo', [VeiculosController::class, 'store'])->name('veiculos.store');
Route::get('/admin/veiculos/', [VeiculosController::class, 'index'])->name('veiculos.index');
Route::get('/admin/veiculos/ver/{id}', [VeiculosController::class, 'show'])->name('veiculos.show');
Route::get('/admin/veiculos/editar/{id}', [VeiculosController::class, 'edit'])->name('veiculos.edit');
Route::put('/admin/veiculos/editar/{id}', [VeiculosController::class, 'update'])->name('veiculos.update');
Route::delete('/admin/veiculos/{id}', [VeiculosController::class, 'destroy'])->name('veiculos.destroy');

//Serviços
Route::get('/admin/servicos/novo', [ServicosController::class, 'create'])->name('servicos.create');
Route::post('/admin/servicos/novo', [ServicosController::class, 'store'])->name('servicos.store');
Route::get('/admin/servicos/', [ServicosController::class, 'index'])->name('servicos.index');
Route::get('/admin/servicos/ver/{id}', [ServicosController::class, 'show'])->name('servicos.show');
Route::get('/admin/servicos/editar/{id}', [ServicosController::class, 'edit'])->name('servicos.edit');
Route::put('/admin/servicos/editar/{id}', [ServicosController::class, 'update'])->name('servicos.update');
Route::delete('/admin/servicos/{id}', [ServicosController::class, 'destroy'])->name('servicos.destroy');