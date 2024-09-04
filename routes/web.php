<?php

use App\Livewire\Item;
use App\Livewire\Agenda;
use App\Livewire\Dashboard;
use App\Livewire\ItemMaintenance;
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

Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {
    Route::get('', [RoutingController::class, 'index'])->name('root');
    Route::get('/home', fn() => view('livewire.dashboard'))->name('home');
    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    Route::get('{any}', [RoutingController::class, 'root'])->name('any');
});

// administrasi
Route::get('/dashboard', Dashboard::class);
Route::get('/', App\Livewire\Item::class)->name('data.barang');
// Route::get('/item', Item::class);
Route::get('/item-maintenance', ItemMaintenance::class);
Route::get('/agenda', Agenda::class);

