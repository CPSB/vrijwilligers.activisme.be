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

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@backend')->name('home');

Route::resource('contact', 'ContactController');
Route::resource('disclaimer', 'DisclaimerController');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/settings', 'AccountSettingsController@index')->name('settings.index'); 
    Route::post('/settings/info', 'AccountSettingsController@updateInfo')->name('settings.info');
    Route::post('/settings/password', 'AccountSettingsController@updateSecurity')->name('settings.security');

    Route::resource('backend/contact', 'ContactBackendController', ['names' => [
        'index' => 'contact.backend.index',
        'store' => 'contact.backend.store'
    ]]);

    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
});
