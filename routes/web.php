<?php

use App\Livewire\Dashboard;

use App\Livewire\Items\BarangList;
use App\Models\ItemImage;

use App\Livewire\Items\BarangMaintenance;

use App\Livewire\Agendas\Agenda;
use App\Models\AgendaImage;

use App\Livewire\Arsip\DocumentArchive;
use App\Livewire\Arsip\ArchiveCreate;
use App\Livewire\Arsip\ArchiveEdit;

use App\Livewire\Layanan\Provider;
use App\Livewire\Layanan\ProviderCreate;
use App\Livewire\Layanan\ProviderEdit;

use App\Livewire\User\UserAplikasi;

use App\Livewire\Troubleshoots\Trouble;
use App\Livewire\Troubleshoots\TroubleCreate;
use App\Livewire\Troubleshoots\TroubleEdit;

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

Route::get('/barang', BarangList::class)->name('barang');
Route::resource('foto-barang',BarangList::class);

Route::get('/maintenance-barang', BarangMaintenance::class)->name('maintenance');

Route::get('/agenda', Agenda::class)->name('agenda');
Route::resource('foto-kegiatan',Agenda::class);

Route::get('/arsip-dokumen', DocumentArchive::class)->name('arsip');
Route::get('/arsip/create', ArchiveCreate::class)->name('arsip.create');
Route::get('/arsip/edit/{id}', ArchiveEdit::class)->name('arsip.edit');

Route::get('/layanan', Provider::class)->name('provider');
Route::get('/layanan/create', ProviderCreate::class)->name('provider.create');
Route::get('/layanan/edit/{id}', ProviderEdit::class)->name('provider.edit');

Route::get('/user-aplikasi', UserAplikasi::class)->name('user');
Route::get('/user-permintaan', UserAplikasi::class)->name('user.Permintaan');

Route::get('/troubleshooting', Trouble::class)->name('trouble');
Route::get('/troubleshooting/create', TroubleCreate::class)->name('trouble.create');
Route::get('/troubleshooting/edit/{id}', TroubleEdit::class)->name('trouble.edit');





Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {
    Route::get('', [RoutingController::class, 'index'])->name('root');
    Route::get('/home', fn() => view('livewire.dashboard'))->name('home');
    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    Route::get('{any}', [RoutingController::class, 'root'])->name('any');
});


