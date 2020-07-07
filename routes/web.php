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
Route::get('registerUrls','MpesaPaymentController@registerUrls');
Route::post('getPayment','MpesaPaymentController@getPayment');
Route::post('getValidation', 'MpesaPaymentController@getValidation');
Route::get('simulate', 'MpesaPaymentController@simulate');
Route::get('lipa', 'MpesaPaymentController@lipaNaMpesa');


Route::get('hhh', function () {
    return view('welcome');
});
    Route::middleware('auth')->group(function () {

        Route::get('admin', 'AdminController@index')->name('admin');
        Route::resource('tenantDetails', 'TenantRecordsController');
        Route::post('tenant/{id}', 'TenantRecordsController@update');
        Route::post('deleteUser/{id}', 'TenantRecordsController@deleteUser');
        Route::get('ajax', 'TenantController@getHouses');
        Route::get('ajax1', 'TenantController@getHouseDetails');
        Route::get('ajax2', 'BillController@getTenant');
        Route::get('ajax3', 'MessageController@getMessage');
        Route::get('ajax4', 'TenantController@getEditDetails');
        Route::get('ajax5', 'TenantController@getEditHouse');


        Route::resource('propertyUnits', 'PropertyHousesController');
        Route::post('propertyUnitsDelete/{id}', 'PropertyHousesController@delete');

        Route::post('editHouse/{id}', 'PropertyHousesController@update');

        Route::get('getHouses', 'PropertyHousesController@getHouses');
        Route::resource('serviceBill', 'ServiceBillController');
        Route::resource('propertyHouseServiceBill', 'PropertyHouseServiceBillController');
        Route::post('propertyHouseServiceBill/{id}', 'PropertyHouseServiceBillController@delete');

        Route::post('editServiceBill/{id}', 'PropertyHouseServiceBillController@update');

        Route::get('profile', 'AdminProfileController@index');
        Route::view('test', 'test');
        Route::get('tenant', 'TenantController@index')->name('tenant');
        Route::view('tables', 'tables');
        Route::get('/', 'LoginController@index');
        Route::resource('property', 'PropertyController');
        Route::post('loginC', 'LoginController@login')->name('loginCustom');
        Route::resource('bill', 'BillController');
        Route::post('deleteBill/{id}', 'BillController@deleteBill');
        Route::resource('paymentBilling', 'PaymentBillingController');
        Route::resource('reportView', 'ReportViewController');
        Route::resource('paidTenants', 'PaidTenantController');
        Route::resource('unpaidTenants', 'UnpaidTenantController');
        Route::resource('payments', 'PaymentController');
        Route::get('cashPayments', 'PaymentController@cashPayments');
        Route::get('mpesaPayments', 'MpesaPaymentController@getPayments');
        Route::resource('monthlyReview', 'MonthlyReviewController');
        Route::resource('sidebar', 'SidebarController');
        Route::resource('message', 'MessageController');
        Route::resource('report', 'ReportController');



        //tenant routes
        Route::resource('home', 'TenantController');
        Route::get('tenant/payments', 'PaymentController@TenantPayments');
        Route::resource('tenant/profile', 'ProfileController');
        Route::post('editTenantDetails', 'ProfileController@edit');





    });





Auth::routes();

