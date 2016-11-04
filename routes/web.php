<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('personal-loan','LoanController@personal_loan');
Route::get('home-loan','LoanController@home_loan');
Route::get('loan-against-property','LoanController@lap');
Route::get('sme-loan','LoanController@sme_loan');
Route::get('home-loan-transfer','LoanController@home_loan_transfer');
Route::get('car-loan','LoanController@car_loan');

Route::get('apply_personal_loan','LoanController@apply');
Route::get('compare','CompareController@compare');
Route::get('emi','CompareController@emi');
Route::get('credit-report','CompareController@credit_report');
Route::get('contact-us','ContactController@contact_us'); //not linked to index till now

