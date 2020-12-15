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
    return view('welcome');
});
// Route::group(['middleware' => ['auth', 'user']], function() {
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/donors', 'UserController@index');
Route::post('/save-donors', 'UserController@store');
Route::get('/donors/{id}', 'UserController@edit');
Route::put('donors-update/{id}','UserController@update');
// });

//admin
Auth::routes();



Route::group(['middleware' => ['auth', 'admin']], function() {

    Route::get('/admin/dashboard','Admin\DashboardController@admindashboard');
    Route::get('/role-register','Admin\DashboardController@registered');
    Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
    Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
    Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');
    
});


