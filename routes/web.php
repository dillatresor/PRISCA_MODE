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

Route::get('liste_des_client', [ClientsController::class, 'clients'])->name('clients');
Route::get('formulaire_ajout_du client', [ClientsController::class, 'ajout_client'])->name('ajout_client');
Route::post('enregistrement_client', [ClientsController::class, 'store'])->name('store_client');

Route::get('Models/models', [ModelsController::class, 'models'])->name('models');
Route::get('Models/ajout_models', [ModelsController::class, 'ajout_models'])->name('ajout_models');
Route::post('ajout_models', [ModelsController::class, 'store'])->name('store_models');

Route::get('liste_des_personnels', [PersonnelsController::class, 'personnels'])->name('personnels');
Route::get('formulaire_personnels', [PersonnelsController::class, 'ajout_personnels'])->name('ajout_personnels');
Route::post('enregistrer_personnels', [PersonnelsController::class, 'store'])->name('store_personnels');

Route::get('Depenses/depenses', [DepensesController::class, 'depenses'])->name('depenses');

Route::get('Paiement/paiement', [PaiementController::class, 'paiement'])->name('paiement');
Route::get('formulaire_paiement', [PaiementController::class, 'ajout_paiement'])->name('ajout_paiement');
Route::post('addition_paiement', [PaiementController::class, 'store'])->name('store_paiement');


Route::get('Coutures/coutures', [CouturesController::class, 'coutures'])->name('coutures');

Route::get('Rendez_vous/rendez_vous', [Rendez_vousController::class, 'rendez_vous'])->name('rendez_vous');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
