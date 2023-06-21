<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\ProfileAdminController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TugasprokerController;
use App\Http\Controllers\ProgramkerjaController;
use App\Http\Controllers\DatasieController;
use App\Http\Controllers\DataAnggotaController;
use App\Http\Controllers\EditDataSieController;
use App\Http\Controllers\HalamanDataSieController;
use App\Http\Controllers\HalamanEditProkerController;
use App\Http\Controllers\HalamanProkerUserController;
use App\Http\Controllers\HalamanProkerController;
use App\Http\Controllers\HalamanUploadTugasUserController;
use App\Http\Controllers\TambahDataAnggotaController;
use App\Http\Controllers\TambahDataSieController;
use App\Http\Controllers\TambahProkerController;
use App\Http\Controllers\TambahTugasController;

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

Route::redirect('/','/login');
Auth::routes();

Route::group(['middleware' => 'auth.admin'], function () {

    // CRUD Profile Admin.
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::get('profileAdmin', [ProfileAdminController::class, 'index'])->name('profileAdmin');
    Route::post('profileAdminUpdate', [ProfileAdminController::class, 'update'])->name('profileAdminUpdate');

    // CRUD Program Kerja.
    Route::get('programkerjas', [ProgramkerjaController::class, 'index'])->name('programkerjas');
    Route::post('programkerjas', [ProgramkerjaController::class, 'store'])->name('programkerjas.store');
    Route::put('programkerjas/{programkerja}', [ProgramkerjaController::class, 'update'])->name('programkerja.update');
    Route::delete('programkerjas/{programkerja}', [ProgramkerjaController::class, 'destroy'])->name('programkerja.destroy');

    // CRUD Tugas Program Kerja.
    Route::get('tugasprokers', [TugasprokerController::class, 'index'])->name('tugasprokers');
    Route::post('tugasprokers', [TugasprokerController::class, 'store'])->name('tugasprokers.store');
    Route::put('tugasproker/{tugasproker}', [TugasprokerController::class, 'update'])->name('tugasproker.update');
    Route::put('/tugasproker/deleteFile/{id}', [TugasprokerController::class, 'deleteFile'])->name('tugasproker.deleteFile');
    Route::delete('tugasprokers/{tugasproker}', [TugasprokerController::class, 'destroy'])->name('tugasproker.destroy');

    // CRUD DataSIE.
    Route::post('datasie', [DatasieController::class, 'store'])->name('tambahdatasie.store');
    Route::put('datasie/{id}', [DatasieController::class, 'update'])->name('datasie.update');
    Route::delete('datasie/{id}', [DatasieController::class, 'destroy'])->name('datasie.destroy');

    // Return Views Admin.
    Route::get('/home_admin', [HomeAdminController::class, 'index'])->name('home_admin');
    Route::get('/searchProker', [HomeAdminController::class, 'search'])->name('searchProker');
    Route::get('dataAnggota', [DataAnggotaController::class, 'index'])->name('dataAnggota');
    Route::delete('dataAnggota/{dataAnggota}', [DataAnggotaController::class, 'destroy'])->name('dataAnggota.destroy');
    Route::get('/search', [DataAnggotaController::class, 'search'])->name('search');
    Route::get('editDataSie', [EditDataSieController::class, 'index'])->name('editDataSie');
    Route::get('halamanDataSie', [HalamanDataSieController::class, 'index'])->name('halamanDataSie');
    Route::get('halamanEditProker', [HalamanEditProkerController::class, 'index'])->name('halamanEditProker');
    Route::get('halamanProker', [HalamanProkerController::class, 'index'])->name('halamanProker');
    Route::get('tambahDataAnggota', [TambahDataAnggotaController::class, 'index'])->name('tambahDataAnggota');
    Route::get('tambahDataSie', [TambahDataSieController::class, 'index'])->name('tambahDataSie');
    Route::get('tambahProker', [TambahProkerController::class, 'index'])->name('tambahProker');
    Route::get('tambahTugas', [TambahTugasController::class, 'index'])->name('tambahTugas');

});

Route::group(['middleware' => 'auth.user'], function () {

    // CRUD Profile User.
    Route::get('profileUser', [ProfileUserController::class, 'index'])->name('profileUser');
    Route::post('profileUserUpdate', [ProfileUserController::class, 'update'])->name('profileUserUpdate');
    Route::put('profileUserImage/{id}', [ProfileUserController::class, 'image'])->name('profileUserImage');
    Route::put('profile/password', [ProfileController::class, 'password'])->name('profile.password');
    Route::put('/profile/deleteImage/{id}', [ProfileUserController::class, 'deleteImage'])->name('profile.deleteImage');
    Route::delete('deleteImage/{deleteImage}', [ProfileUserController::class, 'destroy'])->name('profile.destroy');

    // CRUD Tugas Program Kerja User.
    Route::put('tugasprokers/{tugasproker}', [TugasprokerController::class, 'upload'])->name('tugasproker.upload');
    Route::get('/storage/{file}', [TugasprokerController::class, 'download'])->name('tugasproker.download');

    // Return Views User.
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('halamanProkerUser', [HalamanProkerUserController::class, 'index'])->name('halamanProkerUser');
    Route::get('halamanUploadTugasUser', [HalamanUploadTugasUserController::class, 'index'])->name('halamanUploadTugasUser');

});
