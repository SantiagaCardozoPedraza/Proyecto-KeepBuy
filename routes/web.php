<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\FacturaController;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ContactComponent;
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

Route::get('/', function () {
    return view('auth.login');
});

/*
Route::get('/VistaAdministrador', function () {
    return view('VistaAdministrador.pagina');
});

Route::get('/VistaAdministrador/productedit',[ProductoController::class,'create']);*/

Route::resource('VistaAdministrador',ProductoController::class)->middleware('auth');

//'register'=>false, esto iva antes del reset
Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', [ProductoController::class, 'index'])->name('home');


Route::group(['middleware'=>'auth'],function () {
    Route::get('/', [ProductoController::class, 'index'])->name('home');
    
});

Route::resource('VistaPersona',PersonaController::class);

Route::resource('VistaFactura',FacturaController::class);


Route::get('inicio',HomeComponent::class);

Route::get('shop',ShopComponent::class);

Route::get('cart',CartComponent::class);

Route::get('checkout',CheckoutComponent::class);

Route::get('contact',ContactComponent::class);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
