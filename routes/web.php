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
Route::resource('tenantDetails','TenantRecordsController');
Route::post('deleteUser/{id}','TenantRecordsController@deleteUser');
Route::get('ajax','TenantController@getHouses');
Route::get('ajax1','TenantController@getHouseDetails');
Route::get('ajax2','BillController@getTenant');
Route::get('ajax3','MessageController@getMessage');


Route::resource('propertyUnits','PropertyHousesController');
Route::get('getHouses','PropertyHousesController@getHouses');
Route::resource('serviceBill','ServiceBillController');
Route::resource('propertyHouseServiceBill','PropertyHouseServiceBillController');
Route::get('profile','AdminProfileController@index');
Route::view('test','test');
Route::get('tenant','TenantController@index')->name('tenant');
Route::view('tables','tables');
Route::get('/','LoginController@index');
Route::resource('property','PropertyController');
Route::post('loginC','LoginController@login')->name('loginCustom');
Route::resource('bill','BillController');
Route::post('deleteBill/{id}','BillController@deleteBill');

Route::resource('paymentBilling','PaymentBillingController');
Route::resource('reportView','ReportViewController');
Route::resource('paidTenants','PaidTenantController');
Route::resource('unpaidTenants','UnpaidTenantController');
Route::resource('payments','PaymentController');
Route::get('cashPayments','PaymentController@cashPayments');
Route::resource('monthlyReview','MonthlyReviewController');
Route::resource('sidebar','SidebarController');
Route::resource('message','MessageController');



Auth::routes();

