<?php

use App\Http\Controllers\DashboardController;
use App\Livewire\Guest\HuespedesComponent;
use App\Livewire\HabitacionesComponent;
use App\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Livewire\Administrador\About\AboutAdminComponent;
use App\Livewire\Administrador\About\AboutFormCardComponent;
use App\Livewire\Administrador\HomeAdminComponent;
use App\Livewire\Administrador\Services\ServicesAdminComponent;
use App\Livewire\Administrador\ServicesUsConfigComponent;
use App\Livewire\Public\AboutUsComponent;
use App\Livewire\Public\ServicesUsComponent;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('livewire.home-component');
// });






Route::get('/', [HomeController::class, 'create'])->name('home');


// Route::get('/', HomeComponent::class);


// Ruta de registro solo si no hay usuarios en la base de datos
if (User::count() === 0) {
    Route::get('register', 'Laravel\Fortify\Http\Controllers\RegisteredUserController@create')
        ->name('register');
    Route::post('register', 'Laravel\Fortify\Http\Controllers\RegisteredUserController@store');
} else {
    Route::redirect('register', '/'); // Redirige a la página de inicio si ya hay usuarios registrados
}

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::get('/dashboard', [DashboardController::class, 'create'])->name('dashboard');
    Route::get('/homeAdmin', HomeAdminComponent::class)->name('homeAdmin');


    Route::get('/administrar-habitaciones', HabitacionesComponent::class)->name('administrar-habitaciones');

    Route::get('/administrar-huespedes', HuespedesComponent::class)->name('administrar-huespedes');

    Route::get('/about-us-admin', AboutAdminComponent::class)->name('about-us-admin');

    Route::get('/about-form-card-component', AboutFormCardComponent::class);


    Route::get('/services-admin', ServicesAdminComponent::class)->name('services-admin');




});
