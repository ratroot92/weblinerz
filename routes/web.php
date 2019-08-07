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


Route::get('/employee_home_view', function () {
    return view('employees/employee_home_view');
});



Route::get('/', function () {
    return view('home');
})->name('home');



Route::get('/employee_home_view', function () {
    return view('employees/employee_home_view');
})->name('employee_home_view');




Route::get('/employee', function () {
    return view('employees/employee');
})->name('employee');






Route::get('/hr_dashboard', function () {
    return view('hr/hr_dashboard');
})->name('hr_dashboard');


Route::get('/employee_dashboard', function () {
    return view('/employees/employee_dashboard');
})->name('employee_dashboard');




Route::get('/employees/employee_login
', function () { return view('/employees/employee_login');
});






Route::get('/hr_employee_add', function () {
    return view('/hr/hr_employee_add');
})->name('hr_employee_add');


//route for adding employee
Route::post('Add_Employee','employee@Add_Employee')->name('Add_Employee');
//end of route


//route for Authenticate_employee_login
Route::post('Authenticate_employee_login','employee@Authenticate_employee_login')->name('Authenticate_employee_login');
//end of route

//route for Authenticate_employee_login_by_email
Route::post('Authenticate_employee_login_by_email','employee@Authenticate_employee_login_by_email')->name('Authenticate_employee_login');
//end of route



