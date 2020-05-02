<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('home', function () {
    return view('welcome');
});
Route::get('admin','AdminController@index')->name('admin');
Route::get('tenantDetails','TenantRecordsController@index');
Route::resource('propertyUnits','PropertyHousesController');
Route::resource('serviceBill','ServiceBillController');
Route::resource('propertyHouseServiceBill','PropertyHouseServiceBillController');
Route::get('profile','AdminProfileController@index');
Route::view('test','test');
Route::get('tenant','TenantController@index')->name('tenant');
Route::view('tables','tables');
Route::get('/','LoginController@index');
Route::resource('property','PropertyController');
Route::post('loginC','LoginController@login')->name('loginCustom');
Auth::routes();

