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
use App\Livewire\User\UserCreate;
use App\Livewire\User\UserEdit;

use App\Livewire\Request\UserRequest;
use App\Livewire\Request\RequestCreate;
use App\Livewire\Request\RequestEdit;

use App\Livewire\Troubleshoots\Trouble;
use App\Livewire\Troubleshoots\TroubleCreate;
use App\Livewire\Troubleshoots\TroubleEdit;

use App\Livewire\Pengaturan\DataUser;
use App\Livewire\Pengaturan\DataCreate;
use App\Livewire\Pengaturan\DataEdit;
use App\Livewire\Pengaturan\ChangePassword;

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

// item
Route::get('/barang', BarangList::class)->name('barang');
Route::resource('foto-barang',BarangList::class);
Route::get('/maintenance-barang', BarangMaintenance::class)->name('maintenance');

// ageda
Route::get('/agenda', Agenda::class)->name('agenda');
Route::resource('foto-kegiatan',Agenda::class);

// dokumen arsip
Route::get('/arsip-dokumen', DocumentArchive::class)->name('arsip');
Route::get('/arsip/create', ArchiveCreate::class)->name('arsip.create');
Route::get('/arsip/edit/{id}', ArchiveEdit::class)->name('arsip.edit');

// penyedia
Route::get('/layanan', Provider::class)->name('provider');
Route::get('/layanan/create', ProviderCreate::class)->name('provider.create');
Route::get('/layanan/edit/{id}', ProviderEdit::class)->name('provider.edit');

// user app
Route::get('/user-aplikasi', UserAplikasi::class)->name('user');
Route::get('/user-aplikasi/create', UserCreate::class)->name('user.create');
Route::get('/user-aplikasi/edit/{id}', UserEdit::class)->name('user.edit');

//user req
Route::get('/user-permintaan', UserRequest::class)->name('user.permintaan');
Route::get('/user-permintaan/create', RequestCreate::class)->name('permintaan.create');
Route::get('/user-permintaan/edit{id}', RequestEdit::class)->name('permintaan.edit');


// troubleshooting
Route::get('/troubleshooting', Trouble::class)->name('trouble');
Route::get('/troubleshooting/create', TroubleCreate::class)->name('trouble.create');
Route::get('/troubleshooting/edit/{id}', TroubleEdit::class)->name('trouble.edit');


// Pengaturan
Route::get('/data-user', DataUser::class)->name('datauser');
Route::get('/data-user/create', DataCreate::class)->name('datauser.create');
Route::get('/data-user/edit/{id}', DataEdit::class)->name('datauser.edit');
Route::get('/change-password', ChangePassword::class)->name('pass');




// template
Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {
    Route::get('', [RoutingController::class, 'index'])->name('root');
    Route::get('/home', fn() => view('livewire.dashboard'))->name('home');
    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    Route::get('{any}', [RoutingController::class, 'root'])->name('any');
});


