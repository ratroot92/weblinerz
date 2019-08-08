<?php
use App\Http\Controllers\employee_login_controller;

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









Route::get('/hr_dashboard', function () {
    return view('hr/hr_dashboard');
})->name('hr_dashboard');


Route::get('/employee_dashboard', function () {
    return view('/employees/employee_dashboard');
})->name('employee_dashboard');


Route::get('employees/employee_login', function () {
    return view('employees/employee_login');
})->name('employeelogin');







Route::get('/hr_employee_add', function () {
    return view('/hr/hr_employee_add');
})->name('hr_employee_add');







//root for employee login
Route::post('/login','employee_login_controller@login');
