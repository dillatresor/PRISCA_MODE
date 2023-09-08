<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\PersonnelsController;
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

Route::get('Clients/ajout_client', [ClientsController::class, 'create'])->name('ajout_client');
Route::get('Clients/clients', [ClientsController::class, 'clients'])->name('clients');

Route::get('Models/ajout_models', [ModelsController::class, 'ajout_models'])->name('ajout_models');
Route::get('Models/models', [ModelsController::class, 'models'])->name('models');

Route::get('Personnels/ajout_personnels', [PersonnelsController::class, 'ajout_personnels'])->name('ajout_personnels');
Route::get('Personnels/personnels', [PersonnelsController::class, 'personnels'])->name('personnels');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
