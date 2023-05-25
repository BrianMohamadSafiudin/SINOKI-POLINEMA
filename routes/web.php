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
    Route::get('profile_admin', ['as' => 'profile.edit_admin', 'uses' => 'App\Http\Controllers\ProfileController@editAdmin']);
	Route::put('profile_admin', ['as' => 'profile.update_admin', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

    Route::get('dataAnggota', ['as' => 'dataAnggota', 'uses' => 'App\Http\Controllers\DataAnggotaController@index']);
    Route::get('EditDataSie', ['as' => 'EditDataSie', 'uses' => 'App\Http\Controllers\EditDataSieController@index']);
    Route::get('HalamanDataSie', ['as' => 'HalamanDataSie', 'uses' => 'App\Http\Controllers\HalamanDataSieController@index']);
    Route::get('halamanEditProker', ['as' => 'halamanEditProker', 'uses' => 'App\Http\Controllers\HalamanEditProkerController@index']);
    Route::get('halamanProkerUser', ['as' => 'halamanProkerUser', 'uses' => 'App\Http\Controllers\HalamanProkerUserController@index']);
    Route::get('halamanProker', ['as' => 'halamanProker', 'uses' => 'App\Http\Controllers\HalamanProkerController@index']);
    Route::get('halamanUploadTugasUser', ['as' => 'halamanUploadTugasUser', 'uses' => 'App\Http\Controllers\HalamanUploadTugasUserController@index']);
    Route::get('profileAdmin', ['as' => 'profileAdmin', 'uses' => 'App\Http\Controllers\ProfileAdminController@index']);
    Route::get('profileUser', ['as' => 'profileUser', 'uses' => 'App\Http\Controllers\ProfileUserController@index']);
    Route::get('tambahDataAnggota', ['as' => 'tambahDataAnggota', 'uses' => 'App\Http\Controllers\TambahDataAnggotaController@index']);
    Route::get('tambahDataSie', ['as' => 'tambahDataSie', 'uses' => 'App\Http\Controllers\TambahDataSieController@index']);
    Route::get('tambahProker', ['as' => 'tambahProker', 'uses' => 'App\Http\Controllers\TambahProkerController@index']);
    Route::get('tambahTugas', ['as' => 'tambahTugas', 'uses' => 'App\Http\Controllers\TambahTugasController@index']);
    // tes

});

