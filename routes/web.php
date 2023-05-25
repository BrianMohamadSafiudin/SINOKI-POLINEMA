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

    Route::get('dataAnggota', function () {return view('dataAnggota');})->name('dataAnggota');
    Route::get('editDataSie', function () {return view('editDataSie');})->name('editDataSie');
    Route::get('halamanDataSie', function () {return view('halamanDataSie');})->name('halamanDataSie');
    Route::get('halamanEditProker', function () {return view('halamanEditProker');})->name('halamanEditProker');
    Route::get('halamanProkerUser', function () {return view('halamanProkerUser');})->name('halamanProkerUser');
    Route::get('halamanUploadTugasUser', function () {return view('halamanUploadTugasUser');})->name('halamanUploadTugasUser');
    Route::get('profileAdmin', function () {return view('profileAdmin');})->name('profileAdmin');
    Route::get('profileUser', function () {return view('profileUser');})->name('profileUser');
    Route::get('tambahDataAnggota', function () {return view('tambahDataAnggota');})->name('tambahDataAnggota');
    Route::get('tambahDataSie', function () {return view('tambahDataSie');})->name('tambahDataSie');
    Route::get('tambahProker', function () {return view('tambahProker');})->name('tambahProker');
    Route::get('tambahTugas', function () {return view('tambahTugas');})->name('tambahTugas');
// tes
});

