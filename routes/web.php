<?php

use App\Http\Controllers\AuthentificationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\Auth\LoginController;

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


Route::get('/', [WebsiteController::class, 'index']);
Route::get('/connexion', [WebsiteController::class, 'login'])->name('login');
Route::post('/connexion', [AuthentificationController::class, 'login'])->name('postLogin');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/inscription', [WebsiteController::class, 'register'])->name('inscription');
Route::post('/inscription_entreprise', [AuthentificationController::class, 'register_entreprise'])->name('inscription_entreprise');
Route::post('/inscription_client', [AuthentificationController::class, 'register_client'])->name('inscription_client');

Route::get('/service', [WebsiteController::class, 'services']);
Route::get('/services', [WebsiteController::class, 'search'])->name('services.search');

Route::get('/services/{slug}', [WebsiteController::class, 'showEntrepriseService'])->name('EntrepriseService.show');
Route::get('/services/{entreprise_nom}/details', [WebsiteController::class, 'serviceShow'])->name('serviceDetail.show');

Route::get('/about', [WebsiteController::class, 'about']);
Route::get('/contact', [WebsiteController::class, 'contact']);



// Les routes d'user ici
// Route::prefix('compagny')->middleware(['auth', 'verified' ,'role:compagny'])->group(function () {    // Sans validation email
    Route::prefix('compagny')->middleware(['auth' ])->group(function () {
        Route::get('/', [EntrepriseController::class, 'index']);

        // Route::resource('/service', EntrepriseController::class);

        // Route::get('/demandes/client', [EntrepriseController::class, 'demande']);

        Route::get('/mon_compte', [EntrepriseController::class, 'edit_account']);
        Route::post('/mon_compte', [EntrepriseController::class, 'update'])->name('update_profil');
        Route::get('/message', [EntrepriseController::class, 'message']);
        Route::get('/edit-password', [EntrepriseController::class, 'edit_password']);
        Route::get('/create-service', [EntrepriseController::class, 'create_service']);





    });


//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
