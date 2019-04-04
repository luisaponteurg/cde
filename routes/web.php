<?php

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
// ADMISTRACION
    // periodos
    Route::group(['prefix'=>'administracion'],function(){

        Route::resource('periodos','PeriodController');
        Route::resource('bancos','BankController');
        // RUTAS PRUEBAS
        Route::group(['prefix'=>'precargar'],function(){
            // lapso
            Route::resource('lapso', 'LapseController');
            // lapso
        });
        // RUTAS PRUEBAS
        
    });
    // periodos
// ADMISTRACION


// ADMISION
    // persona
    Route::resource('admision/persona', 'PersonController');
    // persona
// ADMISION


