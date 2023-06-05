<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeAdminController;
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

Route::redirect('/', '/login');
Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    // CRUD Profile
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::get('profileAdmin', [ProfileAdminController::class, 'index'])->name('profileAdmin');
    Route::get('profileUser', [ProfileUserController::class, 'index'])->name('profileUser');
    Route::post('profileAdminUpdate', [ProfileAdminController::class, 'update'])->name('profileAdminUpdate');
    Route::post('profileUserUpdate', [ProfileUserController::class, 'update'])->name('profileUserUpdate');
    Route::put('profile/password', [ProfileController::class, 'password'])->name('profile.password');

    // CRUD Program Kerja
    // >///<

    // CRUD Tugas Program Kerja
    Route::get('tugasprokers', [TugasprokerController::class, 'index'])->name('tugasprokers');
    Route::post('tugasprokers', [TugasprokerController::class, 'store'])->name('tugasprokers.store');
    Route::put('tugasprokers/{tugasproker}', [TugasprokerController::class, 'update'])->name('tugasproker.update');
    Route::delete('tugasprokers/{tugasproker}', [TugasprokerController::class, 'destroy'])->name('tugasproker.destroy');

    // CRUD DataSIE
    Route::put('datasies/{id}', [DatasieController::class, 'update'])->name('datasies.update');
    Route::put('datasie/{id}', [DatasieController::class, 'delete'])->name('datasie.delete');

    // Return Views
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/home_admin', [HomeAdminController::class, 'index'])->name('home_admin');
    Route::get('dataAnggota', [DataAnggotaController::class, 'index'])->name('dataAnggota');
    Route::get('editDataSie', [EditDataSieController::class, 'index'])->name('editDataSie');
    Route::get('halamanDataSie', [HalamanDataSieController::class, 'index'])->name('halamanDataSie');
    Route::get('halamanEditProker', [HalamanEditProkerController::class, 'index'])->name('halamanEditProker');
    Route::get('halamanProkerUser', [HalamanProkerUserController::class, 'index'])->name('halamanProkerUser');
    Route::get('halamanProker', [HalamanProkerController::class, 'index'])->name('halamanProker');
    Route::get('halamanUploadTugasUser', [HalamanUploadTugasUserController::class, 'index'])->name('halamanUploadTugasUser');
    Route::get('tambahDataAnggota', [TambahDataAnggotaController::class, 'index'])->name('tambahDataAnggota');
    Route::get('tambahDataSie', [TambahDataSieController::class, 'index'])->name('tambahDataSie');
    Route::get('tambahProker', [TambahProkerController::class, 'index'])->name('tambahProker');
    Route::get('tambahTugas', [TambahTugasController::class, 'index'])->name('tambahTugas');

});

