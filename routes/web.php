<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\PersonnelsController;
use App\Http\Controllers\DepensesController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\CouturesController;
use App\Http\Controllers\Rendez_vousController;
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
Route::get('/',function () {
   return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('Clients/clients', [ClientsController::class, 'clients'])->name('clients');

Route::get('Models/models', [ModelsController::class, 'models'])->name('models');

Route::get('Personnels/personnels', [PersonnelsController::class, 'personnels'])->name('personnels');

Route::get('Depenses/depenses', [DepensesController::class, 'depenses'])->name('depenses');

Route::get('Paiement/paiement', [PaiementController::class, 'paiement'])->name('paiement');

Route::get('Coutures/coutures', [CouturesController::class, 'coutures'])->name('coutures');

Route::get('Rendez_vous/rendez_vous', [Rendez_vousController::class, 'rendez_vous'])->name('rendez_vous');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
