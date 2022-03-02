
<?php
use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/clientes/novo', [ClientesController::class, 'create'])->name('clientes.create');
Route::post('/admin/clientes/novo', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/admin/clientes/', [ClientesController::class, 'index'])->name('clientes.index');
Route::get('/admin/clientes/ver/{id}', [ClientesController::class, 'show'])->name('clientes.show');
Route::get('/admin/clientes/editar/{id}', [ClientesController::class, 'edit'])->name('clientes.edit');
Route::put('/admin/clientes/editar/{id}', [ClientesController::class, 'update'])->name('clientes.update');
Route::delete('/admin/clientes/{id}', [ClientesController::class, 'destroy'])->name('clientes.destroy');


