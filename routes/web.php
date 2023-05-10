<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

    Route::get('dataProkerAdmin', function () {return view('auth.dataProkerAdmin');})->name('dataProkerAdmin');
    Route::get('halamanProkerAdmin', function () {return view('auth.halamanProkerAdmin');})->name('halamanProkerAdmin');
    Route::get('tambahDataAnggota', function () {return view('auth.tambahDataAnggota');})->name('tambahDataAnggota');

    Route::get('tambahDataSie', function () {return view('auth.tambahDataSie');})->name('tambahDataSie');
    Route::get('tambahDataTugas', function () {return view('auth.tambahDataTugas');})->name('tambahDataTugas');
    Route::get('tambahProkerAdmin', function () {return view('auth.tambahProkerAdmin');})->name('tambahProkerAdmin');
    Route::get('tambahTugasAdmin', function () {return view('auth.tambahTugasAdmin');})->name('tambahTugasAdmin');

	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade');
	Route::get('map', function () {return view('pages.maps');})->name('map');
	Route::get('icons', function () {return view('pages.icons');})->name('icons');
	Route::get('table-list', function () {return view('pages.tables');})->name('table');

});

