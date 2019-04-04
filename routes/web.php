<?php

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

Route::get('/', function () {
    return view('auth.acceder');
});

// Auth::routes();

// RUTAS DE ACCESO
	// Authentication Routes...
    Route::get('acceder', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('acceder', 'Auth\LoginController@login');
    Route::post('salir', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    Route::get('registrar', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('registrar', 'Auth\RegisterController@register');

    // Password Reset Routes...
    Route::get('contraseña/resetear', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('contraseña/correo', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('contraseña/resetear/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('contraseña/resetear', 'Auth\ResetPasswordController@reset');
// RUTAS DE ACCESO

Route::get('/home', 'HomeController@index')->name('home');

// ADMISION

    // persona
    Route::resource('/admision/persona', 'PersonController');