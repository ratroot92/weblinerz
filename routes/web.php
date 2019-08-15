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





Route::get('/', function () {
    return view('home');
})->name('home');


//it will open news page
Route::get('/employee_login', function () {
    return view('employees/employee_home_view');
})->name('employee_login');








Route::get('hr_login', function () {
    return view('/hr/auth/login');
})->name('hr_login');


  
  //open hr employee dashboard
Route::get('/employee_dashboard', function () {
    $employees = DB::select('select * from employees');
    return view('/employees/employee_dashboard',compact('employees'));
})->name('employee_dashboard');




//root for employee login to employee_dashboard
Route::post('/employee_dashboard_by_email','employee_login_controller@login')->name('employee_dashboard_by_email');



//root for employee login to employee_dashboard
Route::post('/employee_dashboard_by_name','employee_login_controller@login_by_name')->name('employee_dashboard_by_name');





//root for employee login to employee_dashboard
Route::post('/hr_dashboard','hr_login_controller@login')->name('login_as_hr');




//root for adding employee data by hr related employee dashboard
Route::post('/add_employee','employee_login_controller@add_employee');

Route::group(['middleware' => 'is-user'], function () { 
    
    


  



//open hr dashboard
Route::get('hr/hr_dashboard', function () {
    return view('hr/hr_dashboard');
})->name('hr_dashboard');






});