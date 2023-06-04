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
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/home_admin', [HomeAdminController::class, 'index'])->name('home_admin');

	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::get('profileAdmin', ['as' => 'profileAdmin', 'uses' => 'App\Http\Controllers\ProfileAdminController@index']);
    Route::get('profileUser', ['as' => 'profileUser', 'uses' => 'App\Http\Controllers\ProfileUserController@index']);
	Route::post('profileAdminUpdate', ['as' => 'profileAdminUpdate', 'uses' => 'App\Http\Controllers\ProfileAdminController@update']);
	Route::post('profileUserUpdate', ['as' => 'profileUserUpdate', 'uses' => 'App\Http\Controllers\ProfileUserController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

    Route::post('tugasprokers', ['as' => 'tugasprokers', 'uses' => 'App\Http\Controllers\TugasprokerController@store']);
    Route::get('tugasprokers', ['as' => 'tugasprokers', 'uses' => 'App\Http\Controllers\TugasprokerController@index']);
    Route::put('tugasprokers/{tugasproker}', 'App\Http\Controllers\TugasprokerController@update')->name('tugasproker.update');
    Route::delete('tugasprokers/{tugasproker}', 'App\Http\Controllers\TugasprokerController@destroy')->name('tugasproker.destroy');

    Route::get('dataAnggota', ['as' => 'dataAnggota', 'uses' => 'App\Http\Controllers\DataAnggotaController@index']);
    Route::get('editDataSie', ['as' => 'editDataSie', 'uses' => 'App\Http\Controllers\EditDataSieController@index']);
    Route::get('halamanDataSie', ['as' => 'halamanDataSie', 'uses' => 'App\Http\Controllers\HalamanDataSieController@index']);
    Route::get('halamanEditProker', ['as' => 'halamanEditProker', 'uses' => 'App\Http\Controllers\HalamanEditProkerController@index']);
    Route::get('halamanProkerUser', ['as' => 'halamanProkerUser', 'uses' => 'App\Http\Controllers\HalamanProkerUserController@index']);
    Route::get('halamanProker', ['as' => 'halamanProker', 'uses' => 'App\Http\Controllers\HalamanProkerController@index']);
    Route::get('halamanUploadTugasUser', ['as' => 'halamanUploadTugasUser', 'uses' => 'App\Http\Controllers\HalamanUploadTugasUser@index']);
    Route::get('tambahDataAnggota', ['as' => 'tambahDataAnggota', 'uses' => 'App\Http\Controllers\TambahDataAnggotaController@index']);
    Route::get('tambahDataSie', ['as' => 'tambahDataSie', 'uses' => 'App\Http\Controllers\TambahDataSieController@index']);
    Route::get('tambahProker', ['as' => 'tambahProker', 'uses' => 'App\Http\Controllers\TambahProkerController@index']);
    Route::get('tambahTugas', ['as' => 'tambahTugas', 'uses' => 'App\Http\Controllers\TambahTugasController@index']);
    // tes

});

