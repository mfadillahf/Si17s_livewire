<?php

use App\Livewire\Agendas\Agenda;
use App\Livewire\Agendas\AgendaCalendar;
use App\Livewire\Dashboard;
use App\Livewire\Items\BarangList;
use App\Livewire\Items\BarangMaintenance;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;

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

// template
require __DIR__ . '/auth.php';
// administrasi
Route::get('/dashboard', Dashboard::class);

Route::get('/barang', BarangList::class);

Route::get('/maintenance-barang', BarangMaintenance::class);

Route::get('/agenda', Agenda::class);

Route::get('/agenda-kalender', AgendaCalendar::class);


Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {
    Route::get('', [RoutingController::class, 'index'])->name('root');
    Route::get('/home', fn() => view('livewire.dashboard'))->name('home');
    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    Route::get('{any}', [RoutingController::class, 'root'])->name('any');
});


